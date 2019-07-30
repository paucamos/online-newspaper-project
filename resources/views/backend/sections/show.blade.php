@extends('layouts.app')
@section('content')
<h1>Section {{$section->id}}</h1>
<b>Title</b> : {{$section->name}} <br>
<b>Description</b> : {{$section->description}} <br>
<b>Created_at</b> : {{$section->created_at}} <br>
<b>Updated_at</b> : {{$section->updated_at}} <br>
@endsection