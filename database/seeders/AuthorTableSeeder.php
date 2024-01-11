<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('authors') -> insert([
            'name' => 'Brandon Sanderson',
            'country' => 'USA'
        ]);

        DB::table('authors') -> insert([
            'name' => 'Isaac Asimov',
            'country' => 'USA'
        ]);

        DB::table('authors') -> insert([
            'name' => 'Frank Herbert',
            'country' => 'USA'
        ]);

        DB::table('authors') -> insert([
            'name' => 'Nancy Kress',
            'country' => 'USA'
        ]);
    }
}
