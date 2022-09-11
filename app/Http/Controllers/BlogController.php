<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        return view('blog');
    }

    public function store(Request $request)
    {
            if($request->hasFile('image')){
                $filename = $request->image->getClientOriginalName();
                $request->image->storeAs('images',$filename,'public');

                Blog::create([
                    'user_id' =>auth()->user()->id,
                    'name' => $request->name,
                    'image' => $filename,
                    'title' => $request->title,
                    'description' => $request->description
                ]);
            }

        return redirect()->back()->with('status','Post Added Successfully');
    }
}
