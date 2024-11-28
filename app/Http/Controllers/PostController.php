<?php
namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Blog $blog)
    {
        return $blog->posts;
    }

    public function store(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        return $blog->posts()->create($validated);
    }

    public function show(Blog $blog, Post $post)
    {
        return $post->load(['likes', 'comments']);
    }

    public function update(Request $request, Blog $blog, Post $post)
    {
        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'content' => 'sometimes|required|string',
        ]);

        $post->update($validated);
        return $post;
    }

    public function destroy(Blog $blog, Post $post)
    {
        $post->delete();
        return response()->noContent();
    }
}
