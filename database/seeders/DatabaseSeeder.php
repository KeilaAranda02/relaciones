<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        factory(App\Group::class, 3)->create();

        factory(App\Level::class)->create(['name' => 'Oro']);
        factory(App\Level::class)->create(['name' => 'Plata']);
        factory(App\Level::class)->create(['name' => 'Bronce']);

        factory(App\Group::class, 5)->create()->each( function ($user) {
            
            $profile = $user->profile()->save(factory(App\Profile::Class)->make());

            $profile->location()->save(factory(App\Location::Class)->make());

            $user->groups()->attach($this->array(rand(1,3)));

            $user->image()->save(factory(App\Image::Class)->make([
                'url' => 'https://lorempixel.com/90/90 '
            ]));
        });


        // User::factory(10)->create();

        //User::factory()->create([
          //  'name' => 'Test User',
            //'email' => 'test@example.com',
        //]);
    }

    public function array($max)
    {
        $values = [] ;

        for ($i=1; $i < $max; $i++){
            $values[] = $i;
        }
        return $values;
    }

}
