<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Section;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class SectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->user_type==1)
        {
            $sections = Section::get();
        }
        else{
            return redirect('welcome');
        }
        return view('backend.sections.index',compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->user_type==1)
        {
            return view('backend.sections.create');
        }
        else{
            return redirect('welcome');
        }
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
        $validation=Validator::make($input,Section::$rules);
        if($validation->fails())
        {
            return(Redirect::back()->withErrors($validation)->withInput());
        }
        $data = [
            'name'=>$request ->name,
            'description'=>$request->description,
            
        ];
        $sections=Section::create($data);
        return(redirect('sections'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Auth::user()->user_type==1)
        {
            $section=Section::find($id);
            return view('backend.sections.show',compact('section'));
        }
        else{
            return(redirect('sections'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::user()->user_type==1)
        {
            $section=Section::find($id);
            return view('backend.sections.edit',compact('section'));
        }
        else{
            return(redirect('sections'));
        }

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
        $validation=Validator::make($input,Section::$rules);
        if($validation->fails())
        {
            return(Redirect::back()->withErrors($validation)->withInput());
        }
        $data = [
            'name'=>$request ->name,
            'description'=>$request->description,
            
        ];
        $section = Section::find($id);
        $section->update($data);
        return(redirect('sections'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $section = Section::find($id);
        $section->delete();
        return (redirect('sections'));
    }
}
