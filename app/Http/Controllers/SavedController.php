<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SavedController extends Controller
{
    public function index($text1,$text2,$text3){

        DB::table('mydata')->insert([
            'text1' => strtoupper($text1),
            'text2' => strtoupper($text2),
            'text3' => strtoupper($text3)
        ]);

    }
}
