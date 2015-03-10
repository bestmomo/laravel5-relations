<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAuthorBookTable extends Migration {

	public function up()
	{
		Schema::create('author_book', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('author_id')->unsigned();
			$table->integer('book_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('author_book');
	}
}