<?php

namespace Tests;

use BitcoinValidation\ServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [ ServiceProvider::class ];
    }
}
