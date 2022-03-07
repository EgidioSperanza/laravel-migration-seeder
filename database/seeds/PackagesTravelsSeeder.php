<?php

use Faker\Generator as Faker;
use App\PackTravel;
use Illuminate\Database\Seeder;

class PackagesTravelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 25; $i++) { 
            $packtravel= new PackTravel();

            $packtravel->travel_pack_name=$faker->text(20);
            $packtravel->departure=$faker->state();
            $packtravel->duration=$faker->numberBetween(3, 20);
            $packtravel->hotel=$faker->company();
            $packtravel->hotel_address=$faker->streetAddress();
            $packtravel->hotel_stars=$faker->numberBetween(1, 5);
            $packtravel->description=$faker->text(1000);
            $packtravel->price=$faker->randomFloat(2, 1000, 9999);

            $packtravel->save();
        }
    }
}
