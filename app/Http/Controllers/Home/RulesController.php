<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class RulesController extends Controller
{
    public function index(){
        return view('front.rules');
    }
}
