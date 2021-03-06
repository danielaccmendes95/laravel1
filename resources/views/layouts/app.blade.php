<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Gestão de Clínica') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        @include('inc.navbar')
        
        @if(Request::is('/home'))
            @include('inc.showcase')
        @endif

         @if(Request::is('/'))
            @include('inc.showcase')
        @endif

        <div class="row">
            <div class="col-md-4 col-lg-4">
                @guest
                    @yield('inc.sidebar')
                @else
                    @include('inc.sidebar')
                @endguest
            </div>

            <div class=" col-md-8 col-lg-8">
                @include('inc.messages')
                @yield('content')
            </div>

        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
