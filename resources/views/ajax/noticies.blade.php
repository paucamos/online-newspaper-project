@forelse ($articles as $article)
    <div class="row article-container">
        <div class="col-lg-5 image-container">
            @if ($search)
                <img src="images/{{ $article->photo }}" alt="{{ $article->title }}">
            @else
                <img src="../../../images/{{ $article->photo }}" alt="{{ $article->title }}">
            @endif
        </div>
        <div class="col-lg-7 body-container">
            <h1>{{ $article->title }}</h1>
            <p class="date">{{ $article->created_at->format("d-m-Y") }}</p>
            <p>{{ str_limit($article->description, 500) }}</p>
            <button><a href="{{ route('showArticle',[$article->id]) }}">Continua llegint</a></button>
        </div>
    </div>
@empty
    <div class="row">
        <div class="col-lg-12 no-available-articles">
            <h2>No s'ha trobat cap notícia.</h2>
            <div class="go-back-link">
                <a href="<?php echo url()->previous() ?>">Torna enrere</a>
            </div>
        </div>
    </div>
@endforelse
