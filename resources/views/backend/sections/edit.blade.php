@extends('layouts.app')
@extends('layouts.css')
@section('content')

<h1>Editar Section</h1>
{{Form::open(['url'=>route('sections.update',$section->id),'method'=>'PUT','class'=>'Form','files' => true, 'enctype'=>'multipart/form-data'])}}

    Title {{Form::text('name',$section->name)}} <br>
        {!! $errors->first('name','<p class="error">* :message</p>') !!}
    Description {{Form::text('description',$section->description)}} <br>
        {!! $errors->first('description','<p class="error">* :message</p>') !!}
    {{Form::submit('Enviar')}}
{{Form::close()}}
@endsection