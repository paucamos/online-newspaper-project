@extends('layouts.app')
@extends('layouts.css')
@section('content')

<h1>Edit Region</h1>
{{Form::open(['url'=>route('regions.update',$region->id),'method'=>'PUT','class'=>'Form','files' => true, 'enctype'=>'multipart/form-data'])}}

    Title {{Form::text('name',$region->name)}} <br>
        {!! $errors->first('name','<p class="error">* :message</p>') !!}
    Description {{Form::text('description',$region->description)}} <br>
        {!! $errors->first('description','<p class="error">* :message</p>') !!}
    {{Form::submit('Enviar')}}
{{Form::close()}}
@endsection