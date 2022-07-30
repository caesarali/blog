<?php

namespace App\Http\Controllers;

use Canvas\Events\PostViewed;
use Canvas\Models\Post;
use Canvas\Models\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->published()->with('user', 'topic', 'tags')->simplePaginate();
        return view('pages.home', compact('posts'));
    }

    public function showPost(Post $post)
    {
        event(new PostViewed($post));
        return view('pages.post', compact('post'));
    }

    public function showTag(Tag $tag)
    {
        $posts = $tag->posts()->paginate();
        return view('pages.tag', compact('tag', 'posts'));
    }
}
