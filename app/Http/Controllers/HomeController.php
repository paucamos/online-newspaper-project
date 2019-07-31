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
        //
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    public function showArticle($id){
        $article = Article::find($id);
        return view('frontend.article', compact('article'));
    }

    public function quisom(){
        return view('frontend.quisom');
    }

    public function sectionList($id, Request $request){
        $seccio = Section::find($id);
        $search = false;
        
        if($seccio){
            $articles = $seccio->articles()->paginate(10);
    
            if ($request->ajax()) {
                return view('ajax.noticies', compact('articles','search'));
            }
    
            return view('frontend.sections_regions', compact('articles','search'));
        }else{
            return redirect('home');
        }
    }

    public function regionList($id, Request $request){
        $regio = Region::find($id);
        $search = false;

        if($regio){
            $articles = $regio->articles()->paginate(10);

            if ($request->ajax()) {
                return view('ajax.noticies', compact('articles','search'));
            }

            return view('frontend.sections_regions', compact('articles','search'));
        }else{
            return redirect('home');
        }
    }

    public function search(Request $request){
        $articles = Article::where('title','LIKE','%'.$request->title.'%')->paginate(10);
        $search = true;

        if ($request->ajax()) {
            return view('ajax.noticies', compact('articles','search'));
        }

        return view('frontend.sections_regions', compact('articles','search'));
    }
}
