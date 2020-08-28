@extends('layouts.master')
@section('content')
    <!-- CONTENT AREA -->
    <div class="content-area">
        <!-- BREADCRUMBS -->
        <section class="page-section breadcrumbs text-left">
            <div class="container">
                <div class="page-header">
                    <h1>{{ trans('sentence.additionals-main-title') }}</h1>
                </div>
                <ul class="breadcrumb">
                    <li><a href="/index">Home</a></li>
                    {{-- <li><a href="#">Pages</a></li> --}}
                    <li class="active">{{ trans('sentence.additionals-second-title') }}</li>
                </ul>
            </div>
        </section>
        <!-- /BREADCRUMBS -->

        <!-- PAGE WITH SIDEBAR -->
        <section class="page-section with-sidebar sub-page">
            <div class="container">
                <div class="row">

                    <!-- SIDEBAR -->
                    <aside class="col-md-3 sidebar" id="sidebar">
                        <!-- widget -->
                        <div class="widget shadow widget-find-car">
                            {{-- <h4 class="widget-title">Find Best Rental Car</h4> --}}
                            {{-- <div class="widget-content"> --}}
                                <!-- Search form -->
                                @include('side-bar-contact-form')
                                <!-- /Search form -->
                            {{-- </div> --}}
                        </div>
                        <!-- /widget -->
                        <!-- widget price filter -->
                    </aside>
                    <!-- /SIDEBAR -->


                    <!-- CONTENT -->
                    <div class="col-md-9 content car-listing" id="content">

                        <!-- Car Listing -->
                        @forelse ($additionals as $add)
                        <div class="thumbnail no-border no-padding thumbnail-car-card clearfix">
                            <div class="media add-photo-div">
                                <a class="media-link add-photo" data-gal="prettyPhoto" href="{{url('/storage'.$add->additional->additional_image)}}">
                                    <img src="{{url('/storage'.$add->additional->additional_image)}}" alt=""/>
                                    <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                </a>
                            </div>
                            <div class="caption">
                                <h4 class="caption-title add-title"><a class="" href="#">{{$add->additional_name}}</a></h4>
                                <div class="caption-text">{{$add->additional_description}}</div>
                            </div>
                        </div>
                        @empty
                            <h4 class="caption-title"><a href="#">No se encontraron resultados</a></h4>
                        @endforelse


                            </div>
                        </div>

                        <!-- /Car Listing -->

                        <!-- Pagination -->

                        <div class="pagination-wrapper">
                            <ul class="pagination">
                                {{ $additionals->render() }}
                            </ul>
                        </div>

                        <!-- /Pagination -->

                    </div>
                    <!-- /CONTENT -->

                    <!-- SIDEBAR -->
                    <aside class="col-md-3 sidebar" id="sidebar">
                        <!-- widget -->


                        <!-- /widget -->
                    </aside>
                    <!-- /SIDEBAR -->

                </div>
            </div>
        </section>
        <!-- /PAGE WITH SIDEBAR -->
            {{-- @include('contact-dark') --}}
        <!-- PAGE CONTACT FORM DARK-->
        <!-- /PAGE -->

    </div>
    <!-- /CONTENT AREA -->

@endsection
