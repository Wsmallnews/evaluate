<?php

namespace Wsmallnews\Evaluate\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Wsmallnews\Evaluate\Evaluate
 */
class Evaluate extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Wsmallnews\Evaluate\Evaluate::class;
    }
}
