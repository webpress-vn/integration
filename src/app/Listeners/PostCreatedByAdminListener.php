<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class PostCreatedByAdminListener
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $post    = $event->post;
        $request = request();

        if ($request->has('media_ids')) {
            $post->attachMedia($request->input('media_ids'));
        }

        if ($request->has('category_ids')) {
            $post->attachCategories($request->input('category_ids'));
        }
    }
}
