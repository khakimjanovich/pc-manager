<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager;

use Khakimjanovich\PCManager\Commands\MigrateCommand;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

final class PCManagerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('pc-manager')
            ->hasConsoleCommands(
                MigrateCommand::class,
            )->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->copyAndRegisterServiceProviderInApp()
                    ->askToStarRepoOnGitHub('khakimjanovich/svgate-manager')
                    ->startWith(function (InstallCommand $command) {
                        if ($command->confirm('Would you like to run the migrations?', true)) {
                            $command->call('pc-manager:migrate');
                        }
                    });
            });
    }
}
