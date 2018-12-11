<?php

namespace Hawk\Price\Models;

use Konekt\Concord\Proxies\ModelProxy;

class PriceListProxy extends ModelProxy
{

    public function targetClass(): string
    {
        return PriceList::class;
    }

}