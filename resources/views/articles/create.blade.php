@extends('layouts.app')
@section('content')
<h1>Afegir Article</h1>
{{Form::open(['url'=>route('articles.store'),'class'=>'Form'])}}
    <?php
        $estil="";
        if($errors->First('title'))
        {
            $estil="background-color:red";
        }
    
    ?>
Title {{Form::text('title',old('title'),array('style'=>$estil))}} <br>
{!! $errors->first('title','<p>error</p><p>:message</p>') !!}
Description {{Form::text('description',old('description'))}} <br>
Body {{Form::text('body',old('body'))}} <br>
Photo {{Form::text('photo',old('photo'))}} <br>
User_ID {{Form::text('user_id',old('user_id'))}} <br>
Is_Published {{Form::text('is_published',old('is_published'))}} <br>
Featured {{Form::text('featured',old('featured'))}} <br>
{{Form::submit('Enviar')}}
{{Form::close()}}
@endsection