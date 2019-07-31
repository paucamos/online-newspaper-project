@forelse ($articles as $article)
    <div class="row article-container">
        <div class="col-lg-5 image-container">
            <img src="../{{ $article->photo }}" alt="{{ $article->title }}">
        </div>
        <div class="col-lg-7 body-container">
            <h1>{{ $article->title }}</h1>
            <p class="date">{{ $article->created_at }}</p>
            <p>{{ str_limit($article->description, 500) }}</p>
            <button><a href="{{ route('showArticle',[$article->id]) }}">Continua llegint</a></button>
        </div>
    </div>
@empty
    <div class="row">
        <h2>No hi han noticies disponibles.</h2>
    </div>
@endforelse
        