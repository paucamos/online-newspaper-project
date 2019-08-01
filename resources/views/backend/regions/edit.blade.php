@extends('layouts.backend')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            {{Form::open(['url'=>route('regions.update',$region->id),'method'=>'PUT','class'=>'Form','files' => true, 'enctype'=>'multipart/form-data'])}}
            <h1>Edit Region</h1>
            <div class="form-group">
                Title {{Form::text('name',$region->name, ['class'=>'form-control'])}} <br>
                {!! $errors->first('name','<p class="error">* :message</p>') !!}
            </div>
            <div class="form-group">
                Description {{Form::text('description',$region->description, ['class'=>'form-control'])}} <br>
                {!! $errors->first('description','<p class="error">* :message</p>') !!}
            </div>
            {{Form::submit('Desar', ['class'=>'btn btn-primary'])}}
            {{Form::close()}}
        </div>
    </div>
</div>
@endsection