@extends('layouts.frontend')

@section('content')
    <div class="container">
        <div class="articles">
            @include('ajax.noticies')
        </div>

        {{ $articles->links() }}
    </div>
@endsection