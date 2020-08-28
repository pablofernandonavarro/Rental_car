<header class="header fixed">
    <div class="header-wrapper">
        <div class="container">

            <!-- Logo -->
            <div class="logo">
                <a href="/"><img src="{{asset ('assets/img/mdzlogo_1.gif')}}" alt="Mendoza Rental"/></a>
            </div>
            <!-- /Logo -->


            <!-- Mobile menu toggle button -->
            <a href="#" class="menu-toggle btn ripple-effect btn-theme-transparent"><i class="fa fa-bars"></i></a>
            <!-- /Mobile menu toggle button -->

            <!-- Navigation -->

            <nav class="navigation closed clearfix" style="padding-right:3%;">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="#" class="menu-toggle-close btn"><i class="fa fa-times"></i></a>
                        <ul class="nav sf-menu">
                            <li><a href="">Autos</a>
                                <ul>
                                    <li><a href="{{route('car.index')}}">Listado de Autos</a></li>
                                    <li><a href="{{route('car.create')}}">Crear Auto</a></li>
                                    <li><a href="{{route('additional.index')}}">Adicionales</a></li>
                                    <li><a href="{{ route('brand.index') }}">Marcas</a></li>
                                    <li><a href="{{route('pattern.index') }}">Modelos</a></li>
                                    <li><a href="{{route('category-cars.index') }}">Categorias</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('requirement.index') }}">Requisitos</a></li>
                            {{-- <li><a href="{{ route('hotel.index') }}">Hoteles</a></li> --}}
                            <li><a href="{{ route('quotation.index') }}">Presupuestos</a></li>
                            <li><a href="{{ route('client.index') }}">Clientes</a></li>
                            <li><a href="{{ route('faq.index') }}">Faqs</a></li>
                            <li><a href="/profile">{{ Auth::user()->name  }}</a>
                                <ul>
                                    <li><a href="/profile">Perfil</a></li>
                                    <li><a href="/profile/#passwordreset">Cambiar contraseña</a></li>
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Cerrar sesion') }}</a></li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="swiper-scrollbar"></div>
            </nav>

            <!-- /Navigation -->

        </div>
    </div>

</header>
