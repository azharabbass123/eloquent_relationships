<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use app\Models\NewPost;

class LikeNewPostsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    
     public function a_post_can_be_liked()
     {
        $post = NewPost::factory()->create();

        $post->like();

        $post->assertCount(1, $post->likes);
     }
}
