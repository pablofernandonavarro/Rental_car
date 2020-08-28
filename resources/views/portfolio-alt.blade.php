@extends ('layouts.master')

@section('content')

    <!-- CONTENT AREA -->
    <div class="content-area">

        <!-- BREADCRUMBS -->
        <section class="page-section breadcrumbs text-center">
            <div class="container">
                <div class="page-header">
                    <h1>Nuestra Flota</h1>
                </div>
               <ul class="breadcrumb">
                    <li><a href="/index">Home</a></li>
                    {{-- <li><a href="#">Pages</a></li> --}}
                    <li class="active"><a href="/car-listing">{{ trans('sentence.car-listing-main-title') }}</a></li>
                    <li><a href="/car-listing" ><i class="fas fa-align-justify" style="color:#fbfbfb;background-color:#9ea6b1;padding:2px;" ></i></a></li>
                    <li><a href=""><i class="fas fa-th" ></i></a></li>
                </ul>            </div>
        </section>
        <!-- /BREADCRUMBS -->

        <!-- PAGE WITH SIDEBAR -->
        <section class="page-section sub-page">
            <div class="container">

                <div class="clearfix text-center car-listing-category   ">
                    <ul id="filtrable" class="filtrable clearfix">
                        <li class="all current"><a href="/portfolio-alt" data-filter="*">Todos</a></li>
                        <li class="dress"><a href="/portfolio-alt/categories" data-filter=".dress">Categorías</a></li>
                        <li class="accessories"><a href="/portfolio-alt/brands" data-filter=".accessories">Marcas</a></li>
                        {{-- <li class="miscellaneous"><a href="/portfolio-alt/types" data-filter=".miscellaneous">Tipos</a></li> --}}
                    </ul>
                </div>

            <div class="row thumbnails portfolio isotope isotope-items">
                {{-- ITEM --}}
                @foreach ($cars as $car)
                    <div class="col-md-3 col-sm-6 isotope-item dress ">
                        <div class="thumbnail no-border no-padding">
                            <div class="media">
                                @forelse ($car->images as $image)
                                    <img src="{{url($image->image_name)}}" alt="">
                                    @break;
                                @empty
                                    <img src="assets/img/preview/portfolio/portfolio-x1.jpg" alt="">
                                    @break;
                                @endforelse
                                <div class="caption hovered">
                                    <div class="caption-wrapper div-table">
                                        <div class="caption-inner div-cell">
                                            <p class="caption-buttons">
                                                <a href="{{url($car->images[0]->image_name)}}" class="btn caption-zoom" data-gal="prettyPhoto"><i class="fa fa-search"></i></a>
                                                <a href="{{url('/portfolio-single', $car->id)}}" class="btn caption-link"><i class="fa fa-link"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="caption-title"><a href="#">{{$car->brand->brand_name}} {{$car->pattern->pattern_name}}</a></h3>
                                <p class="caption-category"><a href="#">{{$car->category->category_car_name}}</a>, <a href="#"></a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- /ITEM -->
            </div>

                <!-- Pagination -->
                {{-- <div class="pagination-wrapper"> --}}
                    {{-- <ul class="pagination"> --}}
                        {{-- {{ $cars->render() }} --}}
                    {{-- </ul> --}}
                {{-- </div> --}}
                <!-- /Pagination -->

            </div>
        </section>
        <!-- /PAGE WITH SIDEBAR -->

    </div>
    <!-- /CONTENT AREA -->

@endsection
