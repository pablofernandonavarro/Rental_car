<header class="header fixed">
  <div class="header-wrapper">
    <div class="container">

      <!-- Logo -->
      <div class="logo">
        <a href="/"><img src="{{asset ('assets/img/mdzlogo_1.gif')}}" alt="MendozaRental"/></a>
      </div>
      <!-- /Logo -->


      <!-- Mobile menu toggle button -->
      <a href="#" class="menu-toggle btn ripple-effect btn-theme-transparent"><i class="fa fa-bars"></i></a>
      <!-- /Mobile menu toggle button -->

      <!-- Navigation -->
      <nav class="navigation closed clearfix">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <!-- navigation menu -->
            <a href="#" class="menu-toggle-close btn"><i class="fa fa-times"></i></a>
            <ul class="nav sf-menu">

              <li><a href="/about">{{ trans('sentence.nav-about') }}</a></li>
              <li><a href="/car-listing">{{ trans('sentence.nav-car-listing') }}</a></li>
              <li><a href="/additionals">{{ trans('sentence.nav-additionals') }}</a></li>
              <li><a href="/requirements">{{ trans('sentence.nav-requirements') }}</a></li>
              <li><a href="/hotels">{{ trans('sentence.nav-hotels') }}</a></li>
              <li><a href="/faqs">{{ trans('sentence.nav-faqs') }}</a></li>
              <li><a href="/contact">{{ trans('sentence.nav-contact') }}</a></li>
              <li>
                <ul class="social-icons">
                  <li><a href="https://api.whatsapp.com/send?phone=+5491159808983" class="whatsapp"><i class="fa fa-whatsapp"></i></a></li>
                  <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                  {{-- <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li> --}}
                </ul>
              </li>
              <!-- Right Side Of Navbar -->
              {{-- <ul class="navbar-nav ml-auto"> --}}
                <!-- Authentication Links -->

              <!-- Bien, el asunto de las banderitas está pendiente, no puedo hacer funcionar el jquery, pero ya lo conseguiré !!!-->
                @php $locale = session()->get('locale'); @endphp
                <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    @switch($locale)
                        @case('pt')
                            <img src="{{asset('assets/img/brazil-flag-icon-32.png')}}" width="30px" height="20x"><span class="caret"></span>
                            @break
                        @case('en')
                            <img src="{{asset('assets/img/united-states-of-america-flag-icon-32.png')}}" width="30px" height="20x"><span class="caret"></span>
                            @break
                        @default
                            <img src="{{asset('assets/img/argentina-flag-icon-32.png')}}" width="30px" height="20x"><span class="caret"></span>
                    @endswitch
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/lang/es"><img src="{{asset('assets/img/argentina-flag-icon-32.png')}}" width="30px" height="20x"> Español</a>
                    <a class="dropdown-item" href="/lang/en"><img src="{{asset('assets/img/united-states-of-america-flag-icon-32.png')}}" width="30px" height="20x"> English</a>
                    <a class="dropdown-item" href="/lang/pt"><img src="{{asset('assets/img/brazil-flag-icon-32.png')}}" width="30px" height="20x"> Portugues</a>
                  </div>
                </li>
              {{-- </ul> --}}
            </ul>

            <!-- /navigation menu -->
          </div>
        </div>
        <!-- Add Scroll Bar -->
        <div class="swiper-scrollbar"></div>
      </nav>
      <!-- /Navigation -->
    </div>
  </div>
<script src="jquery-2.1.3.min.js" type="text/javascript">
  $(".dropdown-menu li a").click(function(){
  $(this).parents(".dropdown").find('.dropdown-item').html($(this).text() + ' <span class="caret"></span>');
  $(this).parents(".dropdown").find('.dropdown-item').val($(this).data('value'));
});
</script>
</header>
