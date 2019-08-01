@extends('layouts.backend')
@extends('layouts.css')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {{Form::open(['url'=>route('sections.update',$section->id),'method'=>'PUT','class'=>'Form','files' => true, 'enctype'=>'multipart/form-data'])}}
                <h1>Edit Section</h1>
                <div class="form-group">
                    Title {{Form::text('name',$section->name, ['class'=>'form-control'])}} <br>
                    {!! $errors->first('name','<p class="error">* :message</p>') !!}
                </div>
                <div class="form-group">
                    Description {{Form::text('description',$section->description, ['class'=>'form-control'])}} <br>
                    {!! $errors->first('description','<p class="error">* :message</p>') !!}
                </div>
                {{Form::submit('Desar', ['class'=>'btn btn-primary'])}}
                {{Form::close()}}
            </div>
        </div>
    </div>

@endsection