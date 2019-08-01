@extends('layouts.backend')
@extends('layouts.css')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Article</h1>

            </div>
            <div class="col-md-12">
                <label><b>Fields with * are required </b></label> <br>
                {{Form::open(['url'=>route('articles.update',$article->id),'method'=>'PUT','class'=>'Form','files' => true, 'enctype'=>'multipart/form-data'])}}
                <div class="form-group">
                    <b>*</b> Title {{Form::text('title',$article->title,['class'=>'form-control'])}} <br>
                        {!! $errors->first('title','<p class="error">* :message</p>') !!}
                    <b>*</b> Description {{Form::text('description',$article->description,['class'=>'form-control'])}} <br>
                        {!! $errors->first('description','<p class="error">* :message</p>') !!}
                    <b>*</b> Body {{Form::textarea('body',$article->body,['class'=>'form-control'])}} <br>
                        {!! $errors->first('body','<p class="error">* :message</p>') !!}
                     Photo {{Form::file('photo')}}
                    @if($article->photo != null)
                    <img src="../../images/{{$article->photo}}"> 
                    @endif
                    <br>                   <br>
                    <b>*</b> Journalist 
                    <select name="user_id" class="custom-select">
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
                    @if(Auth::user()->user_type == 1)
                        <br><b>*</b> Featured <label id="help">(You need a photo first)</label>
                         <select id="featured" name="featured" class="custom-select" disabled>
                            <option value="0">No</option>
                            <option value="1">Featured</option>
                            <option value="2">Semi-featured</option>
                        </select> <br>
                    @endif
                    <div class="custom-control custom-switch">
                        @if($article->is_published == 0)
                            <input type="checkbox" class="custom-control-input" id="is_published" name="is_published">
                        @else
                            <input type="checkbox" class="custom-control-input" id="is_published" name="is_published" checked="checked">
                        @endif
                        <label class="custom-control-label" for="is_published">Published</label>
                    </div>
                    <br> Sections (You can choose multiple options with control+click)
                    <select name="sections[]" multiple class="custom-select">
                        @forelse($sections as $section)
                        <option value="{{$section->id}}">{{$section->name}}</option>
                        @empty
                        @endforelse
                        </select> <br>
                    <br> Regions (You can choose multiple options with control+click)
                        <select name="regions[]" multiple class="custom-select">
                        @forelse($regions as $region)
                            <option value="{{$region->id}}">{{$region->name}}</option>
                        @empty
                        @endforelse
                        </select> <br>

                    {{Form::submit('Send',['class'=>'btn btn-primary'])}}
                </div>
                {{Form::close()}}
            </div>
        </div>
</div>
@endsection
@section('jquery')
    <script>

        $(document).ready(function () {
            $('input[type="file"]').on("change",function () {
                if($(this).val() != null)
                {
                    $('#featured').prop("disabled",false)
                    $('#help').remove();
                }
            });
        });
    </script>
@endsection