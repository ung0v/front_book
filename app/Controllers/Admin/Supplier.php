<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;

use App\Models\SupplierModel;

class Supplier extends BaseController
{
	public function index()
	{
        session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/public/admin/login');
        }
        $model = new SupplierModel();
        $data['supplier'] = $model->findAll();
		return view('/admin/supplier', $data);
	}

    public function add()
    {
        session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/public/admin/login');
        }
        $model = new SupplierModel();
        $data['message'] = NULL;
        if($this->request->getMethod() == 'post'){
            $data = [
                'name' => $this->request->getVar('supplier_name'),
                'address' => $this->request->getVar('supplier_addr'),
                'email' => $this->request->getVar('supplier_email'),
                'phone' => $this->request->getVar('supplier_phone'),
                'created_at' => date("Y-m-d h:i:s"),
                // 'modified_at' => date("Y-m-d h:i:s"),
            ];
            $checkName = $model->where('name', $data['name'])
            ->first();
            if (!empty($checkName)){
				$data['message'] = 'Tên nhà cung cấp đã được sử dụng';
				return view('/admin/add-supplier', $data);
            }
            else {
                $id = $model->insert($data);
                if ($id > 0){
                    return redirect()->to(base_url()."/public/admin/supplier");
                }
                else {
                    $data['message'] = 'Thêm thất bại';
				    return view('/admin/add-supplier', $data);
                }
            }
        }
        return view('/admin/add-supplier', $data);

    }
    public function edit()
    {
        session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/public/admin/login');
        }
        $model = new SupplierModel();
        $id = $_GET['id'];
        $data['message'] = NULL;
        $data['supplier'] = $model->find($id);
        
        if($this->request->getMethod() == 'post'){
            $insert_data = [
                'name' => $this->request->getVar('supplier_name'),
                'address' => $this->request->getVar('supplier_addr'),
                'email' => $this->request->getVar('supplier_email'),
                'phone' => $this->request->getVar('supplier_phone'),
                // 'created_at' => date("Y-m-d h:i:s"),
                'modified_at' => date("Y-m-d h:i:s"),
            ];
            if ($data['supplier']['name'] != $insert_data['name']){
                $checkName = $model->where('name', $insert_data['name'])->get();
                
                if ((int)$checkName->getNumRows() == 1){
                    $data['message'] = 'Tên nhà cung cấp đã được sử dụng ';
                    return view('/admin/edit-supplier', $data);
                }
            }
            $check = $model->update($id,$insert_data);
            if ((int)$check > 0){
                return redirect()->to(base_url()."/public/admin/supplier"); }
            
            else {
                $data['message'] = 'Sửa thất bại ';
                return view('/admin/edit-supplier', $data);
            }
        }
            
        return view('/admin/edit-supplier', $data);
    }
    public function delete(){
        session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/public/admin/login');
        }
        $model = new SupplierModel();
        $id = $_GET['id'];
        $model->where('id',$id)->delete();
        return redirect()->to(base_url()."/public/admin/supplier");
    }
}
