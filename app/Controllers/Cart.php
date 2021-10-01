<?php

namespace App\Controllers;

class Cart extends BaseController
{
    public function index()
    {
        $data['title'] = "Giỏ hàng";
        return view("cart");
    }
}
