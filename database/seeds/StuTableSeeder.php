<?php

use Illuminate\Database\Seeder;

class StuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sex = ['w','m'];
        for ($i=0; $i <50 ; $i++) { 
        	DB::table('stus')->insert([
	            'name' => str_random(10),
	            'age' => rand(18,30),
	            'sex' => $sex[rand(0,1)],
	            'class'=>str_random(5)
	        ]);
        }
    }
}
