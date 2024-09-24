<?php

namespace Database\Factories;

//use Illuminate\Database\Eloquent\Factories\Factory;

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker){
    return[
        'name' => $faker->word
    ];
});


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
//class CategoryFactory extends Factory
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
    //}
//}
