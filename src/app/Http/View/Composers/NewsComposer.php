<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use VCComponent\Laravel\Post\Entities\Post;

class NewsComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $latestNews = Post::ofType('posts')
            ->latest()
            ->limit(3)
            ->get();

        $view->with('latestNews', $latestNews);
    }
}
