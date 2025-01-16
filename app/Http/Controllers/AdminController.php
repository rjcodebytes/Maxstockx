<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function adminlogin()
    {
        return view('admin.dashboard'); // Path to the admin dashboard blade file
    }
}
