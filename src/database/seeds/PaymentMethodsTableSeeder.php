<?php

use Illuminate\Database\Seeder;
use VCComponent\Laravel\Payment\Entities\PaymentMethod;

class PaymentMethodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentMethod::insert([
            ['key' => 'local', 'slug' => "local"],
            ['key' => 'Vnpay', 'slug' => "vnpay"],
        ]);
    }
}
