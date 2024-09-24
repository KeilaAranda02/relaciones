<?php

namespace Database\Factories;

//use Illuminate\Database\Eloquent\Factories\Factory;


use App\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker){
    return[
        'instagram' => $faker->userName,
        'github' => $faker->userName,
        'web' => $faker->web,
    ];
});


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
//class ProfileFactory extends Factory
//{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
  //  public function definition(): array
   // {
     //   return [
            //
       // ];
    //}
//}
