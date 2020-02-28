<?php

use Illuminate\Database\Seeder;

class SizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('size')->delete();
        DB::table('size')->insert([
            'id' => '1',
            'name' => 'Small'
        ]);
        DB::table('size')->insert([
            'id' => '2',
            'name' => 'Medium'
        ]);
        DB::table('size')->insert([
            'id' => '3',
            'name' => 'Large'
        ]);
    }
}
