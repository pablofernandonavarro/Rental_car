@extends('layouts.master')
@section('content')

    <!-- CONTENT AREA -->
    <div class="content-area">

        <!-- BREADCRUMBS -->
        <section class="page-section breadcrumbs text-left">
            <div class="container">
                <div class="page-header">
                    <h1>FAQS</h1>
                </div>
                <ul class="breadcrumb">
                    <li><a href="/index">Home</a></li>
                    {{-- <li><a href="#">Pages</a></li> --}}
                    <li class="active">FAQS</li>
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
                    <!-- widget search -->
                    {{-- <div class="widget shadow">
                        <div class="widget-search">
                            <input class="form-control" type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div> --}}
                    <!-- /widget search -->
                    <!-- widget car categories -->


                    <div class="widget shadow car-categories">
                        <h4 class="widget-title">{{ trans('sentence.faqs-category') }}</h4>
                        <div class="widget-content">
                            <ul>
                                @foreach ($category_faqs as $category)
                                <li>
                                    <a href="/faqs/{{$category->id}}">{{$category->category_faq_name}}</a>
                                </li>
                                @endforeach
                                <li><a href="/faqs">{{ trans('sentence.categories-all') }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /widget car categories -->
                    </aside>
                    <!-- /SIDEBAR -->

                    <!-- CONTENT -->
                    <div class="col-md-9 content" id="content">

                        <!-- FAQ -->
                        {{-- @dd(session('locale')) --}}
                        @foreach ($faqs as $faq)
                        {{-- @if(session('locale') === $faq->lang_id) --}}
                        <div class="panel-group accordion" id="accordion" role="tablist" aria-multiselectable="true">
                            <!-- faq1 -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading{{$faq->id}}">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$faq->id}}" aria-expanded="false" aria-controls="collapse{{$faq->id}}">
                                            <p id="question">{{$faq->question}}</p><span class="dot"></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse{{$faq->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{$faq->id}}">
                                    <div class="panel-body">
                                        {{$faq->answer}}
                                    </div>
                                </div>
                            </div>
                            <!-- /faq1 -->
                        </div>
                        <!-- /FAQ -->
                        {{-- @endif --}}
                        @endforeach
                        {{-- <div class="pagination-wrapper">
                            <ul class="pagination">
                                {{ $faqs->render() }}
                            </ul>
                        </div>

 --}}                    </div>
                    <!-- /CONTENT -->

                </div>
            </div>
        </section>
        <!-- /PAGE WITH SIDEBAR -->

        <!-- PAGE -->
        @include('contact-dark')
        <!-- /PAGE -->

    </div>
    <!-- /CONTENT AREA -->
@endsection
