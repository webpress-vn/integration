<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use VCComponent\Laravel\Post\Entities\Post;

class SlideComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $slides = Post::oftype('slides')->publised()->limit(4)->get();
        $view->with('slides', $slides);
    }
}
