<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserTableSeeder::class);
         $this->call(BrandTableSeeder::class);
         $this->call(SizeTableSeeder::class);
         $this->call(ColorTableSeeder::class);
         $this->call(ProductTableSeeder::class);
         $this->call(InventoryTableSeeder::class);
    }
}
