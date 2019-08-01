@extends('layouts.backend')
@extends('layouts.css')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Add Region</h1>
            {{Form::open(['url'=>route('regions.store'),'class'=>'Form'])}}
            <div class="form-group">
                Title {{Form::text('name',old('name'), ['class'=>'form-control'])}} <br>
                {!! $errors->first('name','<p class="error">* :message</p>') !!}
            </div>
            <div class="form-group">
                Description {{Form::text('description',old('description'), ['class'=>'form-control'])}} <br>
                {!! $errors->first('description','<p class="error">* :message</p>') !!}
            </div>
            {{Form::submit('Enviar', ['class'=>'btn btn-primary'])}}
            {{Form::close()}}
        </div>
    </div>
</div>
@endsection