<?php

namespace Thomasmoors\Anchor;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Thomasmoors\Anchor\Commands\AnchorCommand;

class AnchorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('anchor')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_anchor_table')
            ->hasCommand(AnchorCommand::class);
    }
}
