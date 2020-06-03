<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_statuses')->insert([
            ['name' => 'Pending', 'slug' => 'pending'],
            ['name' => 'Completed', 'slug' => 'completed'],
            ['name' => 'Refunded', 'slug' => 'refunded'],
            ['name' => 'Error', 'slug' => 'error'],
        ]);
    }
}
