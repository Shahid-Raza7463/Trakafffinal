<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\web\NetworkReviewModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewWebSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //  
        $faker = Faker::create();
        // Disable timestamp feature for the ReviewWebModel
        // ReviewWebModel::timestamps(false);
        for ($i = 1; $i <= 100; $i++) {
            $network_review = new NetworkReviewModel;
            // $network_review->review_id = $faker->numberBetween(0, 100);
            $network_review->network_id = $faker->numberBetween(1, 10);
            $network_review->user_id = $faker->numberBetween(1, 25);
            $network_review->all_rating = $faker->numberBetween(0, 5);
            $network_review->offer_rating = $faker->numberBetween(0, 5);
            $network_review->payout_rating = $faker->numberBetween(0, 5);
            $network_review->tracking_rating = $faker->numberBetween(0, 5);
            $network_review->support_rating = $faker->numberBetween(0, 5);
            $network_review->review_text = $faker->paragraph(20);
            $network_review->review_img = $faker->image();
            $network_review->status = $faker->numberBetween(0, 1);
            $network_review->save();
        }
    }
}
