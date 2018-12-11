<?php

namespace Tests;

use Hawk\Price\Models\PriceListProxy;

class CustomPriceModelTest extends TestCase
{

    public function test()
    {
        $model = PriceListProxy::modelClass();
        $instance = new $model;
        $this->assertEquals('customTable', $instance->getTable());
    }

}