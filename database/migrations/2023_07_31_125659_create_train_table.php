<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) 
        {
            $table->id();
            $table->timestamps();
            $table->string('company');
            $table->string('departure_station');
            $table->string('arrival_station');
            $table->timestamp('departure_time');
            $table->timestamp('arrival_time');
            $table->smallInteger('train_code');
            $table->smallInteger('carriages_number');
            $table->boolean('in_time');
            $table->boolean('cancelled');
            $table->date('departure_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};