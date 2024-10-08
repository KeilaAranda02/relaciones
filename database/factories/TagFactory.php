<?php

namespace Database\Factories;

//use Illuminate\Database\Eloquent\Factories\Factory;

use App\Tag;
use Faker\Generator as Faker;

$factory->define(Tag::class, function (Faker $faker){
    return[
        'name' => $faker->word
    ];
});

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
//class TagFactory extends Factory
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
