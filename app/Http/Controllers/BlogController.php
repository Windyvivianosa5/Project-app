<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class BlogController extends Controller
{
   public function index()
   {
    $blogs = Blog::all();

    return view('blogs.index',compact('blogs'));
   }

   public function create(){

    return view('blogs.create');

   }

   public function store(Request $request){
    $request->validate([
     'title'=>'required|max:255',
     'description'=>'required',
     'total_view'=>'required',
     'category'=>'required|max:255',
    ]);

    Blog::create($request->all());

    return redirect()->route('blogs.index')->with('success', 'blog created successfully!');
}

    public function edit($id){
        $blog=Blog::FindOrFail($id);

    return view('blogs.edit',compact('blog'));
    }

    public function update(Request $request, $id){
    $validated = $request->validate([
     'title'=>'required|max:255',
     'description'=>'required',
     'total_view'=>'required',
     'category'=>'required|max:255',
    ]);

    $blog=Blog::FindOrFail($id);

    $blog->update($validated);

    return redirect()->route('blogs.index')->with('success', 'blog update successfully!');
}

public function destroy($id){
    $blog=Blog::FindOrFail($id);
    $blog->delete();

    return redirect()->route('blogs.index')->with('success', 'blog deleted successfully!');

}
}
