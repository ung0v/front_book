<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {
        $data['title'] = "Liên lạc";
        return view("contact");
    }
}
