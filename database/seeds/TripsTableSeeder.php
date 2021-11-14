<?php

use Illuminate\Database\Seeder;
use App\Models\Trip;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i<100; $i++) {
            $newtrip = new Trip();
            
            $newtrip->name = $faker->words(3, true);
            $newtrip->location = $faker->words(3, true);
            $newtrip->date = $faker->dateTime();
            $newtrip->number_of_people = $faker->numberBetween(1, 4);
            $newtrip->description = $faker->text(100);
            $newtrip->price = $faker->randomNumber(3, true);

            $newtrip->slug = Str::slug($newtrip->name, '_');

            $newtrip->save();
        }
    }
}
