<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class CommentController extends Controller
{
    /**
     * Display a listing of all comments (admin only)
     */
    public function index(Request $request): JsonResponse
    {
        $perPage = $request->get('per_page', 15);
        $status = $request->get('status');
        
        $query = Comment::with('post');
        
        if ($status) {
            $query->where('status', $status);
        }
        
        $comments = $query->orderBy('created_at', 'desc')->paginate($perPage);
        
        return response()->json($comments);
    }

    /**
     * Store a newly created comment
     */
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'post_id' => 'required|exists:posts,id',
            'author_name' => 'required|string|max:255',
            'content' => 'required|string|max:1000',
        ]);

        $comment = Comment::create([
            'post_id' => $request->post_id,
            'author_name' => $request->author_name,
            'content' => $request->content,
            'status' => 'pending',
        ]);

        return response()->json($comment, 201);
    }

    /**
     * Display comments for a specific post (approved only)
     */
    public function getPostComments(Post $post): JsonResponse
    {
        $comments = $post->approvedComments()->orderBy('created_at', 'desc')->get();
        
        return response()->json($comments);
    }

    /**
     * Update comment status (admin only)
     */
    public function updateStatus(Request $request, Comment $comment): JsonResponse
    {
        $request->validate([
            'status' => 'required|in:pending,approved,rejected',
        ]);

        $comment->update(['status' => $request->status]);

        return response()->json($comment);
    }

    /**
     * Remove the specified comment
     */
    public function destroy(Comment $comment): JsonResponse
    {
        $comment->delete();

        return response()->json(['message' => 'Comment deleted successfully']);
    }

    /**
     * Approve a comment (admin only)
     */
    public function approve(Comment $comment): JsonResponse
    {
        $comment->update(['status' => 'approved']);

        return response()->json($comment);
    }

    /**
     * Reject a comment (admin only)
     */
    public function reject(Comment $comment): JsonResponse
    {
        $comment->update(['status' => 'rejected']);

        return response()->json($comment);
    }
}
