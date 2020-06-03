<?php

namespace App\Entities;

use Spatie\MediaLibrary\HasMedia\HasMedia;
use VCComponent\Laravel\Category\Traits\HasCategoriesTrait;
use VCComponent\Laravel\Comment\Contracts\HasCommentsContract;
use VCComponent\Laravel\Comment\Traits\HasCommentTrait;
use VCComponent\Laravel\MediaManager\HasMediaTrait;
use VCComponent\Laravel\Post\Entities\Post as BasePost;
use VCComponent\Laravel\SEO\Traits\HasSeoTrait;
use VCComponent\Laravel\Tag\Contracts\HasTagsContract;
use VCComponent\Laravel\Tag\Traits\HasTagsTraits;

class Post extends BasePost implements HasMedia, HasTagsContract, HasCommentsContract
{
    use HasMediaTrait, HasCategoriesTrait, HasSeoTrait, HasTagsTraits, HasCommentTrait;

    public function postTypes()
    {
        return [
            'pages',
        ];
    }

    public function schema()
    {
        return [
            'thumbnail' => [
                'type' => 'string',
                'rule' => [],
            ],
        ];
    }

    public function Pageschema()
    {
        return [
            'thumbnail' => [
                'type' => 'string',
                'rule' => [],
            ],
        ];
    }
}
