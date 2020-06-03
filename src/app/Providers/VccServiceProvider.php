<?php

namespace App\Providers;

use App\Entities\Category;
use App\Entities\Post;
use App\Entities\Product;
use App\Http\Controllers\Web\CartController;
use App\Http\Controllers\Web\CategoryDetailController;
use App\Http\Controllers\Web\CategoryListController;
use App\Http\Controllers\Web\PostDetailController;
use App\Http\Controllers\Web\PostListController;
use App\Http\Controllers\Web\ProductDetailController;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;
use VCComponent\Laravel\Category\Contracts\ViewCategoryDetailControllerInterface;
use VCComponent\Laravel\Category\Contracts\ViewCategoryListControllerInterface;
use VCComponent\Laravel\Order\Contracts\ViewCartControllerInterface;
use VCComponent\Laravel\Post\Contracts\ViewPostDetailControllerInterface;
use VCComponent\Laravel\Post\Contracts\ViewPostListControllerInterface;
use VCComponent\Laravel\Product\Contracts\ViewProductDetailControllerInterface;

class VccServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ViewCategoryListControllerInterface::class, CategoryListController::class);
        $this->app->bind(ViewCategoryDetailControllerInterface::class, CategoryDetailController::class);

        $this->app->bind(ViewPostListControllerInterface::class, PostListController::class);
        $this->app->bind(ViewPostDetailControllerInterface::class, PostDetailController::class);

        $this->app->bind(ViewProductDetailControllerInterface::class, ProductDetailController::class);
        $this->app->bind(ViewCartControllerInterface::class, CartController::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Relation::morphMap([
            'posts'      => Post::class,
            'products'   => Product::class,
            'categories' => Category::class,
        ]);
    }
}
