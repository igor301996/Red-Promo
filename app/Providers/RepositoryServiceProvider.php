<?php

namespace App\Providers;

use App\Interfaces\SubjectRepositoryInterface;
use App\Repositories\SubjectRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SubjectRepositoryInterface::class, SubjectRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
