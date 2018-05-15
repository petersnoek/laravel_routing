<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
        'category_id' => 1,
        'name' => str_random(30),
        'description' => str_random(30),
    ]);
    DB::table('articles')->insert([
        'category_id' => 1,
        'name' => str_random(30),
        'description' => str_random(30),
    ]);
    DB::table('articles')->insert([
        'category_id' => 2,
        'name' => str_random(30),
        'description' => str_random(30),
    ]);
    DB::table('articles')->insert([
        'category_id' => 2,
        'name' => str_random(30),
        'description' => str_random(30),
    ]);
    }
}
