<?php

namespace App\Http\Controllers;

use Canvas\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function index()
    {
        $topics = Topic::all();

        return view('pages.topic.index', compact('topics'));
    }

    public function show($id)
    {
        $topic = Topic::where('slug', $id)->firstOrFail();
        $posts = $topic->posts()->paginate();

        return view('pages.topic.show', compact('topic', 'posts'));
    }
}
