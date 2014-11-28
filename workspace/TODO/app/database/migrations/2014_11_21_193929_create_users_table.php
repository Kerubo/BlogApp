<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	
	public function up()
	{
		// Update the users table
		   Schema::create('users', function(Blueprint $table){}

			$table->string('image'),
			$table->string('business_name');
			$table->string('services');
			$table->string('logo');
			$table->string('phone');
			$table->string('about');
			$table->string('address');
			$table->string('location');
			$table->string('map');
			$table->string('stars');
			$table->string('public');
			$table->string('views');
			$table->string('status');

			
		
		});

		
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	
	 public function down()
	{
		Schema::drop('users');
	}
	
}
