<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();
        for ($i = 0; $i < 20; $i++) {
            User::create([
                'name' => $faker->word,
                'email' => $faker->email,
                'img'=>$faker->imageUrl(640,480),
                'password' => $faker->password,
                'address'=>$faker->streetAddress,
                'status' => $faker->randomElement([0, 1]), // 0 = inactive, 1 = active
                'role' => $faker->randomElement([0, 1]), // 0 = user, 1 = admin

            ]);
        }
    }
}
