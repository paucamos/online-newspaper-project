@extends('layouts.app')
@extends('layouts.css')
@section('content')

<h1>Afegir Article</h1>
{{Form::open(['url'=>route('articles.store'),'class'=>'Form','files' => true, 'enctype'=>'multipart/form-data'])}}

    Title {{Form::text('title',old('title'))}} <br>
        {!! $errors->first('title','<p class="error">* :message</p>') !!}
    Description {{Form::text('description',old('description'))}} <br>
        {!! $errors->first('description','<p class="error">* :message</p>') !!}
    Body {{Form::textarea('body',old('body'))}} <br>
        {!! $errors->first('body','<p class="error">* :message</p>') !!}
    Photo {{Form::file('photo',old('photo'))}} <br>
        {!! $errors->first('photo','<p class="error">* :message</p>') !!}
    User_ID <select name="user_id">
                @forelse($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @empty
                    <h1>Empty</h1>
                 @endforelse
            </select> <br>
    Is_Published <input type="radio" name="is_published" value="0"> No
                 <input type="radio" name="is_published" value="1"> Si<br>

    {{Form::submit('Enviar')}}
{{Form::close()}}
@endsection