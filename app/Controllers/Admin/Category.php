<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;

use App\Models\CategoryModel;

class Category extends BaseController
{
	public function index()
	{
        session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/public/admin/login');
        }
        $model = new CategoryModel();
        $data['category'] = $model->findAll();
		return view('/admin/category', $data);
	}

    public function add()
    {
        session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/public/admin/login');
        }
        $model = new CategoryModel();
        $data['message'] = NULL;
        if($this->request->getMethod() == 'post'){
            $data = [
                'name' => $this->request->getVar('category_name'),
                'description' => $this->request->getVar('category_desc'),
                'created_at' => date("Y-m-d h:i:s"),
                // 'modified_at' => date("Y-m-d h:i:s"),
            ];
            $checkName = $model->where('name', $data['name'])
            ->first();
            if (!empty($checkName)){
				$data['message'] = 'Tên danh mục đã được sử dụng';
				return view('/admin/add-category', $data);
            }
            else {
                $id = $model->insert($data);
                if ($id > 0){
                    return redirect()->to(base_url()."/public/admin/category");
                }
                else {
                    $data['message'] = 'Thêm danh mục thất bại';
				    return view('/admin/add-category', $data);
                }
            }
        }
        return view('/admin/add-category', $data);

    }
    public function edit()
    {
        session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/public/admin/login');
        }
        $model = new CategoryModel();
        $id = $_GET['id'];
        $data['category'] = $model->find($id);
        $data['message'] = NULL;
        if($this->request->getMethod() == 'post'){
            $data = [
                'name' => $this->request->getVar('category_name'),
                'description' => $this->request->getVar('category_desc'),
                // 'created_at' => date("Y-m-d h:i:s"),
                'modified_at' => date("Y-m-d h:i:s"),
            ];
            $checkName = $model->where('name', $data['name'])
            ->first();
            if (!empty($checkName)){
				$data['message'] = 'Tên danh mục đã được sử dụng';
                $data['category'] = $model->find($id);
				return view('/admin/edit-category', $data);
            }
            else {
                $id = $model->update($id,$data);
                if ($id > 0){
                    return redirect()->to(base_url()."/public/admin/category");
                }
                else {
                    $data['message'] = 'Thêm danh mục thất bại';
                    $data['category'] = $model->find($id);
				    return view('/admin/edit-category', $data);
                }
            }
        }
        return view('/admin/edit-category', $data);
    }
    public function delete(){
        session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/public/admin/login');
        }
        $model = new CategoryModel();
        $id = $_GET['id'];
        $model->where('id',$id)->delete();
        return redirect()->to(base_url()."/public/admin/category");
    }
}
