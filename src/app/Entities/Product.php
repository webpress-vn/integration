<?php

namespace App\Entities;

use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use VCComponent\Laravel\Category\Traits\HasCategoriesTrait;
use VCComponent\Laravel\Comment\Traits\HasCommentTrait;
use VCComponent\Laravel\MediaManager\HasMediaTrait;
use VCComponent\Laravel\Product\Entities\Product as BaseProduct;
use VCComponent\Laravel\Tag\Traits\HasTagsTraits;

class Product extends BaseProduct implements HasMedia
{
    use HasCategoriesTrait, HasMediaTrait, HasCommentTrait, HasTagsTraits;
    public function schema()
    {
        return [];
    }

    public function scopeHot($query)
    {
        return $query->where('is_hot', self::HOT);
    }

    public function scopeOfRelatedProducts($query, $productId)
    {
        $categoryIds = self::find($productId)->categories->map(function ($cate) {
            return $cate->id;
        });
        return $query->where('id', '<>', $productId)
            ->whereHas('categories', function ($q) use ($categoryIds) {
                $q->whereIn('categories.id', $categoryIds);
            })
            ->limit(4);
    }

    public function getLimitedName($limit)
    {
        return Str::limit($this->name, $limit);
    }
}
