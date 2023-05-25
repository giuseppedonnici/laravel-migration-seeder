<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->company = $faker->company();
            $train->departure_date = strval($faker->randomElement(['2023-05-24', '2023-05-25', '2023-05-26']));
            $train->departure_station = strval($faker->randomElement(['Fidenza', 'Parma', 'Salsomaggiore']));
            $train->arrival_station = strval($faker->randomElement(['Rimini', 'Riccione', 'Cesena']));
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->train_code = $faker->randomNumber(4, true);
            $train->num_carriages = $faker->randomDigit();
            $train->on_time = $faker->randomElement([0, 1]);
            $train->cancelled = $faker->randomElement([0, 1]);
            $train->save();
        }
    }
}
