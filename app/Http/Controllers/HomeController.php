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
        $featured_articles = Article::where('featured','1')->orderBy('created_at','desc')->limit(5)->get();
        $semi_featured_articles_1 = Article::where('featured','2')->orderBy('created_at','desc')->limit(2)->get();
        $semi_featured_articles_2 = Article::where('featured','2')->orderBy('created_at','desc')->offset(2)->limit(2)->get();
        $secondary_news = Article::where('featured','0')->orderBy('created_at','desc')->limit(2)->get();
        $recent_articles_1 = Article::where('featured','0')->orderBy('created_at','desc')->offset(2)->limit(3)->get();
        $recent_articles_2 = Article::where('featured','0')->orderBy('created_at','desc')->offset(5)->limit(3)->get();
        return view('welcome', compact('featured_articles','semi_featured_articles_1','semi_featured_articles_2','secondary_news','recent_articles_1','recent_articles_2'));
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
