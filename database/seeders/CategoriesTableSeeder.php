<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;




class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    Category::create([
	    		
		    'name'=>'Web Development'
	    ]);
            Category::create([
	    		
		    'name'=>'Mobile Development'
	    ]);
            Category::create([
	    		
		    'name'=>'Web Deseign'
	    ]);


    }
}
