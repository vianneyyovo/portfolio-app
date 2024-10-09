<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }


    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        return view('blogs.create');
    }


    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            $imagePath = null;
        }

        Blog::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imagePath,
        ]);

        return redirect()->route('dashboard')->with('success', 'Blog created successfully');
    }


    /**
     * Display the specified resource.
     */

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.show', compact('blog'));
    }


    /**
     * Show the form for editing the specified resource.
     */

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.edit', compact('blog'));
    }


    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            // Supprimer l'ancienne image si nécessaire
            if ($blog->image) {
                Storage::delete('public/' . $blog->image);
            }
            $blog->image = $imagePath;
        }

        $blog->update([
            'title' => $request->title,
            'content' => $request->contents,
            'image' => $blog->image,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        if ($blog->image) {
            Storage::delete('public/' . $blog->image);
        }

        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully');
    }
}
