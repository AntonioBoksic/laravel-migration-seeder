<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Journey>
 */
class JourneyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "company" => fake() -> company() ,//azienda
            "station_departure" => fake() -> city() ,//stazione di partenza
            "station_arrival" => fake() -> city(),//stazione di arrivo
            "time_departure" => fake() -> dateTime(),//orario di partenza
            "time_arrival" => fake() -> dateTime(),//orario di arrivo
            "train_code" => fake() -> numerify("##########"),//codice treno
            "carriages" => fake() -> numberBetween(1,20) ,//numero carrozze
            "on_time" => fake() -> boolean(),//in orario
            "canceled" => fake() -> boolean() ,//cancellato

            // questi li lascio qui in modo da vedere il tipo di dato che richiedono i campi
            // $table->string("company", 100)->unique(); //azienda
            // $table->string("station_departure", 100);//stazione di partenza
            // $table->string("station_arrival", 100);//stazione di arrivo
            // $table->datetime("time_departure");//orario di partenza
            // $table->datetime("time_arrival");//orario di arrivo
            // $table->string("train_code", 10)->unique();//codice treno
            // $table->integer("carriages");//numero carrozze
            // $table->boolean("on_time")->default(true);//in orario
            // $table->boolean("canceled")->default(false);//cancellato
        ];
    }
}
