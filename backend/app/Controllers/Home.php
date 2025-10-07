<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('puihaha/home');
    }

    public function services(): string
    {
        // Load sample teas from model (if seeded)
        $model = new \App\Models\PuihahaModel();
        $data['teas'] = $model->findAll();

        return view('puihaha/services', $data);
    }

    public function about(): string
    {
        return view('puihaha/about');
    }

    public function contact(): string
    {
        return view('puihaha/contact');
    }
}
