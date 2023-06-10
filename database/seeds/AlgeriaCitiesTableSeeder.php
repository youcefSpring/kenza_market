<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlgeriaCitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = file_get_contents(public_path('algeria_cities.json'));
        $cities = json_decode($json, true);


        foreach ($cities as $city) {
            DB::table('algeria_cities')->insert($city);
        }

        $json_2 = file_get_contents(public_path('algeria_cities_2.json'));
        $cities_2 = json_decode($json_2, true);


        foreach ($cities_2 as $city) {
            DB::table('algeria_cities')->insert($city);
        }
    }
}
