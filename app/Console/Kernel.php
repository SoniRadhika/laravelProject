<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected function schedule(Schedule $schedule)
    {
        // Schedule the log:message command to run every minute
        $schedule->command('log:message')->everyMinute();
    }

    protected function commands()
    {
        $this->load(__DIR__.'/Commands');
        
        require base_path('routes/console.php');
    }
}