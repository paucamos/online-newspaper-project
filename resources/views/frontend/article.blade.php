@extends('layouts.frontend')

@section('content')
    <div class="container">
        <div id="article-header">
            <h1>{{ $article->title }}  </h1>
            <p> {{ $article->created_at }} </p>
        </div>
        <div id="article-sections-regions">
            <a href="">
                <h5 class="badge badge-primary sections">Política</h5>
            </a>
            <a href="">
                <h5 class="badge badge-secondary regions">Girona</h5>
            </a>
            {{-- @forelse ($article->sections as $section)
                <h5>{{ $section->name }}</h5>
            @empty
                <p></p>
            @endforelse

            @forelse ($article->regions as $region)
                <h5>{{ $region->name }}</h5>
            @empty
                <p></p>
            @endforelse
             --}}
        </div>
        <div id="image-container">
            <img src="{{ $article->photo }}" alt="{{ $article->title }}" class="article-image">
        </div>
        <div id="article-body">
            <p>{{ $article->body }}</p>
        </div>
    </div>
@endsection