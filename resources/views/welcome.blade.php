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
                            <div class="carousel-item active">
                                <a href="">
                                    <img class="d-block w-100" src="trump.jpg" alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>Títol Notícia 1</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae voluptatum numquam reiciendis odio mollitia ipsa et laudantium, incidunt tempora, libero ratione enim qui sed velit modi earum recusandae vero voluptates!</p>
                                    </div>
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="">
                                    <img class="d-block w-100" src="..." alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>...</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae voluptatum numquam reiciendis odio mollitia ipsa et laudantium, incidunt tempora, libero ratione enim qui sed velit modi earum recusandae vero voluptates!</p>
                                    </div>
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="">
                                    <img class="d-block w-100" src="..." alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>Títol Notícia 1</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae voluptatum numquam reiciendis odio mollitia ipsa et laudantium, incidunt tempora, libero ratione enim qui sed velit modi earum recusandae vero voluptates!</p>
                                    </div>
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="">
                                    <img class="d-block w-100" src="..." alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>Títol Notícia 1</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae voluptatum numquam reiciendis odio mollitia ipsa et laudantium, incidunt tempora, libero ratione enim qui sed velit modi earum recusandae vero voluptates!</p>
                                    </div>
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="">
                                    <img class="d-block w-100" src="..." alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>Títol Notícia 1</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae voluptatum numquam reiciendis odio mollitia ipsa et laudantium, incidunt tempora, libero ratione enim qui sed velit modi earum recusandae vero voluptates!</p>
                                    </div>
                                </a>
                            </div>
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
                        <div class="col-lg-6 news-block">
                            <a href="#" class="news-link">
                                <img src="ney.jpg" alt="First slide">
                                <div class="news-caption">
                                    <h3>Neymar torna al Barça</h3>
                                    <p class="date">26/07/2019</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 news-block">
                            <a href="#" class="news-link">
                                <img src="trump.jpg" alt="First slide">
                                <div class="news-caption">
                                    <h3>Trump declara la guerra a Iran</h3>
                                    <p class="date">26/07/2019</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row semi-featured-row">
                        <div class="col-lg-6 news-block">
                            <a href="#" class="news-link">
                                <img src="ney.jpg" alt="First slide">
                                <div class="news-caption">
                                    <h3>Títol Notícia 1</h3>
                                    <p class="date">26/07/2019</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 news-block">
                            <a href="#" class="news-link">
                                <img src="ney.jpg" alt="First slide">
                                <div class="news-caption">
                                    <h3>Títol Notícia 1</h3>
                                    <p class="date">26/07/2019</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

        </div>
    </div>

    <footer>

    </footer>


@endsection
