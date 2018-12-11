<?php

namespace Tests;

use Hawk\Price\Models\PriceListProxy;

class CustomPriceModelTest extends TestCase
{

    public function test()
    {
        dd(PriceListProxy::modelClass());
    }

}