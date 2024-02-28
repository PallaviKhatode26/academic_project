<?php

namespace App\Controllers;
use App\Models\User;
class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    // public function show(): string
    // {
    //     return view('welcome_message');
    // }
    public function side(): string
    {
        return view('sidebar');
    }
    public function admin(): string
    {
        return view('adminView');
    }
}
