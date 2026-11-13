<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('sitemap:generate')
            ->everyMinute()
            ->before(function () {
                \Log::info('Schedule is about to run sitemap:generate');
            })
            ->after(function () {
                \Log::info('Schedule has finished running sitemap:generate');
            });
    }

    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}

