@extends('layouts.backend')
@section('content')
        <div class="contenidor">
            <div class="row">

                <div class="col-sm-6">
                    <a href="{{route('articles.index')}}">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Articles</h5>
                                <p class="card-text">{{$numArticles}} articles registrats.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6">
                    <a href="{{route('sections.index')}}">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Seccions</h5>
                                <p class="card-text">{{$numSections}} seccions registrades.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6">
                    <a href="{{route('regions.index')}}">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Regions</h5>
                                <p class="card-text">{{$numRegions}} regions registrades.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6">
                    <a href="{{route('journalists.index')}}">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Periodistes</h5>
                            <p class="card-text">{{$numPeriodistes}} periodistes registrats.</p>
                        </div>
                    </div>
                    </a>
                </div>

            </div>
        </div>
@endsection