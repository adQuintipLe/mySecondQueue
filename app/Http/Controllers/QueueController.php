<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\ProcessSaveJob;
use Session;

class QueueController extends Controller
{
    public function basicqueue(Request $request){

        $text1 = $request->input('txt1');
        $text2 = $request->input('txt2');
        $text3 = $request->input('txt3');

        session(['BeforeRoute' => 'null']);

        ProcessSaveJob::dispatch($text1,$text2,$text3);

        //Session 'key' = session variable; 'value' = ur value
        Session::flash('myVariable','all input Basic Queue was successfully save');

        return redirect()->action('ViewController@index');
    }

    public function delayqueue(Request $request){

        $text1 = $request->input('txt1');
        $text2 = $request->input('txt2');
        $text3 = $request->input('txt3');
        $delayRoute = $request->input('delayRoute');

        session(['BeforeRoute' =>$delayRoute]);

        ProcessSaveJob::dispatch($text1,$text2,$text3)
                ->delay(now()->addSeconds(15));

        Session::flash('myVariable','all input Delayed Queue was successfully save');

        return redirect()->action('ViewController@index');
    }

    public function specificqueue(Request $request){

        $text1 = $request->input('txt1');
        $text2 = $request->input('txt2');
        $text3 = $request->input('txt3');
        $specificRoute = $request->input('specificRoute');

        session(['BeforeRoute' =>$specificRoute]);

        ProcessSaveJob::dispatch($text1,$text2,$text3)->onQueue('processing');

        Session::flash('myVariable','all input Specific Queue was successfully save');

        return redirect()->action('ViewController@index');
    }
}
