<?php

namespace Hawk\Price;

use Hawk\Price\Models\PriceList;
use Konekt\Concord\BaseModuleServiceProvider;

class PriceServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Hawk\Price\Contracts\PriceList::class => PriceList::class,
    ];
}
