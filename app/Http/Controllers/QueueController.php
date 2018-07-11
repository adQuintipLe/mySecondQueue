<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\ProcessSaveJob;

class QueueController extends Controller
{
    public function basicqueue(Request $request){

        $text1 = $request->input('txt1');
        $text2 = $request->input('txt2');
        $text3 = $request->input('txt3');

        ProcessSaveJob::dispatch($text1,$text2,$text3);

        return redirect()->action('ViewController@index');
    }

    public function delayqueue(Request $request){

        $text1 = $request->input('txt1');
        $text2 = $request->input('txt2');
        $text3 = $request->input('txt3');

        ProcessSaveJob::dispatch($text1,$text2,$text3)
                ->delay(now()->addSeconds(15));

        return redirect()->action('ViewController@index');
    }

    public function specificqueue(Request $request){

        $text1 = $request->input('txt1');
        $text2 = $request->input('txt2');
        $text3 = $request->input('txt3');

        ProcessSaveJob::dispatch($text1,$text2,$text3)->onQueue('processing');

        return redirect()->action('ViewController@index');
    }
}
