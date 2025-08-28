<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function all()
    {
        $posts = Post::latest()->take(6)->get();
        return view('home', compact('posts'));
    }

    public function index()
    {
        if (Auth::user()->role !== 'admin' || Auth::user() == null) {
            return redirect()->route('login');
        }
        $posts = Post::with('user')->latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        $post->load('user');
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        if (Auth::user()->role !== 'admin' || Auth::user() == null) {
            return redirect()->route('login');
        }
        return view('posts.create');
    }

    public function store(Request $request)
    {
        if (Auth::user()->role !== 'admin' || Auth::user() == null) {
            return redirect()->route('login');
        }
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('images', $imageName, 'public');
            $imagePath = 'images/' . $imageName;
        }

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => Auth::id(),
            'image' => $imagePath ?? null,
        ]);

        return redirect()->route('posts.index');
    }

    public function edit(Post $post)
    {
        if (Auth::user()->role !== 'admin' || Auth::user() == null) {
            return redirect()->route('login');
        }
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        if (Auth::user()->role !== 'admin' || Auth::user() == null) {
            return redirect()->route('login');
        }
        $request->validate([
            'title' => 'nullable|string|max:255',
            'content' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {
            if ($post->image) {
                Storage::delete('images/' . $post->image);
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('images', $imageName, 'public');
            $imagePath = 'images/' . $imageName;
        }

        $post->update([
            'title' => $request->title ?? $post->title,
            'content' => $request->content ?? $post->content,
            'image' => $imagePath ?? $post->image,
        ]);

        return redirect()->route('posts.index');
    }

    public function destroy(Post $post)
    {
        if (Auth::user()->role !== 'admin' || Auth::user() == null) {
            return redirect()->route('login');
        }

        if ($post->image) {
            Storage::delete('public/' . $post->image);
        }

        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Berita berhasil dihapus!');
    }
}
