<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontSendController extends Controller
{
    public function queueDelay(Request $request)
    {
        $currentRoute = $request->path();
        
        return view('queue-delay')
        ->with('delayRoute',$currentRoute);
    }

    public function queueSpecify(Request $request)
    {
        $currentRoute = $request->path();

        return view('queue-specify')
        ->with('specificRoute',$currentRoute);
    }
}
