<?php

namespace App\Listeners;

class PostUpdatedByAdminListener
{

    public function __construct()
    {
        //
    }

    public function handle($event)
    {
        $post    = $event->post;
        $request = request();

        if ($request->has('media_ids')) {
            $medias = $post->getMedia();
            if ($medias->count()) {
                $media_ids = $medias->map(function ($media) {
                    return $media->id;
                })->toArray();
                $post->detachMedia($media_ids);
            }
            $post->attachMedia($request->input('media_ids'));
        }

        if ($request->has('category_ids')) {
            $categories = $post->categories;
            if ($categories->count()) {
                $category_ids = $post->categories->map(function ($cate) {
                    return $cate->id;
                })->toArray();
                $post->detachCategories($category_ids);
            }
            $post->attachCategories($request->input('category_ids'));
        }
    }
}
