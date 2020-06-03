<?php

namespace App\Http\Controllers\Web;

use VCComponent\Laravel\Post\Contracts\ViewPostDetailControllerInterface;
use VCComponent\Laravel\Post\Http\Controllers\Web\PostDetailController as PostDetailControllerBase;

class PostDetailController extends PostDetailControllerBase implements ViewPostDetailControllerInterface
{

}
