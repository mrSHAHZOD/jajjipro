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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.coments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coment  $coment
     * @return \Illuminate\Http\Response
     */
    public function show(Coment $coment)
    {
        return view('admin.coments.show',compact('coment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coment  $coment
     * @return \Illuminate\Http\Response
     */
    public function edit(Coment $coment)
    {
        return view('admin.coments.edit',compact('coment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coment  $coment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coment $coment)
    {
        $coment->update($request->all());

        return redirect()->route('admin.coments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coment  $coment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coment $coment)
    {
        $coment->delete();

        return redirect()->route('admin.coments.index');
    }
}
