<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(){
        return view('index',['active'=>'home']);
    }

    public function about(){
        return view('about',['active'=>'about','name'=>'Someone somebody who love coding']);
    }
}
