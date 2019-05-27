<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @yield('head')
</head>

<body class="grey lighten-3">
    
    @yield('header')
    
    <!--Main layout-->
    
    <main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">
        @yield('content')
        </div>
    </main>
    <!--/Main layout-->

    <!-- SCRIPTS -->
    @yield('include_scripts')
    
    @yield('home_scripts')
</body></html>