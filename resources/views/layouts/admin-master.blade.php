<!DOCTYPE html>
<html>
    @include('layouts.partials.head')
    <body id="home" class="wide">
        <div class="wrapper">
            @include('layouts.partials.admin-nav')
            @yield('content')
        </div>
        @include('layouts.partials.scripts')
    </body>
</html>
