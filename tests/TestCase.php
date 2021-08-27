<?php

namespace Muhsenmaqsudi\Identifier\Tests;

use Muhsenmaqsudi\Identifier\IdentifierServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            IdentifierServiceProvider::class,
        ];
    }
}
