<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User ;




class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    User::create([
		    'name'=>'sami mansour',
		    'email'=>'sami@gmail.com',
		    'password' => bcrypt('123456')
	    ]);
            User::create([
		    'name' =>'abdelwahed mansour',
		    'email' =>'abdelwahed@gmail.com',
		    'password' 	=> bcrypt('789456')
	    ]);
            User::create([
		    'name' =>'taik mansour',
		    'email' =>'taik@gmail.com',
		    'password' =>bcrypt('963456')
	    ]);


    }
}
