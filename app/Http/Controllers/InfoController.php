<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index()
    {
        $infos=Info::orderBy('id','DESC')->paginate(3);

        return view('admin.infos.index',compact('infos'));
    }


    public function create()
    {
        return view('admin.infos.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5|max:30',
            'content' => 'required|min:10',
        ]);


        $requestData = $request->all();

        if($request->hasFile('icon'))
        {
            $file = request()->file('icon');
            $fileName = time().'-'.$file->getClientOriginalName();
            $file->move('icons/', $fileName);
            $requestData['icon'] = $fileName;
        }

        Info::create($requestData);

        return redirect()->route('admin.infos.index');
    }


    public function show(Info $info)
    {
        return view('admin.infos.show', compact('info'));
    }


    public function edit(Info $info)
    {

        return view('admin.infos.edit', compact('info'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:5|max:30',
            'content' => 'required|min:10',
        ]);


        $requestData = $request->all();

        if($request->hasFile('icon'))
        {
            $file = request()->file('icon');
            $fileName = time().'-'.$file->getClientOriginalName();
            $file->move('icons/', $fileName);
            $requestData['icon'] = $fileName;
        }

            Info::find($id)->update($requestData);

        /* $info->update($request->all()); */

        return redirect()->route('admin.infos.index');
    }

    public function destroy(Info $info)
    {
        $info->delete();

        return redirect()->route('admin.infos.index');
    }
}
