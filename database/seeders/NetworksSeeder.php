<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use App\Models\web\Network;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class NetworksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();
        for ($i = 1; $i <= 10; $i++) {
            $network = new Network;
            $network->network_name = $faker->unique()->name;
            $network->network_type = $faker->numberBetween(0, 2);
            $network->network_url = $faker->name;
            $network->network_description = $faker->name;
            $network->offer_count = $faker->numberBetween(100, 200);
            $network->min_payout = $faker->numberBetween(100, 200);
            $network->referral_commission = $faker->name;
            $network->affiliate_tracking_software = $faker->numberBetween(1, 5);
            $network->other_optional_questions = $faker->name;
            $network->save();
        }
    }
}
