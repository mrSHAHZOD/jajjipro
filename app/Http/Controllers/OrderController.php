<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        DB::table('order')->insert([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        return back();

     }
}
