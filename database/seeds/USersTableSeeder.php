<?php

use Illuminate\Database\Seeder;

class USersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$x = 1; 
    	while($x <= 5) {
		    
    		 DB::table('categories')->insert([
            'name' => str_random(10)
           
       		 ]);

	        DB::table('products')->insert([

	        	'category_id' => rand(1,4),
	        	'name' => "bmw",
	        	'image' => "bmw.jpg",
	        	'description' => str_random(250),
	        	'price' => rand(1000,10000),
	        ]);


		    $x++;
		} 
       
    }
}
