<?php

namespace Clevada\Weather;

use Clevada\Weather\Commands\WeatherCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class WeatherServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-weather')
            ->hasConfigFile()
            ->hasCommand(WeatherCommand::class);
    }
}
