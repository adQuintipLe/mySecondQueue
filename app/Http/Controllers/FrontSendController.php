<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontSendController extends Controller
{
    public function queueDelay()
    {
        return view('queue-delay');
    }

    public function queueSpecify()
    {
        return view('queue-specify');
    }
}
