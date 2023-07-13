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
        Schema::create('traits', function (Blueprint $table) {
            $table->id(); // qusto è di default se si crea correttamente la migration

            $table->company(); //azienda
            $table->station_departure();//stazione di partenza
            $table->station_arrival();//stazione di arrivo
            $table->time_departure();//orario di partenza
            $table->time_arrival();//orario di arrivo
            $table->train_code();//codice treno
            $table->carriages();//numero carrozze
            $table->on_time();//in orario
            $table->cancelled();//cancellato

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
        Schema::dropIfExists('traits');
    }
};
