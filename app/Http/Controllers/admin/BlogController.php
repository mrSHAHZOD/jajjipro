<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{public function index()
    {

       $blogs = Blog::orderBY('id','DESC')->paginate(3);

       return view('admin.blogs.index',compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' =>'required|min:10',
            'name' => 'required|min:4',
            'short_content'=>'required|min:15',
        ]);
        $requestData = $request->all();

        if($request->hasFile('img'))
        {
            $file = request()->file('img');
            $fileName = time().'-'.$file->getClientOriginalName();
            $file->move('images/', $fileName);
            $requestData['img'] = $fileName;
        }
        Blog::create($requestData);

        return redirect()->route('admin.blogs.index');
    }


    public function show(Blog $blog)
    {
        return view('admin.blogs.show',compact('blog'));
    }


    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit',compact('blog'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'title' =>'required|min:10',
            'name' => 'required|min:4',
            'short_content'=>'required|min:15',
        ]);
        $requestData = $request->all();

        if($request->hasFile('img'))
        {
            $file = request()->file('img');
            $fileName = time().'-'.$file->getClientOriginalName();
            $file->move('images/', $fileName);
            $requestData['img'] = $fileName;
        }
        Blog::find($id)->update($requestData);

        return redirect()->route('admin.blogs.index');
    }


    public function destroy(Blog $blog)
    {

     $blog->delete();

     return redirect()->route('admin.blogs.index');
    }
}
