<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function ourfilestore(Request $request)

    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //Upload image
        $imageName = null;
        if (isset($request->image)) {
            $imageName = time() . '.' . request()->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }


        //Add new post
        $post = new Post;

        $post->name = $request->name;
        $post->description = $request->description;
        $post->image = $imageName;

        $post->save();

        return redirect()->route('home')->with('success', 'Post created successfully.');
    }

    public function editData($id)
    {
        $post = Post::findOrFail($id);
        return view('edit', ['ourPost' => $post]);
    }

    public function updateData(Request $request, $id)
    {

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //Update post
        $post = Post::findOrFail($id);

        //Upload image
        if (isset($request->image)) {
            $imageName = time() . '.' . request()->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $post->image = $imageName;
        }

        $post->name = $request->name;
        $post->description = $request->description;
    

        $post->save();

        return redirect()->route('home')->with('success', 'Post updated successfully.');
    }

    public function deleteData($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('home')->with('success', 'Post deleted successfully.');
    }
}
