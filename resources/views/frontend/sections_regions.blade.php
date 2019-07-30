@extends('layouts.frontend')

@section('content')
    <div class="container">
        @forelse ($articles as $article)
            <div class="row article-container">
                <div class="col-lg-5 image-container">
                    <img src="{{ $article->photo }}" alt="{{ $article->title }}">
                </div>
                <div class="col-lg-7">
                    <h1>{{ $article->title }}</h1>
                    <p class="date">{{ $article->created_at }}</p>
                    <p>{{ $article->description }}</p>
                </div>
            </div>
        @empty
            <h2>No hi han noticies disponibles.</h2>
        @endforelse
    </div>
@endsection