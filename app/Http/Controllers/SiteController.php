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
    public function index()
    {

        $infos = Info::orderBy('id', 'DESC')->get();
        $groups = Group::orderBy('id', 'DESC')->take(3)->get();
       $blogs =  Blog::orderBy('id','DESC')->get();
       $coments =  Coment::orderBy('id','DESC')->get();
       $teachers =Teacher::orderBy('id','DESC')->take(4)->get();
        return view('welcome', compact('infos', 'groups','blogs','coments','teachers'));
    }

    public function groups()
    {
        $teachers =Teacher::orderBy('id','DESC')->take(4)->get();

        return view('pages.groups', compact('teachers'));
    }
    public function gallery()
    {
        return view('pages.gallery');
    }
    public function class()
    {
        $groups = Group::orderBy('id', 'DESC')->get();
        return view('pages.class', compact('groups'));
    }
    public function blog()
    {
        $blogs =  Blog::orderBy('id','DESC')->get();
        return view('pages.blog' ,compact('blogs'));
    }
    public function article()
    {
        return view('pages.article');
    }
    public function achievements()
    {
        return view('pages.achievements');
    }

}
