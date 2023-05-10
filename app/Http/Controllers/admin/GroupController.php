<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;
use App\Http\Requests\GroupStoreRequest;
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



    public function store(GroupStoreRequest $request)
    {
        $requestData =$request->all();


        if($request->hasFile('img'))
        {
            $requestData['img']= $this->upload_file();

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



    public function update(Request $request,$id)
    {

        $requestData = $request->all();

        if($request->hasFile('img'))
        {
            $requestData['img'] = $this->upload_file();
        }
        Group::find($id)->update($requestData);

        return redirect()->route('admin.groups.index');
    }


    public function destroy(Group $group)
    {
        $group->delete();

        return redirect()->route('admin.groups.index');
    }

    public function upload_file(){
        $file= request()->file('img');
        $fileName = time().'-'.$file->getClientOriginalName();
        $file->move('images/',$fileName);
        return $fileName;
    }

}
