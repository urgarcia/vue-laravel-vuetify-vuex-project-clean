<html lang="{{ app()->getLocale() }}">

    <head>
        <title> @yield('title')</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{asset('css/app.css')}}" rel="stylesheet"> <!--Añadimos el css generado con webpack-->
    </head>
    <body>

        {{-- <div class="container"> --}}

            <div id="app" class="content"><!--La equita id debe ser app, como hemos visto en app.js-->
                {{-- <v-app> --}}
                    @yield('content')
                {{-- </v-app> --}}
            </div>
        {{-- </div> --}}

        {{-- APP VUE --}}
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
        <script src="{{asset('js/app.js')}}"></script> <!--Añadimos el js generado con webpack, donde se encuentra nuestro componente vuejs-->
    </body>
</html>








