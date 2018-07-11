<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class ViewController extends Controller
{
    public function index(){

        dd(Session::has('BeforeRoute'));

        return view('view');
    }
}
