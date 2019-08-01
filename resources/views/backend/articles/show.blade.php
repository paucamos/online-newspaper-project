@extends('layouts.backend')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Article {{$article->id}}</h1>
                <h2>Title : {{$article->title}} </h2><br>
                <h3><b>Description</b> : {{$article->description}} </h3><br>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <b>Body</b> : {{$article->body}} <br>
                </div>
                <div class="col-md-4">
                    <b>Photo</b> : <img src="../images/{{$article->photo}}" class="rounded float-right" style="width: 300px;"> <br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <b>User</b> : {{$user->name}} <br>
                    <b>Published</b> : @if($article->is_published == 0) No @else Yes @endif <br>
                    <b>Featured</b> : @if($article->featured == 0) No @elseif($article->featured == 1) Featured @else Semi-Featured @endif <br>
                    <b>Sections</b> : @foreach($articlesections as $articlesection) @if($articlesection->article_id == $article->id) @foreach($sections as $section) @if($section->id == $articlesection->section_id) @if($articlesection->id == $idarticlesections->id ) {{$section->name}}. @else {{$section->name}}, @endif @endif @endforeach @endif @endforeach <br>
                    <b>Regions</b> : @foreach($articleregions as $articleregion) @if($articleregion->article_id == $article->id) @foreach($regions as $region) @if($region->id == $articleregion->region_id) @if($articleregion->id == $idarticleregions->id ) {{$region->name}}. @else {{$region->name}}, @endif  @endif @endforeach @endif @endforeach <br>

                    <b>Created_at</b> : {{$article->created_at}} <br>
                    <b>Updated_at</b> : {{$article->updated_at}} <br>
                </div>
            </div>
        </div>
    </div>
@endsection