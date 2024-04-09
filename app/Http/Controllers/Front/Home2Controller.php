<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Home2Controller extends Controller
{
    public function home2(){
        return view('front.home2');
    }
}
