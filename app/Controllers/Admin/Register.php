<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Register extends BaseController
{
	public function index()
	{
		$data['message'] = NULL;
		if ($this->request->getMethod() == 'post') {
			$model = new UserModel();
			$password = $this->request->getVar('password');
			$insert_data = [
				'username' => $this->request->getVar('username'),
				'password' => md5($password),
				'email' => $this->request->getVar('email'),
				'role' => 'admin',
				'created_at' =>  date("Y-m-d h:i:s"),
				'status' => 1
			];

			if ($password != $this->request->getVar('repassword')) {
				$data['message'] = 'Mật khẩu của bạn không khớp';
				return view('/admin/register', $data);
			}
			$checkUser = $model->where('username', $insert_data['username'])
				->first();
			$checkEmail = $model->where('email', $insert_data['email'])->first();
			if (!empty($checkUser)) {
				$data['message'] = 'Username của bạn đã được sử dụng';
				return view('/admin/register', $data);
			} else if (!empty($checkEmail)) {
				$data['message'] = 'Email của bạn đã được sử dụng ';
				return view('/admin/register', $data);
			}
			if (empty($check) || empty($checkEmail)) {
				$id = $model->insert($insert_data);
				echo "<script>
			alert('Register Success');
			window.location.href='/quantri/public/admin/login';
			</script>";
			}
		}
		return view('/admin/register', $data);
	}
}
