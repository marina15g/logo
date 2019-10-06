<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    public function setUp(): void{
        $app = new Application();
        $app->instance('app', $app);
        $app->register('Ideil\\LaravelFileOre\\LaravelFileOreServiceProvider');
        Facade::setFacadeApplication($app);
    }
}
