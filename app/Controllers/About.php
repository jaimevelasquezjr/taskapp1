<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        return view('About/index');
    }
}