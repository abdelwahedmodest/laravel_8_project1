<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use  App\Models\User;
use  App\Models\Category;
use  App\Models\Post;


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $faker = \Faker\Factory::create();
	    for($i=1 ; $i < 20 ; $i++ ) {

		Post::create([

			'user-id'		=> User::inRandomOrder()->first()->id,
                 	'category_id'		=> Category::inRandomOrder()->first()->id,
	                'title'			=> $faker->sentence(4),
			'body'			=> $faker->paragraph(),
                	'image'			=> $i.'.jpg'


                    ]);

	    }

    }
}
