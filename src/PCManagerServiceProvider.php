<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager;

use Khakimjanovich\PCManager\Commands\MigrateCommand;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

use function Laravel\Prompts\confirm;

final class PCManagerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('pc-manager')
            ->hasConsoleCommands(
                MigrateCommand::class,
            )->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->copyAndRegisterServiceProviderInApp()
                    ->askToStarRepoOnGitHub('khakimjanovich/pc-manager')
                    ->startWith(function (InstallCommand $command) {
                        if (confirm('Would you like to run the migrations?')) {
                            $command->call('pc-manager:migrate');
                        }
                    });
            });
    }
}
