<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Info;
use App\Models\Blog;
use App\Models\Group;
use App\Models\Teacher;
use App\Models\Coment;
use Illuminate\Support\Facades\DB;
class SiteController extends Controller
{
    public function get_welcome()
    {

        $infos = Info::orderBy('id', 'DESC')->get();
        $groups = Group::orderBy('id', 'DESC')->take(3)->get();
       $blogs =  Blog::orderBy('id','DESC')->get();
       $coments =  Coment::orderBy('id','DESC')->get();
       $teachers =Teacher::orderBy('id','DESC')->take(4)->get();


        return view('welcome', compact('infos', 'groups','blogs','coments','teachers'));
    }

    public function get_groups()
    {
        $teachers =Teacher::orderBy('id','DESC')
        ->where('level', 1)->take(4)->get();
        $teachers1 =Teacher::orderBy('id','DESC')
        ->where('level', 0)->take(8)->get();
        $coments = Coment::orderBy('id', 'DESC')->get();

        return view('pages.groups', compact('teachers', 'teachers1','coments'));
    }
    public function get_gallery()
    {
        return view('pages.gallery');
    }
    public function get_class()
    {
        $groups = Group::orderBy('id', 'DESC')->get();
        return view('pages.class', compact('groups'));
    }
    public function get_blog()
    {
        $blogs =  Blog::orderBy('id','DESC')->get();
        return view('pages.blog' ,compact('blogs'));
    }
    public function get_article()
    {
        return view('pages.article');
    }
    public function get_achievements()
    {
        return view('pages.achievements');
    }
    
    public function get_store(Request $request)
    {
        DB::table('order')->insert([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        return back();

     }

}
