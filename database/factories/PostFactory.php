<?php

namespace Database\Factories;

//use Illuminate\Database\Eloquent\Factories\Factory;


use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker){
    return[
        'name' => $faker->sentence,
        'category_id' => rand(1,4),
        'user_id' => rand(1,5)
    ];
});


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
//class PostFactory extends Factory
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
