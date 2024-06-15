<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UIController extends Controller
{
    public function index(){
        return view('ui.home.index');
    }

    public function shop(){
        return view('ui.home.shop');
    }

    public function about(){
        return view('ui.home.about');
    }


}
