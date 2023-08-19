<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $name = 'admin name';
        $email = 'email@gmail.com';
        return view('admin.index',compact('name','email'));
    }

    public function form(){

    }


}
