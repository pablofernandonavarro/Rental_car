<!DOCTYPE html>
<html>
    @include('layouts.partials.head')
    <body id="home" class="wide">
        <div class="wrapper">
            @include('layouts.partials.header-nav')
            @if (session()->has('message'))
                <div class="conteiner-fluid text-center text-success bg-success z-index-3">
                    {{session('message')}}
                </div>        
            @endif
            @yield('content')
            @include('layouts.partials.footer')
        </div>
        @include('layouts.partials.scripts')
        @yield('scripts')
    </body>
</html>
