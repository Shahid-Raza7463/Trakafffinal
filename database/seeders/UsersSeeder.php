<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();
        for ($i = 1; $i <= 10; $i++) {
            $user = new User;
            $user->name = $faker->unique()->name;
            $user->email = $faker->email;
            $user->password = $faker->password;
            $user->save();
        }
    }
}
