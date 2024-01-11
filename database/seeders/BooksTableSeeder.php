<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('books') -> insert([
            'title' => 'The Way of Kings',
            'published_year' => 2010,
            'author_id' => 1
        ]);

        DB::table('books') -> insert([
            'title' => 'The Final Empire',
            'published_year' => 2006,
            'author_id' => 1
        ]);

        DB::table('books') -> insert([
            'title' => 'Words of Radiance',
            'published_year' => 2014,
            'author_id' => 1
        ]);

        DB::table('books') -> insert([
            'title' => 'Foundation and Empire',
            'published_year' => 1952,
            'author_id' => 2
        ]);

        DB::table('books') -> insert([
            'title' => 'Dune',
            'published_year' => 1965,
            'author_id' => 3
        ]);

        DB::table('books') -> insert([
            'title' => 'Beggars in Spain',
            'published_year' => 1993,
            'author_id' => 4
        ]);
    }
}
