<?php

namespace Database\Factories;

//use Illuminate\Database\Eloquent\Factories\Factory;


use App\Location;
use Faker\Generator as Faker;

$factory->define(Location::class, function (Faker $faker){
    return[
        'country' => $faker->country
    ];
});

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Location>
 */
//class LocationFactory extends Factory
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
