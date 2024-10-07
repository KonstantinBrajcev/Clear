<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class ClearCache implements ShouldQueue
{
    use Queueable;
    public function __construct()
    {
        //
    }

    public function handle()
    {
        file_put_contents(storage_path('logs/Laravel.log'), '');
    }
}
