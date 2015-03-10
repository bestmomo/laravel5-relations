<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
 
        for ($i = 1; $i < 11; $i++) {
            DB::table('categories')->insert(['name' => 'Category ' . $i]);
            DB::table('periods')->insert(['name' => 'Period ' . $i]);
            DB::table('countries')->insert(['name' => 'Country ' . $i]);
        }
 
        for ($i = 1; $i < 21; $i++) {
            DB::table('themes')->insert(['name' => 'Theme ' . $i]);
            DB::table('editors')->insert(['name' => 'Editor ' . $i]);
            DB::table('formats')->insert(['name' => 'Format ' . $i]);
            DB::table('contacts')->insert(['phone' => '00 00 00 00 00', 'editor_id' => $i]);
            DB::table('cities')->insert(['name' => 'City ' . $i, 'country_id' => rand(1, 10)]);
        }
 
        for ($i = 1; $i < 21; $i++) {
            DB::table('authors')->insert(['name' => 'Author ' . $i, 'city_id' => rand(1, 20)]);
        }
 
        for ($i = 1; $i < 51; $i++) {
            $choice = array('App\Models\Format','App\Models\Editor');
            DB::table('books')->insert([
                'name' => 'Book ' . $i,
                'bookable_id' => rand(1, 20),
                'theme_id' => rand(1, 20),
                'bookable_type' => $choice[rand(0,1)]
            ]);
        }

        for ($i = 1; $i < 21; $i++) {
            $number = rand(2, 8);
            $items = [];
            for ($j = 1; $j <= $number; $j++) {
                while(in_array($n = rand(1, 50), $items)) {}
                $items[] = $n;
                DB::table('author_book')->insert(array(
                    'book_id' => $n,
                    'author_id' => $i
                ));
            }
        }
 
        $items = [];
        for ($i = 1; $i < 81; $i++) {
            $choice = array('App\Models\Category','App\Models\Period');
            do{
                $t1 = rand(1, 20);
                $t2 = rand(1, 20);
                $t3 = $choice[rand(0,1)];
            } while(in_array($t1 . $t2 . $t3, $items));
            $items[] = $t1 . $t2 . $t3;
            DB::table('themables')->insert([
                'theme_id' => $t1,
                'themable_id' => $t2,
                'themable_type' => $t3
            ]);
        }
	}

}
