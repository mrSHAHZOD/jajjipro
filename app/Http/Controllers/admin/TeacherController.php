<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers=Teacher::orderBy('id', 'DESC')->paginate(3);

        return view('admin.teachers.index', compact('teachers'));
    }


    public function create()
    {
        return view('admin.teachers.create');
    }




    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5',
            'content' => 'required|min:10',
            'telegram' => 'required|min:10',
            'fbook' => 'required|min:10',
            'instagram' => 'required|min:10',
        ]);

        $requestData= $request->all();
        if($request->hasFile('img'))
        {
            $file = request()->file('img');
            $fileName = time().'-'.$file->getClientOriginalName();
            $file->move('images/', $fileName);
            $requestData['img'] = $fileName;
        }
        Teacher::create($requestData);


      return redirect()->route('admin.teachers.index');
    }


    public function show(Teacher $teacher)
    {
        return  view('admin.teachers.show',compact('teacher'));
    }



    public function edit(Teacher $teacher)
    {
        return view('admin.teachers.edit',compact('teacher'));
    }




    public function update(Request $request,$id)
    {

        $request->validate([
            'name' => 'required|min:5',
            'content' => 'required|min:10',
            'telegram' => 'required|min:10',
            'fbook' => 'required|min:10',
            'instagram' => 'required|min:10',
        ]);

        $requestData= $request->all();
        if($request->hasFile('img'))
        {
            $file = request()->file('img');
            $fileName = time().'-'.$file->getClientOriginalName();
            $file->move('images/', $fileName);
            $requestData['img'] = $fileName;
        }
        Teacher::find($id)->update($requestData);


      return redirect()->route('admin.teachers.index');
    }


    public function destroy(Teacher $teacher)
    {
        $teacher->delete();

        return redirect()->route('admin.Teachers.index');
    }
}
