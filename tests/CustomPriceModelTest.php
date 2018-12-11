<?php

namespace Tests;

use App\Modules\Price\Models\PriceList;
use Hawk\Price\Models\PriceListProxy;

class CustomPriceModelTest extends TestCase
{

    public function test()
    {
        $model = PriceListProxy::modelClass();
        $instance = new $model;
        $this->assertEquals(PriceList::class, $model);
        $this->assertEquals('customTable', $instance->getTable());
    }

}