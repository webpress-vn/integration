<?php

namespace App\Listeners;

class ProductUpdatedByAdminListener
{

    public function handle($event)
    {
        $product = $event->product;
        $request = request();

        if ($request->has('media_ids')) {
            $medias = $product->getMedia();
            if ($medias->count()) {
                $media_ids = $medias->map(function ($media) {
                    return $media->id;
                })->toArray();
                $product->detachMedia($media_ids);
            }
            $product->attachMedia($request->input('media_ids'));
        }

        if ($request->has('category_ids')) {
            $categories = $product->categories;
            if ($categories->count()) {
                $category_ids = $product->categories->map(function ($cate) {
                    return $cate->id;
                })->toArray();
                $product->detachCategories($category_ids);
            }
            $product->attachCategories($request->input('category_ids'));
        }
    }
}
