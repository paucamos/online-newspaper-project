<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\User;
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
        $users = User::get();
        return view('backend.articles.index',compact('articles','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Retorna la vista create que conte un formulari per afegir dades a la DB
    
    public function create()
    {
        if(Auth::user()->user_type==1)
        {
            $users = User::get();
        }
        else{

            $users = User::find(Auth::user()->id);
        }
        return view('backend.articles.create',compact('users'));
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

            if(!file_exists("images"))
            {
                mkdir("images",0777);
            }
            else{
                echo("La carpeta ja existeix </br>");
            }
                if(!file_exists("images/".basename($_FILES["photo"]["name"])))
                {
                    if(move_uploaded_file($_FILES["photo"]["tmp_name"],"images/".basename($_FILES["photo"]["name"])))
                    {
                        echo("Img pujada correctament");
                    }
                    else{
                        echo("Error al pujar la foto");
                    }
                }
                else{
                    echo("La img ja existeix");
                }
                $photo = "images/".basename($_FILES["photo"]["name"]);
        $data = [
            'title'=>$request ->title,
            'description'=>$request->description,
            'body'=>$request->body,
            'photo'=>$photo,
            'user_id'=>$request->user_id,
            'is_published'=>$request->is_published,
            'featured'=>0,
            
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
        $article=Article::find($id);
        return view('backend.articles.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article=Article::find($id);

       if(Auth::user()->user_type==1)
        {
            $users = User::get();
        }
        else{

            $users = User::find(Auth::user()->id);
        }
        return view('backend.articles.edit',compact('article','users'));
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
        $input = Input::all();
        $validation=Validator::make($input,Article::$rules);
        if($validation->fails())
        {
            return(Redirect::back()->withErrors($validation)->withInput());
        }

            if(!file_exists("images"))
            {
                mkdir("images",0777);
            }
            else{
                echo("La carpeta ja existeix </br>");
            }
                if(!file_exists("images/".basename($_FILES["photo"]["name"])))
                {
                    if(move_uploaded_file($_FILES["photo"]["tmp_name"],"images/".basename($_FILES["photo"]["name"])))
                    {
                        echo("Img pujada correctament");
                    }
                    else{
                        echo("Error al pujar la foto");
                    }
                }
                else{
                    echo("La img ja existeix");
                }
                $photo = "images/".basename($_FILES["photo"]["name"]);

        $data = [
            'title'=>$request ->title,
            'description'=>$request->description,
            'body'=>$request->body,
            'photo'=>$photo,
            'user_id'=>$request->user_id,
            'is_published'=>$request->is_published
            
        ];
        $article = Article::find($id);
        $article->update($data);
        return (redirect('articles'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return (redirect('articles'));
    }

    public function list() {
        $input = $_GET['articleList'];
        $filtres = Article::where('name', 'like', '%'.$input.'%')->get();

        return view('backend.partial.ajax.filter', compact('filtres'));
    }

    
    public function disable($id)
    {
        $data = [
            'is_published'=> 0
        ];
        $article = Article::find($id);
        $article->update($data);
        return (redirect('articles'));
    }
    public function enable($id)
    {
        $data = [
            'is_published'=> 1
        ];
        $article = Article::find($id);
        $article->update($data);
        return (redirect('articles'));
    }
}
