<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {

        $model = new \App\Models\UserInfoModel;

        $data = $model->findAll();

        return view('Home/index', ['users' => $data]);
    }
}

// Made by Mark Lester T. Acak
