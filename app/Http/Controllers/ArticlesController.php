<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     // Si l'usuari es Admin retorna totes les noticies, si es periodista retorna les noticies escrites per ell

    public function index()
    {
        if(Auth::user()->user_type==1)
        {
            $articles = Article::get();
        }
        if(Auth::user()->user_type==2)
        {
            $articles = Article::get()->where('user_id',Auth::user()->id); 
        }
        return view('backend.articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Retorna la vista create que conte un formulari per afegir dades a la DB
    
    public function create()
    {
        return view('backend.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = Input::all();
        $validation=Validator::make($input,Article::$rules);
        if($validation->fails())
        {
            return(Redirect::back()->withErrors($validation)->withInput());
        }
        $data = [
            'title'=>$request ->title,
            'description'=>$request->description,
            'body'=>$request->body,
            'photo'=>$request->photo,
            'user_id'=>$request->user_id,
            'is_published'=>$request->is_published,
            
        ];
        $articles=Article::create($data);
        return(redirect('articles'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
