<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

                            //questo lo aggiungiamo noi
use App\Models\Journey;

class JourneyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Journey :: factory -> count(20) -> create();
    }
}
