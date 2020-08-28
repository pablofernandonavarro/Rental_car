@extends('layouts.master')

@section('content')

    <!-- CONTENT AREA -->
    <div class="content-area">

        <!-- BREADCRUMBS -->
        <section class="page-section breadcrumbs text-center">
            <div class="container">
                <div class="page-header">
                    <h1>Car Listing</h1>
                </div>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">List Car</li>
                </ul>
            </div>
        </section>
        <!-- /BREADCRUMBS -->

        <!-- PAGE -->
        <section class="page-section">
            <div class="container">

                <h2 class="section-title"><span>Section Title</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sagittis blandit elementum. Nullam volutpat vestibulum molestie. Duis ac sapien consequat, sollicitudin diam vitae, fringilla lectus. Fusce sit amet finibus tellus. Fusce varius ligula id mi dictum, iaculis gravida mauris eleifend. Praesent viverra mi elementum nulla varius, et luctus nisl tincidunt. Phasellus ullamcorper placerat magna ut varius. Vivamus et ipsum molestie leo bibendum congue vitae mattis leo. Sed id tristique nisi. Maecenas at odio efficitur, mattis sapien ac, vehicula augue. Suspendisse varius vulputate imperdiet. Quisque iaculis lobortis erat. Sed vitae tincidunt elit. Aliquam ultricies lacus id placerat porttitor. Nulla facilisi.</p>
                <hr class="page-divider small"/>
                <div class="row">
                    <div class="col-md-4">
                        <h2 class="block-title">Block Title</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sagittis blandit elementum. Nullam volutpat vestibulum molestie. Duis ac sapien consequat, sollicitudin diam vitae, fringilla lectus.</p>
                    </div>
                    <div class="col-md-4">
                        <h2 class="block-title">Block Title</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sagittis blandit elementum. Nullam volutpat vestibulum molestie. Duis ac sapien consequat, sollicitudin diam vitae, fringilla lectus.</p>
                    </div>
                    <div class="col-md-4">
                        <h2 class="block-title">Block Title</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sagittis blandit elementum. Nullam volutpat vestibulum molestie. Duis ac sapien consequat, sollicitudin diam vitae, fringilla lectus.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <h2 class="block-title">Text align</h2>
                        <p class="text-right">Left aligned text.</p>
                        <p class="text-center">Center aligned text.</p>
                        <p class="text-left">Right aligned text.</p>
                    </div>
                </div>

            </div>
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->
        <section class="page-section light">
            <div class="container">

                <h2 class="section-title"><span>Heading</span></h2>
                <div class="row">
                    <div class="col-md-6">
                        <h1>h1. Bootstrap heading <small>Secondary text</small></h1>
                        <h2>h2. Bootstrap heading <small>Secondary text</small></h2>
                        <h3>h3. Bootstrap heading <small>Secondary text</small></h3>
                        <h4>h4. Bootstrap heading <small>Secondary text</small></h4>
                        <h5>h5. Bootstrap heading <small>Secondary text</small></h5>
                        <h6>h6. Bootstrap heading <small>Secondary text</small></h6>
                    </div>
                    <div class="col-md-6">
                        <h1>h1. Bootstrap heading</h1>
                        <h2>h2. Bootstrap heading</h2>
                        <h3>h3. Bootstrap heading</h3>
                        <h4>h4. Bootstrap heading</h4>
                        <h5>h5. Bootstrap heading</h5>
                        <h6>h6. Bootstrap heading</h6>
                    </div>
                </div>

            </div>
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->
        <section class="page-section">
            <div class="container">

                <h2 class="section-title"><span>Blockquote</span></h2>
                <div class="row">
                    <div class="col-sm-6">
                        <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                        </blockquote>
                    </div>
                    <div class="col-sm-6">
                        <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        </blockquote>
                    </div>
                </div>

            </div>
        </section>
        <!-- /PAGE -->

    </div>
    <!-- /CONTENT AREA -->

  @endsection
