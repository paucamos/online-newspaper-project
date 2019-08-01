@extends('layouts.backend')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Region {{$region->id}}</h1>
                <b>Title</b> : {{$region->name}} <br>
                <b>Description</b> : {{$region->description}} <br>
                <b>Created_at</b> : {{$region->created_at}} <br>
                <b>Updated_at</b> : {{$region->updated_at}} <br>
            </div>
        </div>
    </div>
@endsection