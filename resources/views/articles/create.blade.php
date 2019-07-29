@extends('layouts.app')
@extends('layouts.css')
@section('content')

<h1>Afegir Article</h1>
{{Form::open(['url'=>route('articles.store'),'class'=>'Form'])}}

    Title {{Form::text('title',old('title'))}} <br>
        {!! $errors->first('title','<p class="error">* :message</p>') !!}
    Description {{Form::text('description',old('description'))}} <br>
        {!! $errors->first('description','<p class="error">* :message</p>') !!}
    Body {{Form::text('body',old('body'))}} <br>
        {!! $errors->first('body','<p class="error">* :message</p>') !!}
    Photo {{Form::text('photo',old('photo'))}} <br>
        {!! $errors->first('photo','<p class="error">* :message</p>') !!}
    User_ID {{Form::text('user_id',old('user_id'))}} <br>
        {!! $errors->first('user_id','<p class="error">* :message</p>') !!}
    Is_Published {{Form::text('is_published',old('is_published'))}} <br>
        {!! $errors->first('is_published','<p class="error">* :message</p>') !!}
    {{Form::submit('Enviar')}}
{{Form::close()}}
@endsection