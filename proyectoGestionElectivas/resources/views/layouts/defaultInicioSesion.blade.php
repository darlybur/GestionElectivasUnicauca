<!doctype html>
<html>
<head>
    @include('includes.head')
    <link rel="stylesheet" type="text/css" href="/css/estilos.css">
     <!-- Fonts -->
     <link rel="dns-prefetch" href="//fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

     <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>


<div class="container">
        <div id="antorcha"></div>
        <div id="bandera"></div>
        <a href="http://www.unicauca.edu.co/" id="logoU"></a>


    <div>

        @yield('content')

    </div>

    <footer class="footer">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>
