<?php

namespace Kizi\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use Kizi\Modules\Commands\CommandCommand;
use Kizi\Modules\Commands\ControllerCommand;
use Kizi\Modules\Commands\DisableCommand;
use Kizi\Modules\Commands\DumpCommand;
use Kizi\Modules\Commands\EnableCommand;
use Kizi\Modules\Commands\GenerateEventCommand;
use Kizi\Modules\Commands\GenerateJobCommand;
use Kizi\Modules\Commands\GenerateListenerCommand;
use Kizi\Modules\Commands\GenerateMailCommand;
use Kizi\Modules\Commands\GenerateMiddlewareCommand;
use Kizi\Modules\Commands\GenerateNotificationCommand;
use Kizi\Modules\Commands\GenerateProviderCommand;
use Kizi\Modules\Commands\GenerateRouteProviderCommand;
use Kizi\Modules\Commands\InstallCommand;
use Kizi\Modules\Commands\ListCommand;
use Kizi\Modules\Commands\MakeCommand;
use Kizi\Modules\Commands\MakeRequestCommand;
use Kizi\Modules\Commands\MigrateCommand;
use Kizi\Modules\Commands\MigrateRefreshCommand;
use Kizi\Modules\Commands\MigrateResetCommand;
use Kizi\Modules\Commands\MigrateRollbackCommand;
use Kizi\Modules\Commands\MigrationCommand;
use Kizi\Modules\Commands\ModelCommand;
use Kizi\Modules\Commands\PublishCommand;
use Kizi\Modules\Commands\PublishConfigurationCommand;
use Kizi\Modules\Commands\PublishMigrationCommand;
use Kizi\Modules\Commands\PublishTranslationCommand;
use Kizi\Modules\Commands\SeedCommand;
use Kizi\Modules\Commands\SeedMakeCommand;
use Kizi\Modules\Commands\SetupCommand;
use Kizi\Modules\Commands\UpdateCommand;
use Kizi\Modules\Commands\UseCommand;

class ConsoleServiceProvider extends ServiceProvider
{
    protected $defer = false;

    /**
     * The available commands
     *
     * @var array
     */
    protected $commands = [
        MakeCommand::class,
        CommandCommand::class,
        ControllerCommand::class,
        DisableCommand::class,
        EnableCommand::class,
        GenerateEventCommand::class,
        GenerateListenerCommand::class,
        GenerateMiddlewareCommand::class,
        GenerateProviderCommand::class,
        GenerateRouteProviderCommand::class,
        InstallCommand::class,
        ListCommand::class,
        MigrateCommand::class,
        MigrateRefreshCommand::class,
        MigrateResetCommand::class,
        MigrateRollbackCommand::class,
        MigrationCommand::class,
        ModelCommand::class,
        PublishCommand::class,
        PublishMigrationCommand::class,
        PublishTranslationCommand::class,
        SeedCommand::class,
        SeedMakeCommand::class,
        SetupCommand::class,
        UpdateCommand::class,
        UseCommand::class,
        DumpCommand::class,
        MakeRequestCommand::class,
        PublishConfigurationCommand::class,
        GenerateJobCommand::class,
        GenerateMailCommand::class,
        GenerateNotificationCommand::class,
    ];

    /**
     * Register the commands.
     */
    public function register()
    {
        $this->commands($this->commands);
    }

    /**
     * @return array
     */
    public function provides()
    {
        $provides = $this->commands;

        return $provides;
    }
}
