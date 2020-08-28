@extends('layouts.master')
@section('content')
<!-- CONTENT AREA -->
<div class="content-area">
    <!-- BREADCRUMBS -->
    <section class="page-section breadcrumbs text-left">
        <div class="container">
            <div class="page-header">
                <h1>{{ trans('sentence.car-listing-main-title') }}</h1>
            </div>
            @if (session('message'))
            <div class="text-success text-center">
                {{session('message')}}
            </div>
            @endif
            <ul class="breadcrumb ">
                <li><a href="/index">Home</a></li>
                {{-- <li><a href="#">Pages</a></li> --}}
                <li class="active"><a href="/car-listing">{{ trans('sentence.car-listing-main-title') }}</a></li>
                <li><a href="" ><i class="fas fa-align-justify fa-w-14 " ></i></a></li>
                <li><a href="/portfolio-alt"><i class="fas fa-th" style="color:#fbfbfb;background-color:#9ea6b1;padding:2px;"></i></a></li>
            </ul>
            <div class="clearfix text-center car-listing-category">
                <ul id="filtrable" class="filtrable clearfix ">
                    <li><a href="/car-listing/categories" data-filter="*" value="category_id">{{ trans('sentence.car-listing-data-filter-categories') }}</a></li>
                    <li><a href="/car-listing/brands" data-filter="*">{{ trans('sentence.car-listing-data-filter-brands') }}</a></li>
                    {{-- <li><a href="/car-listing/types" data-filter="">Tipo</a></li> --}}
                    <li><a href="/car-listing" data-filter="">{{ trans('sentence.car-listing-data-filter-all') }}</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- /BREADCRUMBS -->

<!-- PAGE WITH SIDEBAR -->
<section class="page-section with-sidebar sub-page">
    <div class="container">
        <div class="row">
            <!-- CONTENT -->
            <div class="col-md-9 content car-listing" id="content">
                @php $locale = session()->get('locale'); @endphp
                <!-- Car Listing -->
                @foreach ($cars as $car)
                <div class="thumbnail no-border no-padding thumbnail-car-card clearfix">
                    <div class="media car-listing-media col-md-4">
                        @foreach ($car->images as $image)
                        <a class="media-link" data-gal="prettyPhoto" href="{{url($image->image_name)}}">
                            <img src="{{url($image->image_name)}}" height="220" width="370" alt="auto"/>
                            <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                        </a>
                        @break;
                        @endforeach
                    </div>
                    <div class="caption">
                        <h4 class="caption-title car-listing-caption-title"><a href="{{url('/portfolio-single', $car->id)}}">{{$car->brand->brand_name}} {{$car->pattern->pattern_name}}</a></h4>
                        <h5 class="caption-title-sub">{{$car->category->category_car_name}}</h5>
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
                        <table class="table">
                            <tr>
                                <td><i class="fas fa-user-friends"></i> {{$car->passengerQuantity}}</td>
                                <td><i class="fa fa-suitcase-rolling &f5c1 fa-lg"></i> {{$car->luggageBigQuantity}}</td>
                                <td><i class="fa fa-suitcase-rolling &f5c1 fa-sm"></i> {{$car->luggageSmallQuantity}}</td>
                                <td><i class="fa fa-road"></i>/<i class="fas fa-gas-pump"> {{$car->km_x_lts}}</i></td>
                                <td class="tdgearbox"><img class="gearbox"src="assets\img\gearbox4.png" alt="" >&nbsp {{$car->transmission->transmission_name}}</td>
                               {{--  <td class="buttons"><a class="btn btn-theme" href="{{ route ('portfolio-single',$car['id']) }}">Vea más</a></td> --}}
                            </tr>
                        </table>
                    </div>
                </div>
                @endforeach

                <!-- /Car Listing -->
                <!-- Pagination -->
                {{-- <div class="pagination-wrapper"> --}}
                    {{-- <ul class="pagination"> --}}
                        {{-- {{ $cars->render() }} --}}
                    {{-- </ul> --}}
                {{-- </div> --}}
                <!-- /Pagination -->

            </div>
            <!-- /CONTENT -->

            <!-- SIDEBAR -->
            <aside class="col-md-3 sidebar" id="sidebar">
                <!-- widget -->
                @include('side-bar-contact-form')
                <!-- /widget -->
            </aside>
            <!-- /SIDEBAR -->

        </div>
    </div>
</section>
<!-- /PAGE WITH SIDEBAR -->

<!-- PAGE -->
{{-- @include('contact-dark') --}}
<!-- /PAGE -->
</div>
<!-- /CONTENT AREA -->
@endsection
