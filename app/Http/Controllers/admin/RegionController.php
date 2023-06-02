<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegionController extends Controller
{
    public function index()
    {

        $regions =Region::orderBy('id','DESC')->get();
        /* return $regions; */
        return view('admin.regions.index', compact('regions'));
    }

    public function create()
    {
        return view('admin.regions.create');
    }

    public function store(Request $request)
    {
        Region::create($request->all());

        return redirect(route('admin.regions.index'))->with('success', 'Malumot muvaffaqiyatli qoshildi');
    }

    public function show($id)
    {
        $region =DB::table('regions')
        ->where('regions.id','=', $id)
        ->join('districts','regions.id','=','districts.region_id')
        ->join('streets','regions.id','=','streets.region_id')
        ->select('regions.*','districts.noun','streets.title')->first();
       /*  return $regions; */
        return view('admin.regions.show', compact('region'));
    }

    public function edit($id)
    {
        $region = Region::find($id);

        return view('admin.regions.edit', compact('region',));
    }

    public function update(Request $request, $id)
    {
        Region::find($id)->update($request->all());

        return redirect()->route('admin.regions.index')->with('success', 'Malumot mavaffaqiyatli ozgartirildi');
    }

    public function destroy($id)
    {
        Region::find($id)->delete();

        return redirect()->route('admin.regions.index')->with('success', 'Malumot mavaffaqiyatli ochirildi');
    }
}
