<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class ViewController extends Controller
{
    public function index(){

        // dd(Session::get('BeforeRoute'));

        return view('view');
    }
}
