<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;

use App\Models\ShippingModel;

class Shipping extends BaseController
{
	public function index()
	{
        session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/public/admin/login');
        }
        $model = new ShippingModel();
        $data['shipping'] = $model->findAll();
		return view('/admin/shipping', $data);
	}

    public function add()
    {
        session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/public/admin/login');
        }
        $model = new ShippingModel();
        $data['message'] = NULL;
        if($this->request->getMethod() == 'post'){
            $data = [
                'name' => $this->request->getVar('shipping_name'),
                'address' => $this->request->getVar('shipping_addr'),
                'email' => $this->request->getVar('shipping_email'),
                'phone' => $this->request->getVar('shipping_phone'),
                'created_at' => date("Y-m-d h:i:s"),
                // 'modified_at' => date("Y-m-d h:i:s"),
            ];
            $checkName = $model->where('name', $data['name'])
            ->first();
            if (!empty($checkName)){
				$data['message'] = 'Tên nhà vận chuyển đã được sử dụng';
				return view('/admin/add-shipping', $data);
            }
            else {
                $id = $model->insert($data);
                if ($id > 0){
                    return redirect()->to(base_url()."/public/admin/shipping");
                }
                else {
                    $data['message'] = 'Thêm thất bại';
				    return view('/admin/add-shipping', $data);
                }
            }
        }
        return view('/admin/add-shipping', $data);

    }
    public function edit()
    {
        session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/public/admin/login');
        }
        $model = new ShippingModel();
        $id = $_GET['id'];
        $data['message'] = NULL;
        $data['shipping'] = $model->find($id);
        
        if($this->request->getMethod() == 'post'){
            $insert_data = [
                'name' => $this->request->getVar('shipping_name'),
                'address' => $this->request->getVar('shipping_addr'),
                'email' => $this->request->getVar('shipping_email'),
                'phone' => $this->request->getVar('shipping_phone'),
                // 'created_at' => date("Y-m-d h:i:s"),
                'modified_at' => date("Y-m-d h:i:s"),
            ];
            if ($data['shipping']['name'] != $insert_data['name']){
                $checkName = $model->where('name', $insert_data['name'])->get();
                
                if ((int)$checkName->getNumRows() == 1){
                    $data['message'] = 'Tên nhà vận chuyển đã được sử dụng ';
                    return view('/admin/edit-shipping', $data);
                }
            }
            $check = $model->update($id,$insert_data);
            if ((int)$check > 0){
                return redirect()->to(base_url()."/public/admin/shipping"); }
            
            else {
                $data['message'] = 'Sửa thất bại ';
                return view('/admin/edit-shipping', $data);
            }
        }
            
        return view('/admin/edit-shipping', $data);
    }
    public function delete(){
        session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/public/admin/login');
        }
        $model = new ShippingModel();
        $id = $_GET['id'];
        $model->where('id',$id)->delete();
        return redirect()->to(base_url()."/public/admin/shipping");
    }
}
