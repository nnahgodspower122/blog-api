<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{

    public function like(Request $request, $blogId, Post $post)
    {
        $user = User::first();

        $post->likes()->create(['user_id' => $user->id]);

        return response()->json(['message' => 'Post liked']);
    }


    public function unlike(Request $request, $blogId, Post $post)
    {
        $user = User::first();

        $post->likes()->where('user_id', $user->id)->delete();

        return response()->json(['message' => 'Post unliked']);
    }
}

