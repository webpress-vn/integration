<?php

use App\Entities\ItemMenu;
use Illuminate\Database\Seeder;

class ItemMenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ItemMenu::class, 6)->create();
    }
}
