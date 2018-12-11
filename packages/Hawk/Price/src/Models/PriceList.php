<?php

namespace Hawk\Price\Models;

use Illuminate\Database\Eloquent\Model;

class PriceList extends Model implements \Hawk\Price\Contracts\PriceList
{

    protected $table = 'pricesLists';

    protected $fillable = [];

    protected $casts = [];

    protected $attributes = [];

}
