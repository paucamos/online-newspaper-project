@extends('layouts.frontend')

@section('content')
    <div class="container">
        <div id="article-header">
            <h1>{{ $article->title }}  </h1>
            <p> {{ $article->created_at }} </p>
        </div>
        <div id="article-sections-regions">
            @forelse ($article->sections as $section)
            <a href="{{ route('sections', ['section_id' => $section->id, 'section_name' => $section->name]) }}">
                    <h5 class="badge badge-primary sections">{{ $section->name }}</h5>
                </a>
            @empty
                
            @endforelse

            @forelse ($article->regions as $region)
                <a href="{{ route('regions', ['region_id' => $region->id, 'region_name' => $region->name]) }}">
                    <h5 class="badge badge-secondary regions">{{ $region->name }}</h5>
                </a>
            @empty
                
            @endforelse
            
        </div>
        <div id="image-container">
            <img src="{{ $article->photo }}" alt="{{ $article->title }}" class="article-image">
        </div>
        <div id="article-body">
            <p>{{ $article->body }}</p>
        </div>
    </div>
@endsection