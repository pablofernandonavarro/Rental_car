@extends('layouts.master')
@section('content')

<!-- CONTENT AREA -->
<div class="content-area">

  <!-- BREADCRUMBS -->
  <section class="page-section breadcrumbs text-center">
    <div class="container">
      <div class="page-header">
        <h1>{{ trans('sentence.contact-main-title')}}</h1>
      </div>
      <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        {{-- <li><a href="#">Pages</a></li> --}}
        <li class="active">{{ trans('sentence.contact-main-title')}}</li>
      </ul>
    </div>
  </section>
  <!-- /BREADCRUMBS -->

  <!-- PAGE -->
  <section class="page-section color page-section-contact">
    <div class="container">

      <div class="row">
        @php
        $owner_datas = \App\OwnerData::first();
        @endphp

        <div class="col-md-4">
          <div class="contact-info">

            <h2 class="block-title"><span>{{ trans('sentence.contact-main-title')}}</span></h2>

            <div class="media-list">
              <div class="media">
                <i class="pull-right fa fa-home"></i>
                <div class="media-body">
                  <strong>{{ trans('sentence.footer-address')}}:</strong><br>
                  {{$owner_datas->owner_address}}
                </div>
              </div>
              <div class="media">
                <i class="pull-right fa fa-phone"></i>
                <div class="media-body">
                  <strong>{{ trans('sentence.footer-phone')}}:</strong><br>
                  {{$owner_datas->owner_phone1}}
                </div>
              </div>
              <div class="media">
                <i class="pull-right fa fa-phone"></i>
                <div class="media-body">
                  <strong>{{ trans('sentence.footer-phone')}}:</strong><br>
                  {{$owner_datas->owner_phone2}}
                </div>
              </div>
              <div class="media">
                <i class="pull-right fa fa-envelope-o"></i>
                <div class="media-body">
                  <strong>Email:</strong><br>
                  <a href="mailto:{{$owner_datas->owner_mail1}}">{{$owner_datas->owner_mail1}}</a>
                </div>
              </div>
              <div class="media">
                <div class="media-body">
                  {{ trans('sentence.contact-senetence1')}}
                </div>
              </div>
                          </div>

</div>
</div>

<div class="col-md-8 text-right">

  <h2 class="block-title"><span>{{ trans('sentence.contact-second-title')}}</span></h2>

  <!-- Contact form -->
  <form name="contact-form" method="post" action="/savecontact" class="contact-form" >
    @method('POST')
    @csrf
    <div class="outer required">
      <div class="form-group af-inner">
        <label class="sr-only" for="name">{{ trans('sentence.contact-name')}}</label>
        <input
          type="text" name="name" id="name" placeholder="{{ trans('sentence.contact-name')}}" value="" size="30"
          data-toggle="tooltip" title="Name is required"
          class="form-control placeholder"
        />
      </div>
    </div>

    <div class="outer required">
      <div class="form-group af-inner">
        <label class="sr-only" for="email">Email</label>
        <input
          type="text" name="email" id="email" placeholder="Email" value="" size="30"
          data-toggle="tooltip" title="Email is required"
          class="form-control placeholder"
        />
      </div>
    </div>

    <div class="outer required">
      <div class="form-group af-inner">
        <label class="sr-only" for="subject">{{ trans('sentence.contact-subjet')}}</label>
        <input
          type="text" name="subject" id="subject" placeholder="{{ trans('sentence.contact-subjet')}}" value="" size="30"
          data-toggle="tooltip" title="Subject is required"
          class="form-control placeholder"
          />
      </div>
    </div>

    <div class="form-group af-inner">
      <label class="sr-only" for="input-message">{{ trans('sentence.contact-message')}}</label>
      <textarea
        name="message" id="input-message" placeholder="{{ trans('sentence.contact-message')}}" rows="4" cols="50"
        data-toggle="tooltip" title="Message is required"
        class="form-control placeholder"></textarea>
    </div>
    <div class="outer required">
      <div class="form-group af-inner">
        <input type="submit"  class="form-button form-button-submit btn btn-theme btn-theme-dark" value="{{ trans('sentence.contact-send')}}" />
      </div>
    </div>
  </form>
  <!-- /Contact form -->
</div>
</div>
</div>
</section>
<!-- /PAGE -->

<!-- PAGE -->
<section class="page-section no-padding">
  <div class="container full-width">

    <!-- Google map -->
    <div class="google-map">
      {{-- <div id="map-canvas"></div> --}}
      {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1675.1202121124088!2d-68.84373544192376!3d-32.89181104298887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x967e09b894bb3595%3A0xe3277fe867acd3c5!2sMendoza%20Rental!5e0!3m2!1ses!2sar!4v1588009553973!5m2!1ses!2sar" class="col-lg-12" width="" height=700px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
 --}}
    <a href="https://goo.gl/maps/AStHcA5EvjbNpDLS7"><img src="assets/img/Mapa.jpg" alt=""></a>
    </div>
    <!-- /Google map -->
  </div>
</section>
<!-- /PAGE -->

</div>
<!-- /CONTENT AREA -->
@endsection
