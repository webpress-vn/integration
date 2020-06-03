<?php

namespace App\Http\Controllers\Web;

use App\Entities\Post;
use Illuminate\Http\Request;
use VCComponent\Laravel\Post\Contracts\ViewPostListControllerInterface;
use VCComponent\Laravel\Post\Http\Controllers\Web\PostListController as BasePostListController;

class PostListController extends BasePostListController implements ViewPostListControllerInterface
{
    protected function view()
    {
        return 'pages.news';
    }

    protected function viewData($posts, Request $request)
    {
        $news = Post::ofType('posts')
            ->latest()
            ->paginate(5);
        return [
            'news' => $news,
        ];
    }
}
