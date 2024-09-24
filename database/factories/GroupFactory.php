<?php
namespace Database\Factories;

use App\Group;
use Faker\Generator as Faker;

$factory->define(Group::class, function (Faker $faker){
    return[
        'name' => $faker->word
    ];
});



//use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Group>
 */
//class GroupFactory extends Factory
//{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
   // public function definition(): array
    //{
      //  return [
            //
        //];
    //}
//}
