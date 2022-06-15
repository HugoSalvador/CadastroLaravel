<html>
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Cadastro de Produtos</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <style>
            body {
                padding: 20px;
            }
            .navbar {
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
        <div class="container">
         @component('componente_navbar', [ "current" => $current ])
        @endcomponent
        <main role="main">
            @hasSection('body')
                @yield('body')
            @endif
        </main>
    </div>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    {{-- <script type="text/javascript" src="js/bootstrap.js"></script> --}}
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    @hasSection('javascript')
        @yield('javascript')
    @endif

    </body>
</html>
