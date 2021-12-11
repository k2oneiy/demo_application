<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "iyappan kkk";
        return view('home',compact('title'));
    }
}
