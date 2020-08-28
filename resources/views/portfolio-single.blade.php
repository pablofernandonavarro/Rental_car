@extends ('layouts.master')

@section('content')

    <!-- CONTENT AREA -->
    <div class="content-area">
        @php $locale = session()->get('locale'); @endphp
        <!-- BREADCRUMBS -->
        <section class="page-section breadcrumbs text-center">
            <div class="container">
                <div class="page-header">
                    <h1>Ficha del Vehículo</h1>
                </div>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="/car-listing">Flota</a></li>
                    <li class="active">Ficha</li>
                </ul>
            </div>
        </section>
        <!-- /BREADCRUMBS -->

        <!-- PAGE WITH SIDEBAR -->
        <section class="page-section sub-page">
            <div class="container">
{{--                 @php
                $car = \App\Car::find('id');
                dd($car->images);
                @endphp
 --}}                <div class="row">
                    <div class="col-lg-8 col-md-7 col-sm-12 project-media">
                        <div class="img-carousel">
                            @foreach($car->images as $image)
                            {{-- @dd($car->images) --}}
                            <div><img src="{{url($image->image_name)}}" alt=""/></div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-5 col-sm-7">
                        <div class="project-overview">
                            <h3 class="block-title"><span>{{$car->pattern->pattern_name}}</span></h3>
                             @switch($locale)
                                @case('en')
                                    <div class="caption-text car-listing-caption-text">{{$car->text_en}}</div>
                                    @break
                                @case('pt')
                                    <div class="caption-text car-listing-caption-text">{{$car->text_pt}}</div>
                                    @break
                                @default
                                    <div class="caption-text car-listing-caption-text">{{$car->text_es}}</div>
                            @endswitch
                        </div>

                        <div class="project-details">
                            <h3 class="block-title"><span>Especificaciones</span></h3>
                            <dl class="dl-horizontal">
                                <dt>Pasajeros</dt>
                                <dd>{{$car->passengerQuantity}}</dd>
                                <dt>Equipaje Grande</dt>
                                <dd>{{$car->luggageBigQuantity}}</dd>
                                <dt>Equipaje Pequeño</dt>
                                <dd>{{$car->luggageSmallQuantity}}</dd>
                                <dt>Kilómetros x Litro</dt>
                                <dd>{{$car->km_x_lts}}</dd>
                                <dt>Transmisión</dt>
                                <dd>{{$car->transmission->transmission_name}}</dd>
                            </dl>
                        </div>
                    </div>

                </div>

                <hr class="page-divider"/>

                {{-- <div class="pager">
                    <a class="btn btn-theme btn-theme-transparent pull-right btn-icon-left" href="#"><i class="fa fa-angle-double-right"></i>Older</a>
                    <a class="btn btn-theme btn-theme-transparent pull-left btn-icon-right" href="#">Newer <i class="fa fa-angle-double-left"></i></a>
                </div> --}}


                <hr class="page-divider half"/>
                @include('contact-dark')

               {{--  <h2 class="block-title">Related project</h2>

                <div class="row thumbnails portfolio">
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail no-border no-padding">
                            <div class="media">
                                <img src="{{asset('assets/img/preview/portfolio/portfolio-x1.jpg')}}" alt="">
                                <div class="caption hovered">
                                    <div class="caption-wrapper div-table">
                                        <div class="caption-inner div-cell">
                                            <h3 class="caption-title"><a href="#">Project Title</a></h3>
                                            <p class="caption-category"><a href="#">Category</a>, <a href="#">Category 2</a></p>
                                            <p class="caption-buttons">
                                                <a href="assets/img/preview/portfolio/portfolio-x1-big.jpg" class="btn caption-zoom" data-gal="prettyPhoto"><i class="fa fa-search"></i></a>
                                                <a href="portfolio-single.html" class="btn caption-link"><i class="fa fa-link"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
 --}}
                </div>

            </div>
        </section>
        <!-- /PAGE WITH SIDEBAR -->

    </div>
    <!-- /CONTENT AREA -->

@endsection
