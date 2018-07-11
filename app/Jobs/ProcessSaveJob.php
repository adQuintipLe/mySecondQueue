<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Request;

class ProcessSaveJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $text1,$text2,$text3;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($text1,$text2,$text3)
    {
        $this->text1 = $text1;
        $this->text2 = $text2;
        $this->text3 = $text3;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        app('App\Http\Controllers\SavedController')->index($this->text1,$this->text2,$this->text3);
    }
}
