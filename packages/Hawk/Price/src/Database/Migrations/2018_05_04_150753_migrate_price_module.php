<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MigratePriceModule extends Migration
{

    public function up()
    {
        Schema::create('pricesLists', function (Blueprint $table) {
            $table->increments('id');

            $table->timestamps();
        });
    }

}
