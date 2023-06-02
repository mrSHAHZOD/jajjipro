<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TeacherController extends Controller
{
    public function index()
    {
        $teachers=Teacher::orderBy('id', 'DESC')->paginate(4);

        return view('admin.teachers.index', compact('teachers'));
    }


    public function create()
    {
        $teachers = DB::table('teachers')->get();
        if (Teacher::count() >= 4)

        return redirect()->route('admin.teachers.index')->with('danger','Malumot  qoshilmadi');
        return view('admin.teachers.create',compact('teachers'));
    }




    public function store(Request $request)
    {
        $requestData= $request->all();
        if($request->hasFile('img'))
        {
            $file = request()->file('img');
            $fileName = time().'-'.$file->getClientOriginalName();
            $file->move('images/', $fileName);
            $requestData['img'] = $fileName;
        }
        Teacher::create($requestData);


      return redirect()->route('admin.teachers.index')->with('success','malumot muvofaqiyatli qoshildi');
    }


    public function show(Teacher $teacher)
    {
        return  view('admin.teachers.show',compact('teacher'));
    }



    public function edit(Teacher $teacher)
    {
        return view('admin.teacher.edit',compact('edit'));
    }




    public function update(Request $request, Teacher $teacher)
    {
        $teacher->update($request->all());

        return redirect()->route('admin.teachers.index');
    }


    public function destroy(Teacher $teacher)
    {
        $teacher->delete();

        return redirect()->route('admin.teachers.index');
    }
}
