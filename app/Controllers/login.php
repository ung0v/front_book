<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        $data['title'] = "Đăng nhập";
        session_start();
        if ($_SESSION['user']) {
            return redirect()->to(base_url() . '/public/home/');
        }
        if ($this->request->getMethod() == 'post') {
            $userModel = new UserModel();
            $username = $this->request->getVar('username');
            $password = $this->request->getvar('password');

            $data = [
                'username' => $username,
                'password' => md5($password),
                'role' => 'client'
            ];

            var_dump($data);
            $user = $userModel->where($data)->first();
            if ($user) {
                // $sendEmail = new SendEmail();
                // $sendEmail->send($user['email']);
                $_SESSION['user'] = $user;

                return redirect()->to(base_url() . '/public/');
            } else {
                $data['errorMessage'] = 'Tên tài khoản hoặc mật khẩu không chính xác';
            }
        }
        return view('login', $data);
    }
    public function logout()
    {
        session_start();
        session_destroy();
        return redirect()->to(base_url() . "/public/login");
    }
}
