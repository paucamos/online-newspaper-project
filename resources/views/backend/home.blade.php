@extends('layouts.frontend')
@section('content')
    <div class="container">
        <div class="row">
            <div class="article">
                <h3>Articles:</h3>
                {{$numArticles}}
            </div>
            <div class="article">
                <h3>Seccions:</h3>
                {{$numSections}}
            </div>
            <div class="article">
                <h3>Regions:</h3>
                {{$numRegions}}
            </div>
            <div class="article">
                <h3>Periodistes:</h3>
                {{$numPeriodistes}}
            </div>
        </div>
    </div>
@endsection