<?php

namespace Database\Factories;

//use Illuminate\Database\Eloquent\Factories\Factory;

use App\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker){
    return[
        'url' => $faker->imageUrl(1024, 1024),
    ];
});


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
//class ImageFactory extends Factory
//{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
  //  public function definition(): array
    //{
      //  return [
            //
        //];
   // }
//}
