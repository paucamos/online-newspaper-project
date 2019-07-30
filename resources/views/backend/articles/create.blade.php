@extends('layouts.backend')
@extends('layouts.css')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Afegir Article</h1>
            </div>
            <div class="col-md-12">
                {{Form::open(['url'=>route('articles.store'),'class'=>'Form','files' => true, 'enctype'=>'multipart/form-data'])}}
                <div class="form-group">
                        Title {{Form::text('title',old('title'),['class'=>'form-control'])}} <br>
                        {!! $errors->first('title','<p class="error">* :message</p>') !!}
                        Description {{Form::text('description',old('description'),['class'=>'form-control'])}} <br>
                        {!! $errors->first('description','<p class="error">* :message</p>') !!}
                        Body {{Form::textarea('body',old('body'),['class'=>'form-control'])}} <br>
                        {!! $errors->first('body','<p class="error">* :message</p>') !!}
                        Photo {{Form::file('photo',old('photo'))}} <br>
                        {!! $errors->first('photo','<p class="error">* :message</p>') !!}
                        User_ID <select name="user_id" class="custom-select">
                            @if(Auth::user()->user_type==1)
                                @forelse($users as $user)
                                    @if($user->user_type != 1)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endif
                                @empty
                                    <h1>Empty</h1>
                                @endforelse
                            @else
                                <option value="{{$users->id}}">{{$users->name}}</option>
                            @endif
                        </select> <br>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="switch1">
                        <label class="custom-control-label" for="switch1">Is_published</label>
                    </div>

                        {{Form::submit('Enviar', ['class'=>'btn btn-primary'])}}
                </div>
                {{Form::close()}}
            </div>
        </div>
    </div>
@endsection