<?php

namespace Muhsenmaqsudi\Identifier;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Muhsenmaqsudi\Identifier\Identifier
 */
class IdentifierFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'laravel-identifier';
    }
}
