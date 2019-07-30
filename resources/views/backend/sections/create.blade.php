@extends('layouts.app')
@extends('layouts.css')
@section('content')
<h1>Afegir Section</h1>

{{Form::open(['url'=>route('sections.store'),'class'=>'Form'])}}

Title {{Form::text('name',old('name'))}} <br>
    {!! $errors->first('name','<p class="error">* :message</p>') !!}
Description {{Form::text('description',old('description'))}} <br>
    {!! $errors->first('description','<p class="error">* :message</p>') !!}
{{Form::submit('Enviar')}}
{{Form::close()}}
@endsection