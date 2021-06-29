<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;
class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Product')->insert([ 'Title' => 'Item 1', 'Availability' => 'TRUE', 'Category' => 'Electronics', 'Sale Price' => '63.23', 'Bought Price' => '45.67']);
        DB::table('Product')->insert([ 'Title' => 'Item 2', 'Availability' => 'FALSE', 'Category' => 'Basic Office Supplies', 'Sale Price' => '34.56', 'Bought Price' => '28.45']);
        DB::table('Product')->insert([ 'Title' => 'Item 3', 'Availability' => 'TRUE', 'Category' => 'Art Books', 'Sale Price' => '23.12', 'Bought Price' => '11.34']);
        DB::table('Order')->insert(['User ID' => '1', 'Product ID' => '1', 'state' => 'TRUE', 'Total' => '3', 'Quantity' => '2']);
        DB::table('User')->insert(['Name' => 'test123', 'Wallet' => '$64.78']);
    }
}
