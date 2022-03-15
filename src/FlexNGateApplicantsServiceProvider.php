<?php

namespace Thagenbeek\FlexNGateApplicants;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Thagenbeek\FlexNGateApplicants\Commands\FlexNGateApplicantsCommand;

class FlexNGateApplicantsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('flex-n-gate-applicants')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_flex-n-gate-applicants_table')
            ->hasCommand(FlexNGateApplicantsCommand::class);
    }
}
