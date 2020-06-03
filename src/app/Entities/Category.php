<?php

namespace App\Entities;

use App\Entities\Product;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use VCComponent\Laravel\Category\Entities\Category as BaseCategory;
use VCComponent\Laravel\Menu\Contracts\HasMenusContract;
use VCComponent\Laravel\Menu\Traits\HasMenusTrait;
use VCComponent\Laravel\SEO\Contracts\HasSeoContract;
use VCComponent\Laravel\SEO\Traits\HasSeoTrait;

class Category extends BaseCategory implements HasSeoContract, HasMenusContract
{
    use HasSeoTrait, Sluggable, SluggableScopeHelpers, HasMenusTrait;

    protected $fillable = [
        'name',
        'parent_id',
        'type',
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name',
            ],
        ];
    }

    public function products()
    {
        return $this->morphedByMany(Product::class, 'categoryable');
    }
    public function posts()
    {
        return $this->morphedByMany(Post::class, 'categoryable');
    }

    public function viewProducts()
    {
        return $this->morphedByMany(Product::class, 'categoryable')
            ->latest()
            ->limit(8);
    }
}
