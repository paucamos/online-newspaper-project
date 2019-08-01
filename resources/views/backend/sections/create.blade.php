@extends('layouts.backend')
@extends('layouts.css')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Add Section</h1>

                {{Form::open(['url'=>route('sections.store'),'class'=>'Form'])}}
                <div class="form-group">
                    <label for="Title" class="">Title</label>
                    {{Form::text('name',old('name'), ['class'=>'form-control'])}} <br>
                    {!! $errors->first('name','<p class="error">* :message</p>') !!}
                </div>
                <div class="form-group">
                    <label for="Description" class="">Description</label>
                    {{Form::text('description',old('description'), ['class'=>'form-control'])}} <br>
                    {!! $errors->first('description','<p class="error">* :message</p>') !!}
                </div>
                {{Form::submit('Enviar', ['class'=>'btn btn-primary'])}}
                {{Form::close()}}
            </div>
        </div>
    </div>
@endsection