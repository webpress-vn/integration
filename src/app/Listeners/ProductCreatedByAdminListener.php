<?php

namespace App\Listeners;

class ProductCreatedByAdminListener
{

    public function handle($event)
    {
        $product = $event->product;
        $request = request();

        if ($request->has('media_ids')) {
            $product->attachMedia($request->input('media_ids'));
        }

        if ($request->has('category_ids')) {
            $product->attachCategories($request->input('category_ids'));
        }
    }
}
