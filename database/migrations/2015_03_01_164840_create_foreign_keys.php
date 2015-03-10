<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('cities', function(Blueprint $table) {
			$table->foreign('country_id')->references('id')->on('countries')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('authors', function(Blueprint $table) {
			$table->foreign('city_id')->references('id')->on('cities')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('themables', function(Blueprint $table) {
			$table->foreign('theme_id')->references('id')->on('themes')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('contacts', function(Blueprint $table) {
			$table->foreign('editor_id')->references('id')->on('editors')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('books', function(Blueprint $table) {
			$table->foreign('theme_id')->references('id')->on('themes')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('author_book', function(Blueprint $table) {
			$table->foreign('author_id')->references('id')->on('authors')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('author_book', function(Blueprint $table) {
			$table->foreign('book_id')->references('id')->on('books')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('cities', function(Blueprint $table) {
			$table->dropForeign('cities_country_id_foreign');
		});
		Schema::table('authors', function(Blueprint $table) {
			$table->dropForeign('authors_city_id_foreign');
		});
		Schema::table('themables', function(Blueprint $table) {
			$table->dropForeign('themables_theme_id_foreign');
		});
		Schema::table('contacts', function(Blueprint $table) {
			$table->dropForeign('contacts_editor_id_foreign');
		});
		Schema::table('books', function(Blueprint $table) {
			$table->dropForeign('books_theme_id_foreign');
		});
		Schema::table('author_book', function(Blueprint $table) {
			$table->dropForeign('author_book_author_id_foreign');
		});
		Schema::table('author_book', function(Blueprint $table) {
			$table->dropForeign('author_book_book_id_foreign');
		});
	}
}