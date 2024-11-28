<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $blogId, Post $post)
    {
        $user = User::first();

        $validated = $request->validate([
            'comment' => 'required|string',
        ]);

        return $post->comments()->create([
            'comment' => $validated['comment'],
            'user_id' => $user->id,
        ]);
    }

    public function destroy($blogId, Post $post, $commentId)
    {
        
        $comment = $post->comments()->where('id', $commentId)->firstOrFail();
        $comment->delete();

        return response()->noContent();
    }
}
