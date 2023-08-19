<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        echo 'index runnig.';
    }
    public function myadmin(){
        echo 'myadmin runnig.';
    }
}
