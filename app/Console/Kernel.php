<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Het pad naar de artisan commando's die moeten worden gedistribueerd.
     *
     * @var string
     */
    protected $commands = [
        // Voeg hier je artisan commando's toe
    ];

    /**
     * Definieer de applicatie's console schedule.
     *
     * @param \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // Stel hier geplande taken in, bijvoorbeeld:
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Registreer de applicatie's command line tools.
     *
     * @return void
     */
    protected function commands()
    {
        // Registreer de Artisan commando's die beschikbaar zijn voor de applicatie
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
