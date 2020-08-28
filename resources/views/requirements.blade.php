@extends('layouts.master')
@section('content')
    <!-- CONTENT AREA -->
    <div class="content-area">
        <!-- BREADCRUMBS -->
        <section class="page-section breadcrumbs text-left">
            <div class="container">
                <div class="page-header">
                    <h1>{{ trans ('sentence.requirements-title') }}</h1>
                </div>
                <ul class="breadcrumb">
                    <li><a href="/index">Home</a></li>
                    <li class="active">{{ trans ('sentence.requirements-title') }}</li>
                </ul>
            </div>
        </section>
        <!-- /BREADCRUMBS -->
        <!-- CONTENT -->
        <section class="page-section with-sidebar sub-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 content" id="content">
                        <!-- Requirement-->
                        <div class="panel-group accordion" id="accordion" role="tablist" aria-multiselectable="true">
                            <!-- Requirement -->
                            @foreach($requirements as $requirement)
                                <div class="panel panel-default requirement">
                                    <div id="collapse1" class="panel-collapse collapse in " role="tabpanel" aria-labelledby="heading1">
                                        <div class="panel-body requirement-item">
                                            <i class="fa fa-chevron-circle-right &f5c1 "></i> {{ $requirement->requirement_name}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!-- /Requirement -->
                        </div>
                        <!-- /Requirement-->
                    </div>
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
