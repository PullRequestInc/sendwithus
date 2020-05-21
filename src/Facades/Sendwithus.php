<?php

namespace PullRequestInc\sendwithus\Facades;

use Illuminate\Support\Facades\Facade;

class Sendwithus extends Facade
{
    /**
     * Get the registered name of the component
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'sendwithus';
    }
}
