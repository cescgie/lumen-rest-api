<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = [
            [
                'id'	=> 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'article_name' => 'T-Shirt',
                'article_description' => 'New upcomer for this summer'
            ],
            [
                'id'	=> 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'article_name' => 'Jeans',
                'article_description' => 'Most searched item'
            ]
        ];

        DB::table('articles')->insert($articles);
    }
}
