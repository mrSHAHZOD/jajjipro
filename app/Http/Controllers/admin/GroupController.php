<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::orderBy('id','DESC')->paginate(3);

        return view('admin.groups.index',compact('groups'));
    }



    public function create()
    {
        return view('admin.groups.create');
    }



    public function store(Request $request)
    {
        $requestData =$request->all();

        if($request->hasFile('img'))
        {
            $file= request()->file('img');
            $fileName = time().'-'.$file->getClientOriginalName();
            $file->move('images/',$fileName);
            $requestData['img'] = $fileName;
        }
        Group::create($requestData);

        return redirect()->route('admin.groups.index');
    }



    public function show(Group $group)
    {
        return view('admin.groups.show',compact('group'));
    }



    public function edit(Group $group)
    {
        return view('admin.groups.show',compact('group'));
    }



    public function update(Request $request, Group $group)
    {
        $group->update($request->all());

        return redirect()->route('admin.groups.index');
    }


    public function destroy(Group $group)
    {
        $group->delete();

        return redirect()->route('admin.groups.index');
    }
}
