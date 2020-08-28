<header class="header fixed">
  <div class="header-wrapper">
    <div class="container">
      <!-- Logo -->
      <div class="logo">
        <a href="/"><img src="{{asset ('assets/img/mdzlogo_1.gif')}}" alt="MendozaRental"/></a>
        <!-- /Logo -->
        <!-- Lang-select-->
        <div class="lang-select is-sticky">
          <!-- navigation menu -->
          @php $locale = session()->get('locale'); @endphp
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            @switch($locale)
            @case('pt')
            <img  src="{{asset('assets/img/brazil-flag-icon-32.png')}}" width="30px" height="20px"><span class="caret"></span>
            @break
            @case('en')
            <img src="{{asset('assets/img/united-states-of-america-flag-icon-32.png')}}" width="30px" height="20px"><span class="caret"></span>
            @break
            @default
            <img src="{{asset('assets/img/argentina-flag-icon-32.png')}}" width="30px" height="20p  x"><span class="caret"></span>
            @endswitch
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown" aria-labelledby="navbarDropdown">
            <a class="dropdown-item dropdown-flag" href="/lang/es"><img src="{{asset('assets/img/argentina-flag-icon-32.png')}}" width="30px" height="20px"></a>
            <a class="dropdown-item" href="/lang/en"><img src="{{asset('assets/img/united-states-of-america-flag-icon-32.png')}}" width="30px" height="20px"></a>
            <a class="dropdown-item" href="/lang/pt"><img src="{{asset('assets/img/brazil-flag-icon-32.png')}}" width="30px" height="20px"></a>
          </div>
        </div>
      </div>
      <!-- /Lang-select-->

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
              <li><a href="/faqs">{{ trans('sentence.nav-faqs') }}</a></li>
              <li><a href="/contact">{{ trans('sentence.nav-contact') }}</a></li>
              <li>
                <ul class="social-icons">
                  <li><a href="https://api.whatsapp.com/send?phone=+5492615369809" class="whatsapp"><i class="fa fa-whatsapp"></i></a></li>
                </ul>
              </li>
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
