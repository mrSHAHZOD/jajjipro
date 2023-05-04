<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function groups()
    {
        return view('pages.groups');
    }
    public function gallery()
    {
        return view('pages.gallery');
    }
    public function class()
    {

        return view('pages.class');
    }
    public function blog()
    {
        return view('pages.blog');
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
