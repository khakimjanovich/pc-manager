<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Khakimjanovich\PCManager\PCManagerServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

final class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Khakimjanovich\\PCManager\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
         foreach (\Illuminate\Support\Facades\File::allFiles(__DIR__ . '/database/migrations') as $migration) {
            (include $migration->getRealPath())->up();
         }
         */
    }

    protected function getPackageProviders($app)
    {
        return [
            PCManagerServiceProvider::class,
        ];
    }
}
