<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $name = "brenda";
        return view("home.index", ["name"=> $name]);
    }
}
