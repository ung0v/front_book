<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\UserModel;

class Login extends BaseController
{
	public function index()
	{	
		$data['message'] = NULL;
		session_start();
		if($this->request->getMethod() == 'post'){
			$model = new UserModel();
			$query_data = [
				'username' => $this->request->getVar('username'),
				'password' => md5($this->request->getVar('password')),
			];
			$check = $model->where($query_data)->first();
			if(empty($check)){
				$data['message'] = 'Tài khoản hoặc mật khẩu của bạn không chính xác';
				return view('/admin/login', $data);
			} elseif (in_array($check['role'],['admin', 'employee'])) {
				$_SESSION['user'] = $check;
				return redirect()->to(base_url()."/public/admin/index");
			} else{
				$data['message'] = 'Bạn không đủ quyền hạn để đăng nhập';
				return view('/admin/login', $data);
			}
		}
		return view('/admin/login', $data);
	}
}
