<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ComplaintsController extends Controller
{
    public function complaints(Request $request)
    {
        DB::table('complaints')->insert([
            'name'=>$request->name,
            'complaints'=>$request->complaints,
        ]);
        return back();
    }
}
