<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Home1Controller extends Controller
{
    public function home1(){
        return view('front.home1');
    }
}
