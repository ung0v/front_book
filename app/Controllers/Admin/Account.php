<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\UserModel;

class Account extends BaseController
{
	public function index()
	{
		session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/public/admin/login');
        }
        $model = new UserModel();
        $data['account'] = $model->findAll();
        // print_r($model->findAll());
        // die();
		return view('/admin/account', $data);
	}

    public function add()
    {
		session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/public/admin/login');
        }
        $model = new UserModel();
        $data['message'] = NULL;
        if($this->request->getMethod() == 'post'){
            $insert_data = [
				'username' => $this->request->getVar('username'),
				'password' => md5($this->request->getVar('password')),
				'email' => $this->request->getVar('email'),
				'role' => $this->request->getVar('role'),
				'first_name' => $this->request->getVar('first_name'),
				'last_name' => $this->request->getVar('last_name'),
				'phone_number' => $this->request->getVar('phone_number'),
				'address' => $this->request->getVar('address'),
				'created_at' =>  date("Y-m-d h:i:s"),
				'status' => 1
			];
            $checkUser = $model->where('username', $insert_data['username'])
                   ->first();
			$checkEmail = $model->where('email', $insert_data['email'])->first();
			if (!empty($checkUser)){
				$data['message'] = 'Username  đã được sử dụng';
				return view('/admin/add-account', $data);
			} else if (!empty($checkEmail)){
				$data['message'] = 'Email đã được sử dụng ';
				return view('/admin/add-account', $data);
			}
			if (empty($check) || empty($checkEmail)){
			$id = $model->insert($insert_data);
            return redirect()->to(base_url()."/public/admin/account"); }
        }
        return view('/admin/add-account', $data);
    }
    public function edit()
    {
		session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/public/admin/login');
        }
		$id = $_GET['id'];
		$model = new UserModel();
		$data['message'] = NULL;
		$data['user'] = $model->find($id);
		if($this->request->getMethod() == 'post'){
            $insert_data = [
				'email' => $this->request->getVar('email'),
				'role' => $this->request->getVar('role'),
				'first_name' => $this->request->getVar('first_name'),
				'last_name' => $this->request->getVar('last_name'),
				'phone_number' => $this->request->getVar('phone_number'),
				'address' => $this->request->getVar('address'),
				'modified_at' =>  date("Y-m-d h:i:s"),
				'status' => 1
			];
			if ($data['user']['email'] != $insert_data['email']){
			$checkEmail = $model->where('email', $insert_data['email'])->get();
			if ((int)$checkEmail->getNumRows() == 1){
				$data['message'] = 'Email đã được sử dụng ';
				return view('/admin/edit-account', $data);
			}
		}
			$check = $model->update($id,$insert_data);
			if ((int)$check > 0){
            	return redirect()->to(base_url()."/public/admin/account/detail?id=".$id); }
			
			else {
				$data['message'] = 'Sửa thất bại ';
				return view('/admin/edit-account', $data);
			}
        }
        return view('/admin/edit-account', $data);
    }
    public function detail()
    {
		session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/public/admin/login');
        }
		$id = $_GET['id'];
		$model = new UserModel();
		$data['user'] = $model->find($id);
        return view('/admin/account-details', $data);
    }
	public function delete(){
		session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/public/admin/login');
        }
        $model = new UserModel();
        $id = $_GET['id'];
        $model->where('id',$id)->delete();
        return redirect()->to(base_url()."/public/admin/account");
    }

	public function logout(){

		session_start();
		session_destroy();
		return redirect()->to(base_url()."/public/admin/login");
	}
}
