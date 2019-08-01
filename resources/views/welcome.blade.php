@extends('layouts.frontend')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="title" id="featured">
                        <h3>Destacats</h3>
                </div>
                <div class="slider">
                    <div id="carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel" data-slide-to="1"></li>
                            <li data-target="#carousel" data-slide-to="2"></li>
                            <li data-target="#carousel" data-slide-to="3"></li>
                            <li data-target="#carousel" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner">
                            @forelse ($featured_articles as $article)
                                <div class="carousel-item @if ($loop->first) active @endif">
                                    <a href="{{ route('showArticle', [$article->id]) }}">
                                        <img class="d-block w-100" src="images/{{ $article->photo }}" alt="{{ $article->title }}">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h3>{{ $article->title }}</h3>
                                            <p>{{ $article->description }}</p>
                                        </div>
                                    </a>
                                </div>
                            @empty

                            @endforelse
                        </div>
                        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Seguent</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" id="semi-featured-col">
                <div class="title" id="semi-featured">
                    <h3>Semi destacats</h3>
                </div>
                <div id="semi-featured-rows-container">
                    <div class="row semi-featured-row">
                        @forelse ($semi_featured_articles_1 as $semi_article_1)
                            <div class="col-lg-6 news-block">
                                <a href="{{ route('showArticle', [$semi_article_1->id]) }}" class="news-link">
                                    <img src="images/{{ $semi_article_1->photo }}" alt="{{ $semi_article_1->title }}">
                                    <div class="news-caption">
                                        <h3>{{ $semi_article_1->title }}</h3>
                                        <p class="date">{{ $semi_article_1->created_at->format("d-m-Y") }}</p>
                                    </div>
                                </a>
                            </div>
                        @empty

                        @endforelse
                    </div>

                    <div class="row semi-featured-row">
                        @forelse ($semi_featured_articles_2 as $semi_article_2)
                            <div class="col-lg-6 news-block">
                                <a href="{{ route('showArticle', [$semi_article_2->id]) }}" class="news-link">
                                    <img src="images/{{ $semi_article_2->photo }}" alt="{{ $semi_article_2->title }}">
                                    <div class="news-caption">
                                        <h3>{{ $semi_article_2->title }}</h3>
                                        <p class="date">{{ $semi_article_2->created_at->format("d-m-Y") }}</p>
                                    </div>
                                </a>
                            </div>
                        @empty

                        @endforelse
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            @forelse ($secondary_news as $secondary_article)
                <div class="col-lg-6">
                    <a href="{{ route('showArticle', [$secondary_article->id]) }}">
                        <div id="secondary-news-image-container">
                            <img src="images/{{ $secondary_article->photo }}" alt="{{ $secondary_article->title }}">
                        </div>
                        <div id="secondary-news-text">
                            <h3>{{ $secondary_article->title }}</h3>
                            <p class="date">{{ $article->created_at->format("d-m-Y") }}</p>
                            <p>{{ $secondary_article->description }}</p>
                        </div>
                    </a>
                </div>
            @empty

            @endforelse
        </div>
        <div class="row">
            <div class="col-lg-6">
                @forelse ($recent_articles_1 as $recent_article_1)
                    <div class="older-news">
                        <a href="{{ route('showArticle', [$recent_article_1->id]) }}">
                            <div class="image-container">
                                <img src="images/{{ $recent_article_1->photo }}" alt="{{ $recent_article_1->title }}">
                            </div>
                            <div class="text-container">
                                <h4>{{ $recent_article_1->title }}</h4>
                                <p class="date">{{ $recent_article_1->created_at->format("d-m-Y") }}</p>
                            </div>
                        </a>
                    </div>
                @empty

                @endforelse
            </div>


            <div class="col-lg-6">
                @forelse ($recent_articles_2 as $recent_article_2)
                    <div class="older-news">
                        <a href="{{ route('showArticle', [$recent_article_2->id]) }}">
                            <div class="image-container">
                                <img src="images/{{ $recent_article_2->photo }}" alt="{{ $recent_article_2->title }}">
                            </div>
                            <div class="text-container">
                                <h4>{{ $recent_article_2->title }}</h4>
                                <p class="date">{{ $recent_article_2->created_at->format("d-m-Y") }}</p>
                            </div>
                        </a>
                    </div>
                @empty

                @endforelse
            </div>

        </div>
    </div>

@endsection
