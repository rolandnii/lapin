<?php

namespace RolandNii\Lapin;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use RolandNii\Lapin\Commands\LapinCommand;

class LapinServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('lapin')
            ->hasCommand(LapinCommand::class);
    }
}
