<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Register extends BaseController
{
    public function index()
    {
        $data['title'] = 'Đăng ký';
        $data['message'] = NULL;
        if ($this->request->getMethod() == 'post') {
            $model = new UserModel();
            $password = $this->request->getVar('password');
            $insert_data = [
                'username' => $this->request->getVar('username'),
                'password' => md5($password),
                'email' => $this->request->getVar('email'),
                'first_name' => $this->request->getVar('first_name'),
                'last_name' => $this->request->getVar('last_name'),
                'phone_number' => $this->request->getVar('phone_number'),
                'address' => $this->request->getVar('address'),
                'role' => 'client',
                'created_at' =>  date("Y-m-d h:i:s"),
                'status' => 1
            ];

            if ($password != $this->request->getVar('repassword')) {
                $data['message'] = 'Mật khẩu của bạn không khớp';
                return view('register', $data);
            }
            $checkUser = $model->where('username', $insert_data['username'])
                ->first();
            $checkEmail = $model->where('email', $insert_data['email'])->first();
            if (!empty($checkUser)) {
                $data['message'] = 'Username của bạn đã được sử dụng';
                return view('register', $data);
            } else if (!empty($checkEmail)) {
                $data['message'] = 'Email của bạn đã được sử dụng ';
                return view('register', $data);
            }
            if (empty($check) || empty($checkEmail)) {
                $id = $model->insert($insert_data);
                $data['message'] = 'Đăng ký thành công';
                return view('register', $data);
            }
        }
        return view('register', $data);
    }
}
