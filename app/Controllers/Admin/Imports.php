<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;

use App\Models\ImportsModel;
use App\Models\SupplierModel;
use App\Models\ItemModel;
use App\Models\ProductModel;


class Imports extends BaseController
{
	public function index()
	{
        session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/public/admin/login');
        }
        $model = new ImportsModel();
        $supplier_model = new SupplierModel();
        $data['supplier'] = $supplier_model->findAll();
        $data['imports'] = $model->findAll();
        
		return view('/admin/import-coupon', $data);
	}

    public function add()
    {
        session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/public/admin/login');
        }
        $model = new ImportsModel();
        $supplier_model = new SupplierModel();
        $item_model = new ItemModel();
        $product_model = new ProductModel();
        $data['message'] = NULL;
        $data['supplier'] = $supplier_model->findAll();
        $data['product'] = $product_model->findAll();
        if($this->request->getMethod() == 'post'){
            
            $data_coupon = [
                'supplier_id' => $this->request->getVar('supplier_id'),
                'status' => 1,
                'created_at' => date("Y-m-d h:i:s"),
                // 'modified_at' => date("Y-m-d h:i:s"),
            ];
            $id_coupon = $model->insert($data_coupon);
            $product_array = $this->request->getVar('name');
            $product_quantity = $this->request->getVar('value');
            for ($i = 0; $i < count($product_array); $i++) {
                $price = $product_model->find($product_array[$i])['price'];
                $quantity_before = $product_model->find($product_array[$i])['quantity'];
                $data_item = [
                    'import_id' => $id_coupon,
                    'product_id' => (int)$product_array[$i],
                    'quantity' => (int)$product_quantity[$i],
                    'total' => (int)$price * (int)$product_quantity[$i],
                    'created_at' => date("Y-m-d h:i:s"),
                ];
                $item_model->insert($data_item);
                $product_model->update($product_array[$i],['quantity'=>(int)$quantity_before + $product_quantity[$i]]);
            }

            return redirect()->to(base_url()."/public/admin/imports");
        }
        return view('/admin/add-imports', $data);

    }
    public function delete(){
        session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/public/admin/login');
        }
        $model = new ImportsModel();
        $item_model = new ItemModel();
        $id = $_GET['id'];
        $item_model->where('import_id', $id)->delete();
        $model->where('id',$id)->delete();
        return redirect()->to(base_url()."/public/admin/imports");
    }
    public function detail(){
        session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/public/admin/login');
        }
        $id = $_GET['id'];
        $model = new ImportsModel();
        $supplier_model = new SupplierModel();
        $item_model = new ItemModel();
        $product_model = new ProductModel();
        $data['supplier'] = $supplier_model->findAll();
        $data['product'] = $product_model->findAll();
        $data['imports'] = $model->find($id);
        $data['items'] = $item_model->where('import_id', $id)->findAll();
        // print_r($data['items']);
        // die();
        return view('/admin/imports-detail', $data);
    }
}
