<?php

namespace Database\Factories;

//use Illuminate\Database\Eloquent\Factories\Factory;


use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker){
    return[
        'body' => $faker->text,
        'user_id' => rand(1,5)
    ];
});



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
//class CommentFactory extends Factory
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
