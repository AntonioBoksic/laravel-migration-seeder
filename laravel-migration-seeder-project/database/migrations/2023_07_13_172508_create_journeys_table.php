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
        Schema::create('journeys', function (Blueprint $table) {
            $table->id(); // qusto è di default se si crea correttamente la migration

            $table->string("company", 100)->unique(); //azienda
            $table->string("station_departure", 100);//stazione di partenza
            $table->string("station_arrival", 100);//stazione di arrivo
            $table->datetime("time_departure");//orario di partenza
            $table->datetime("time_arrival");//orario di arrivo
            $table->string("train_code", 10)->unique();//codice treno
            $table->integer("carriages");//numero carrozze
            $table->boolean("on_time")->default(true);//in orario
            $table->boolean("canceled")->default(false);//cancellato

            $table->timestamps(); // qusto è di default se si crea correttamente la migration
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('journeys');
    }
};
