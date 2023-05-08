<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Requests\BlogStoreRequest;
class BlogController extends Controller

{
    public function index()
    {

       $blogs = Blog::orderBY('id','DESC')->paginate(3);

       return view('admin.blogs.index',compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }


    public function store(BlogStoreRequest $request)
    {

        $requestData = $request->all();

        if($request->hasFile('img'))
        {
            $requestData['img'] = $this->upload_file();
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

        $requestData = $request->all();

        if($request->hasFile('img'))
        {
            $requestData['img'] = $this->upload_file();
        }
        Blog::find($id)->update($requestData);

        return redirect()->route('admin.blogs.index');
    }


    public function destroy(Blog $blog)
    {

     $blog->delete();

     return redirect()->route('admin.blogs.index');
    }


    public function upload_file(){
        $file = request()->file('img');
        $fileName = time().'-'.$file->getClientOriginalName();
        $file->move('images/', $fileName);
        return $fileName;
    }
}
