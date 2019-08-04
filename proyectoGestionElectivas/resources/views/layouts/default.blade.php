<!doctype html>
<html>
<head>
    @include('includes.head')
    <link rel="stylesheet" type="text/css" href="/css/estilos.css">
</head>
<body>
        <div id="antorcha"></div>
        <div id="bandera"></div>
        <a href="http://www.unicauca.edu.co/" id="logoU"></a>
<div>

    <header class="header">
        @include('includes.header')
    </header>

    <div>

        @yield('content')

    </div>

    <footer class="footer">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>
