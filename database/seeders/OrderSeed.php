<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order')->insert(['user_id' => '1', 'product_id' => '1', 'total' => '3', 'quantity' => '2']);
    }
}
