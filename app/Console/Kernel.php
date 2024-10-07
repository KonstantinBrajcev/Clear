<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use App\Jobs\ClearCache;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected function schedule(Schedule $schedule)
    {
        $schedule->job(new ClearCache)->hourly();
    }

    protected function commands()
    {
        $this->load(__DIR__.'/Commands');
    }
}
