<?php

namespace Cart53\Payment\Facades;

use Illuminate\Support\Facades\Facade;

class Payment extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Payment';
    }
}
