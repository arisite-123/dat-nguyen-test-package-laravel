<?php

namespace Spatie\Activitylog;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Contracts\Activity;
use Spatie\Activitylog\Contracts\Activity as ActivityContract;
use Spatie\Activitylog\Exceptions\InvalidConfiguration;
use Spatie\Activitylog\Models\Activity as ActivityModel;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Spatie\LaravelPackageTools\Commands\InstallCommand;


class TestPackageServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('vltntdat/test-package')->hasInstallCommand(function(InstallCommand $command) {
            $command->startWith(function(InstallCommand $command) {
                $command->info('Hello, and welcome to my great new package!');
            })->endWith(function(InstallCommand $command) {
                    $command->info('Have a great day!');
            });
        });

    }

    public function registeringPackage()
    {
        // $this->app->bind(ActivityLogger::class);

        // $this->app->scoped(LogBatch::class);

        // $this->app->scoped(CauserResolver::class);

        // $this->app->scoped(ActivityLogStatus::class);
    }

    // public static function determineActivityModel(): string
    // {
    // $activityModel = config('activitylog.activity_model') ?? ActivityModel::class;

    // if (! is_a($activityModel, Activity::class, true)
    //     || ! is_a($activityModel, Model::class, true)) {
    //     throw InvalidConfiguration::modelIsNotValid($activityModel);
    // }

    // return $activityModel;
    // }

    // public static function getActivityModelInstance(): ActivityContract
    // {
    // $activityModelClassName = self::determineActivityModel();

    // return new $activityModelClassName();
    // }
}
