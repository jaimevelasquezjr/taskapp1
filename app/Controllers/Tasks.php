<?php

namespace App\Controllers;

class Tasks extends BaseController
{
    public function index()
    {
        //return view('welcome_message');
        //echo view('header');
        echo view('Tasks/index');
        //echo view('footer');
    }
}