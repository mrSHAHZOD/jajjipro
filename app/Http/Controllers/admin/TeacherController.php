<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Requests\TeacherStoreRequest;
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




    public function store(TeacherStoreRequest $request)пш
    {

        $requestData= $request->all();
        if($request->hasFile('img'))
        {
            $requestData['img']=$this->upload_file();
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

        $requestData= $request->all();
        if($request->hasFile('img'))
        {
            $requestData['img']= $this->upload_file();
        }
        Teacher::find($id)->update($requestData);


      return redirect()->route('admin.teachers.index');
    }


    public function destroy(Teacher $teacher)
    {
        $teacher->delete();

        return redirect()->route('admin.Teachers.index');
    }


    public function upload_file()
    {
        $file = request()->file('img');
            $fileName = time().'-'.$file->getClientOriginalName();
            $file->move('images/', $fileName);
            return $fileName;
    }
}
