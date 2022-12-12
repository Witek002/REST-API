<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

require_once 'vendor/autoload.php';
return new class extends Migration
{

    public function up()
    {
        //Schema::dropIfExists('people');
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('surname');
            $table->string('phone_num');
            $table->string('street');
            $table->string('city');
            $table->integer('age');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('people');
    }
};
