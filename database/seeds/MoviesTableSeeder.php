<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            'title' => 'The Men Who Stare at Goats',
            'format' => 'Streaming',
            'length' => '94',
            'year' => '2009',
            'rating' => '3',
        ]);
        DB::table('movies')->insert([
            'title' => 'Goats',
            'format' => 'DVD',
            'length' => '94',
            'year' => '2012',
            'rating' => '3',
        ]);
        DB::table('movies')->insert([
            'title' => 'Heidi',
            'format' => 'VHS',
            'length' => '88',
            'year' => '1937',
            'rating' => '4',
        ]);
        DB::table('movies')->insert([
            'title' => 'The Hunchback of Notre Dame',
            'format' => 'VHS',
            'length' => '91',
            'year' => '1996',
            'rating' => '3',
        ]);
        DB::table('movies')->insert([
            'title' => 'Napoleon Dynamite',
            'format' => 'DVD',
            'length' => '96',
            'year' => '2004',
            'rating' => '4',
        ]);
        DB::table('movies')->insert([
            'title' => 'Sense and Sensibility',
            'format' => 'Streaming',
            'length' => '136',
            'year' => '1995',
            'rating' => '5',
        ]);
    }
}
