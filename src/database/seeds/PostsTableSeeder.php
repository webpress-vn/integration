<?php

use App\Entities\Post;
use App\Supports\Traits\PostSeederTrait;
use Illuminate\Database\Seeder;
use VCComponent\Laravel\MediaManager\Entities\Media;

class PostsTableSeeder extends Seeder
{
    use PostSeederTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seederPosts();
        $this->seederPages();
        $this->seederSlides();
    }
}
