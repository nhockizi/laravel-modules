<?php

namespace Kizi\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use Kizi\Modules\Contracts\RepositoryInterface;
use Kizi\Modules\Repository;

class ContractsServiceProvider extends ServiceProvider
{
    /**
     * Register some binding.
     */
    public function register()
    {
        $this->app->bind(RepositoryInterface::class, Repository::class);
    }
}
