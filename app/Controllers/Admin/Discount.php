<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;

use App\Models\DiscountModel;

class Discount extends BaseController
{
	public function index()
	{
        session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/public/admin/login');
        }
        $model = new DiscountModel();
        $data['discount'] = $model->findAll();
		return view('/admin/discount', $data);
	}

    public function add()
    {
        session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/public/admin/login');
        }
        $model = new DiscountModel();
        $data['message'] = NULL;
        if($this->request->getMethod() == 'post'){
            $data = [
                'name' => $this->request->getVar('discount_name'),
                'discount_percent' => floatval($this->request->getVar('discount_percent')),
                'active' => $this->request->getVar('discount_active'),
                'created_at' => date("Y-m-d h:i:s"),
                // 'modified_at' => date("Y-m-d h:i:s"),
            ];
            $checkName = $model->where('name', $data['name'])
            ->first();
            if (!empty($checkName)){
				$data['message'] = 'Tên mã giảm giá đã được sử dụng';
				return view('/admin/add-discount', $data);
            }
            else {
                $id = $model->insert($data);
                if ($id > 0){
                    return redirect()->to(base_url()."/public/admin/discount");
                }
                else {
                    $data['message'] = 'Thêm thất bại';
				    return view('/admin/add-discount', $data);
                }
            }
        }
        return view('/admin/add-discount', $data);

    }
    public function edit()
    {
        session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/public/admin/login');
        }
        $model = new DiscountModel();
        $id = $_GET['id'];
        $data['discount'] = $model->find($id);
        $data['message'] = NULL;
        if($this->request->getMethod() == 'post'){
            $insert_data = [
                'name' => $this->request->getVar('discount_name'),
                'discount_percent' => floatval($this->request->getVar('discount_percent')),
                'active' => $this->request->getVar('discount_active'),
                'modified_at' => date("Y-m-d h:i:s"),
            ];
            // $checkName = $model->where('name', $data['name'])
            // ->first();
            // if (!empty($checkName)){
			// 	$data['message'] = 'Tên mã giảm giá đã được sử dụng';
            //     $data['discount'] = $model->find($id);
			// 	return view('/admin/edit-discount', $data);
            // }
            // else {
            //     $id = $model->update($id,$data);
            //     if ($id > 0){
            //         return redirect()->to(base_url()."/public/admin/discount");
            //     }
            //     else {
            //         $data['message'] = 'Thêm danh mục thất bại';
            //         $data['discount'] = $model->find($id);
			// 	    return view('/admin/edit-discount', $data);
            //     }
            // }
            if ($data['discount']['name'] != $insert_data['name']){
                $checkName = $model->where('name', $insert_data['name'])->get();
                
                if ((int)$checkName->getNumRows() == 1){
                    $data['message'] = 'Tên mã giảm giá đã được sử dụng ';
                    return view('/admin/edit-discount', $data);
                }
            }
            $check = $model->update($id,$insert_data);
            if ((int)$check > 0){
                return redirect()->to(base_url()."/public/admin/discount"); }
            
            else {
                $data['message'] = 'Sửa thất bại ';
                return view('/admin/edit-discount', $data);
            }
        }
        return view('/admin/edit-discount', $data);
    }
    public function delete(){
        session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/public/admin/login');
        }
        $model = new DiscountModel();
        $id = $_GET['id'];
        $model->where('id',$id)->delete();
        return redirect()->to(base_url()."/public/admin/discount");
    }
}
