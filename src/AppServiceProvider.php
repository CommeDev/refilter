<?php

namespace Zigzagdev\App;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Zigzagdev\App\Commands\AppCommand;

class AppServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('app')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_app_table')
            ->hasCommand(AppCommand::class);
    }
}
