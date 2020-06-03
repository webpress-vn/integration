<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_statuses')->insert([
            ['name' => 'In Progress', 'slug' => 'in_progress'],
            ['name' => 'Processed', 'slug' => 'processed'],
            ['name' => 'Error', 'slug' => 'error'],
        ]);
    }
}
