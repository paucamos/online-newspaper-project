@extends('layouts.app')
@extends('layouts.css')
@section('content')

<h1>Edit Article</h1>
{{Form::open(['url'=>route('articles.update',$article->id),'method'=>'PUT','class'=>'Form','files' => true, 'enctype'=>'multipart/form-data'])}}

    Title {{Form::text('title',$article->title)}} <br>
        {!! $errors->first('title','<p class="error">* :message</p>') !!}
    Description {{Form::text('description',$article->description)}} <br>
        {!! $errors->first('description','<p class="error">* :message</p>') !!}
    Body {{Form::textarea('body',$article->body)}} <br>
        {!! $errors->first('body','<p class="error">* :message</p>') !!}
    Photo {{Form::file('photo')}} <img src="../../{{$article->photo}}"> <br>
        {!! $errors->first('photo','<p class="error">* :message</p>') !!}
    User_ID <select name="user_id">
            @if(Auth::user()->user_type==1)
                @forelse($users as $user)
                    @if($user->user_type != 1)
                        @if($user->id == $article->user_id)
                            <option value="{{$user->id}}" selected="selected">{{$user->name}}</option>
                        @else
                            <option value="{{$user->id}}">{{$user->name}}</option>
                        @endif
                    @endif
                @empty
                    <h1>Empty</h1>
                 @endforelse
            @else  
                <option value="{{$users->id}}">{{$users->name}}</option>
            @endif
            </select> <br>
            @if($article->is_published == 0)
                Is_Published <input type="radio" name="is_published" value="0" checked="checked"> No
                <input type="radio" name="is_published" value="1"> Si<br>
            @else
                Is_Published <input type="radio" name="is_published" value="0" > No
                <input type="radio" name="is_published" value="1" checked="checked"> Si<br>
            @endif

    {{Form::submit('Enviar')}}
{{Form::close()}}
@endsection