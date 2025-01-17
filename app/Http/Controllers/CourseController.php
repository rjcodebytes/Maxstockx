<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller{

    public function managecourse(){
        return view('admin.managecourses.managecourse');
    }
}