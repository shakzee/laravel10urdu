<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $name = 'Shekztech';
        $email = 'email@gmail.com';
        return view('user.index',compact('name','email'));
    }
    public function myadmin(){
        echo 'myadmin runnig.';
    }
}
