<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Coment;
use Illuminate\Http\Request;

class ComentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coments = Coment::orderBY('id','DESC')->paginate(3);

       return view('admin.coments.index',compact('coments'));
    }


    public function create()
    {
        return view('admin.coments.create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'name' =>'required|max:10',
            'short_content' =>'required|max:25',
            'work' =>'required|max:15',
        ]);
        $requestData = $request->all();

        if($request->hasFile('icon'))
        {
            $file = request()->file('icon');
            $fileName = time().'-'.$file->getClientOriginalName();
            $file->move('icons/', $fileName);
            $requestData['icon'] = $fileName;
        }

        if($request->hasFile('img'))
        {
            $file = request()->file('img');
            $fileName = time().'-'.$file->getClientOriginalName();
            $file->move('images/', $fileName);
            $requestData['img'] = $fileName;
        }
        Coment::create($requestData);

        return redirect()->route('admin.coments.index');
    }


    public function show(Coment $coment)
    {
        return view('admin.coments.show',compact('coment'));
    }


    public function edit(Coment $coment)
    {
        return view('admin.coments.edit',compact('coment'));
    }


    public function update(Request $request, $id)
    {

        $request->validate([
            'name' =>'required|max:10',
            'short_content' =>'required|max:25',
            'work' =>'required|max:15',
        ]);
        $requestData = $request->all();

        if($request->hasFile('icon'))
        {
            $file = request()->file('icon');
            $fileName = time().'-'.$file->getClientOriginalName();
            $file->move('icons/', $fileName);
            $requestData['icon'] = $fileName;
        }

        if($request->hasFile('img'))
        {
            $file = request()->file('img');
            $fileName = time().'-'.$file->getClientOriginalName();
            $file->move('images/', $fileName);
            $requestData['img'] = $fileName;
        }
        Coment::find($id)->update($requestData);

        return redirect()->route('admin.coments.index');
    }

    public function destroy(Coment $coment)
    {
        $coment->delete();

        return redirect()->route('admin.coments.index');
    }
}
