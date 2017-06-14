<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
      public function run() {
        DB::table('drinks')->insert([
            'name' => 'Vodka',
            'comments' => 'Blood of creativity',
            'rating' => 9,
            'brew_date' => '1973-09-03',
        ]);
    }
}
