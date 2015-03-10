<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateThemablesTable extends Migration {

	public function up()
	{
		Schema::create('themables', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('theme_id')->unsigned();
			$table->integer('themable_id');
			$table->string('themable_type');
		});
	}

	public function down()
	{
		Schema::drop('themables');
	}
}