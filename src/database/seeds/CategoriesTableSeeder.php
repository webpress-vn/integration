<?php

use App\Entities\Category;
use App\Supports\Traits\ProductSeederTrait;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    use ProductSeederTrait;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seederProductsCategory();
    }

    protected function seederProductsCategory()
    {
        factory(Category::class, 6)
            ->states('products')
            ->create()
            ->each(function ($cate, $key) {
                if ($key === 0) {
                    $products = $this->seederHotProducts();
                    $products->each(function ($product) use ($cate) {
                        $product->attachCategories($cate->id);
                    });
                }
                $products = $this->seederProducts();
                $products->each(function ($product) use ($cate) {
                    $product->attachCategories($cate->id);
                });
            });
    }
}
