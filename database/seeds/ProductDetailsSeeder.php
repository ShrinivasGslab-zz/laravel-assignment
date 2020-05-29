<?php

use Illuminate\Database\Seeder;

class ProductDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\ProductDetails::class, 20)->create();
        /*factory(App\ProductDetails::class, 10)->create()->each(function($u) {
		    $u->ProductDetails()->save(factory(App\ProductDetails::class)->make());
		  });*/
    }
}
