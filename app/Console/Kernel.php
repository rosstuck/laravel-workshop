<?php

namespace App\Console;

use Doctrine\ORM\EntityManager;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        \App\Console\Commands\Inspire::class,
        \Doctrine\DBAL\Migrations\Tools\Console\Command\DiffCommand::class,
        \Doctrine\DBAL\Migrations\Tools\Console\Command\ExecuteCommand::class,
        \Doctrine\DBAL\Migrations\Tools\Console\Command\GenerateCommand::class,
        \Doctrine\DBAL\Migrations\Tools\Console\Command\MigrateCommand::class,
        \Doctrine\DBAL\Migrations\Tools\Console\Command\StatusCommand::class,
        \Doctrine\DBAL\Migrations\Tools\Console\Command\VersionCommand::class
    ];

    public function bootstrap()
    {
        parent::bootstrap();

        $em = \App::make(EntityManager::class);

        $this->getArtisan()->getHelperSet()->set(
            new \Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($em->getConnection()),
            'db'
        );

        $this->getArtisan()->getHelperSet()->set(
            new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($em),
            'em'
        );
    }

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('inspire')
            ->hourly();
    }
}
