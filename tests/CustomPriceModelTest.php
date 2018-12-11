<?php

namespace Tests;

use App\Modules\Price\Models\PriceList;
use Hawk\Price\Models\PriceListProxy;

class CustomPriceModelTest extends TestCase
{

    public function test()
    {
        $this->assertInstanceOf(PriceList::class, PriceListProxy::modelClass());
    }

}