<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Region;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
class RegionsController extends Controller
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
            $regions = Region::get();
        }
        else{
            return redirect('welcome');
        }
        return view('backend.regions.index',compact('regions'));
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
            return view('backend.regions.create');
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
        $validation=Validator::make($input,Region::$rules);
        if($validation->fails())
        {
            return(Redirect::back()->withErrors($validation)->withInput());
        }
        $data = [
            'name'=>$request ->name,
            'description'=>$request->description,
            
        ];
        $regions=Region::create($data);
        return(redirect('regions'));
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
            $region=Region::find($id);
            return view('backend.regions.show',compact('region'));
        }
        else{
            return(redirect('regions'));
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
            $region=Region::find($id);
            return view('backend.regions.edit',compact('region'));
        }
        else{
            return(redirect('regions'));
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
        $validation=Validator::make($input,Region::$rules);
        if($validation->fails())
        {
            return(Redirect::back()->withErrors($validation)->withInput());
        }
        $data = [
            'name'=>$request ->name,
            'description'=>$request->description,
            
        ];
        $region = Region::find($id);
        $region->update($data);
        return(redirect('regions'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $region = Region::find($id);
        $region->delete();
        return (redirect('regions'));
    }
}
