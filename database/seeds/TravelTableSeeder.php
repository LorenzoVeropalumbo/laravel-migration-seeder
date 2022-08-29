<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;

class TravelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 1; $i <= 5; $i++) {
            $new_travel = new Travel();
            $new_travel->order_date = $faker->dateTime();
            $new_travel->departure_company = $faker->word();
            $new_travel->departure_ticket = $faker->words(5, true);
            $new_travel->hotel_name = $faker->words(5, true);
            $new_travel->hotel_info = $faker->text(100);
            $new_travel->stay_start_date = $faker->dateTime();
            $new_travel->end_of_stay_date = $faker->dateTime();
            $new_travel->total_price = $faker->dateTime();
        }
    }
}
