@extends('layouts.master')

@section('content')

<!-- CONTENT AREA -->
<div class="content-area">

  <!-- PAGE -->
  <section class="page-section no-padding slider">
    <div class="container full-width">
      <div class="main-slider">
        {{-- <div class="owl-carousel" id="main-slider"> --}}

          <!-- Slide 2 -->
          <div class="item slide2 ver2">
            <div class="caption">
              <div class="container">
                <div class="div-table">
                  <div class="div-cell">
                    <div class="caption-content">
                      <!-- Search form -->
                      @include('index-contact-form')
                      <!-- /Search form -->

                      <h2 class="caption-subtitle">{{ trans ('sentence.index-subtitle') }}<br/>{{ trans ('sentence.index-subtitle1') }}</h2>
                      <p class="caption-text">
                        {{ trans ('sentence.index-main-text')}}
                      </p>
                      <p class="caption-text">
                        <a class="btn btn-theme ripple-effect btn-theme-md" href="/car-listing">{{ trans ('sentence.index-see-cars')}}</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Slide 2 -->


          <!-- Slide 1 -->
        {{--   <div class="item slide1 ver1">
  <div class="caption">
              <div class="container">
                <div class="div-table">
                  <div class="div-cell">
                    <div class="caption-content">
                      <!-- Search form -->
                      @include('index-contact-form')
                      <!-- /Search form -->

                      <h2 class="caption-subtitle">{{ trans ('sentence.index-subtitle') }}<br/>{{ trans ('sentence.index-subtitle1') }}</h2>
                      <p class="caption-text">
                        {{ trans ('sentence.index-main-text')}}
                      </p>
                      <p class="caption-text">
                        <a class="btn btn-theme ripple-effect btn-theme-md" href="/car-listing">{{ trans ('sentence.index-see-cars')}}</a>
                      </p>
                    </div>
                  </div>
                </div> --}}
              {{-- </div> --}}
            </div>
         </div>
  </section>
  <!-- /PAGE -->

  <!-- PAGE -->
  {{-- <section class="page-section testimonials">
    <div class="container wow fadeInUp" data-wow-offset="70" data-wow-delay="500ms">
      <div class="testimonials-carousel">
        <div class="owl-carousel" id="testimonials">
          <div class="testimonial">
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object testimonial-avatar" src="assets/img/preview/avatars/testimonial-140x140x1.jpg" alt="Testimonial avatar">
                </a>
              </div>
              <div class="media-body">
                <div class="testimonial-text">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</div>
                <div class="testimonial-name">John Anthony Gibson <span class="testimonial-position">Co- founder at Rent It</span></div>
              </div>
            </div>
          </div>
          <div class="testimonial">
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object testimonial-avatar" src="assets/img/preview/avatars/testimonial-140x140x1.jpg" alt="Testimonial avatar">
                </a>
              </div>
              <div class="media-body">
                <div class="testimonial-text">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</div>
                <div class="testimonial-name">John Anthony Gibson <span class="testimonial-position">Co- founder at Rent It</span></div>
              </div>
            </div>
          </div>
          <div class="testimonial">
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object testimonial-avatar" src="assets/img/preview/avatars/testimonial-140x140x1.jpg" alt="Testimonial avatar">
                </a>
              </div>
              <div class="media-body">
                <div class="testimonial-text">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</div>
                <div class="testimonial-name">John Anthony Gibson <span class="testimonial-position">Co- founder at Rent It</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <!-- /PAGE -->

  <!-- PAGE -->
  <section class="page-section no-padding ">
    <div class="container full-width">
      <!-- Google map -->
      <div class="google-map">
  <a href="https://goo.gl/maps/AStHcA5EvjbNpDLS7"><img src="assets/img/Mapa.jpg" alt=""></a>
      </div>
      <!-- /Google map -->
    </div>
  </section>
<!-- /PAGE -->
</div>
<!-- /CONTENT AREA -->
@endsection
