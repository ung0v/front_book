<?php

namespace App\Controllers;

class AboutUs extends BaseController
{
    public function index()
    {
        $data['title'] = "Về chúng tôi";
        return view("aboutUs");
    }
}
