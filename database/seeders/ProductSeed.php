<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([ 'Title' => 'Item 1', 'Category' => 'Electronics', 'Sale Price' => '63.23', 'Bought Price' => '45.67']);
        DB::table('product')->insert([ 'Title' => 'Item 2', 'Category' => 'Basic Office Supplies', 'Sale Price' => '34.56', 'Bought Price' => '28.45']);
        DB::table('product')->insert([ 'Title' => 'Item 3', 'Category' => 'Art Books', 'Sale Price' => '23.12', 'Bought Price' => '11.34']);
    }
}
