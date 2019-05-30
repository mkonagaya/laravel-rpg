<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @yield('head')
</head>

<body class="grey lighten-3">
    
    @yield('header')
    
    <!--Main layout-->
    
    
    <div class="container-fluid mt-5">
        <div class="row">
            @include('layouts.sidebar')
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                @yield('content')
            </main>
        </div>
    </div>
    <!--/Main layout-->

    <!-- SCRIPTS -->
    @include('layouts.include_scripts')
</body>
</html>