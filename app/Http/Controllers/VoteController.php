<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    /**
     * Give an up- or down- vote for a post.
     *
     * @param Request $request
     * @param Post $post
     */
    public function updatePost(Request $request, Post $post)
    {
        return $request->user()->voteForPost($post, $request->get('up', -1));
    }

    /**
     * Give an up- or down- vote for a post.
     *
     * @param Request $request
     * @param Comment $comment
     */
    public function updateComment(Request $request, Comment $comment)
    {
        return $request->user()->voteForComment($comment, $request->get('up', -1));
    }
}
