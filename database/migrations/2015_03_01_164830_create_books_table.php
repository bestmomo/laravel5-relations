<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBooksTable extends Migration {

	public function up()
	{
		Schema::create('books', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name')->unique();
			$table->integer('bookable_id');
			$table->string('bookable_type');
			$table->integer('theme_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('books');
	}
}