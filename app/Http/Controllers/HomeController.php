<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Section;
use App\Region;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function showArticle($id){
        $article = Article::find($id);
        return view('frontend.article', compact('article'));
    }

    public function quisom(){
        return view('frontend.quisom');
    }

    public function sectionList($id){
        $seccio = Section::find($id);
        $articles = $seccio->articles()->get();
        return view('frontend.sections_regions', compact('seccio','articles'));
    }

    public function regionList($id){
        $regio = Region::find($id);
        $articles = $regio->articles();
        return view('frontend.sections_regions', compact('regio','articles'));
    }
}
