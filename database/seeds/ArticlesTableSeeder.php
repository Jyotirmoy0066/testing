<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       App\Article::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            App\Article::create([
                'title' => $faker->sentence,
                'body' => $faker->paragraph,
            ]);
        }


    	 // factory(App\Models\Article::class, 50)->create()->each(function ($u) {
      //  		 $u->posts()->save(factory(App\Post::class)->make());
   		 // });
    }
}
