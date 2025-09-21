<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of posts with cursor pagination
     */
    public function index(Request $request): JsonResponse
    {
        $perPage = $request->get('per_page', 10);
        $cursor = $request->get('cursor');
        
        $query = Post::orderBy('id', 'desc');
        
        if ($cursor) {
            $query->where('id', '<', $cursor);
        }
        
        $posts = $query->limit($perPage + 1)->get();
        
        $hasMore = $posts->count() > $perPage;
        if ($hasMore) {
            $posts->pop();
        }
        
        $nextCursor = $hasMore ? $posts->last()->id : null;
        
        return response()->json([
            'data' => $posts,
            'pagination' => [
                'has_more' => $hasMore,
                'next_cursor' => $nextCursor,
            ]
        ]);
    }

    /**
     * Store a newly created post
     */
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only(['title', 'content']);
        $data['slug'] = Str::slug($request->title);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/posts', $imageName);
            $data['image'] = 'posts/' . $imageName;
        }

        $post = Post::create($data);

        return response()->json($post, 201);
    }

    /**
     * Display the specified post
     */
    public function show(Post $post): JsonResponse
    {
        $post->load('approvedComments');
        return response()->json($post);
    }

    /**
     * Update the specified post
     */
    public function update(Request $request, Post $post): JsonResponse
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only(['title', 'content']);
        $data['slug'] = Str::slug($request->title);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($post->image) {
                Storage::delete('public/' . $post->image);
            }
            
            $image = $request->file('image');
            $imageName = time() . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/posts', $imageName);
            $data['image'] = 'posts/' . $imageName;
        }

        $post->update($data);

        return response()->json($post);
    }

    /**
     * Remove the specified post
     */
    public function destroy(Post $post): JsonResponse
    {
        // Delete associated image
        if ($post->image) {
            Storage::delete('public/' . $post->image);
        }
        
        $post->delete();

        return response()->json(['message' => 'Post deleted successfully']);
    }
}
