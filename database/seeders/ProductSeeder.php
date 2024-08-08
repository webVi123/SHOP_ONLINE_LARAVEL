<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\product;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker=Faker::create();
        for($i=0;$i<50;$i++){
            product::create([
                'name'=>$faker->word,
                'img'=>$faker->imageUrl(640,480),
                'description'=>$faker->text,
                'price'=>$faker->numberBetween(1000,10000),               
                'view'=>$faker->numberBetween(10,1000),
                'brand_id'=>$faker->numberBetween(1,1000),
                'quantity'=>$faker->numberBetween(10,1000),
                'sold'=>$faker->numberBetween(50,1000),             
                'category_id'=>$faker->numberBetween(1,10),
            ]);
        }
    }
}
