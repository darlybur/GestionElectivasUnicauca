<!doctype html>
<html>
<head>
    @include('includes.head')
    <link rel="stylesheet" type="text/css" href="/css/estilos.css">
    <style>
            .box{
              position:absolute;
              width: 200px;
              left: 50%;
              margin-left: -100px;
            }
            .grid-container {
              display: grid;
              grid-gap: 30px 20px;
              grid-template-columns: 120px 80px 80px 80px 80px 80px 80px;
              grid-template-rows: 20px 20px 20px 20px 20px 20px 20px;
              padding: 40px;
              border: 50px;
              text-align: center;
            }

            .form-group
            {
                text-align: right;
            }
            .grid-item {
              background-color: white;
              border: 0px solid rgba(0, 0, 0, 0.8);
              border-radius:  10px;
              font-size: 30px;
              text-align: center;
              display:inline-block;
              vertical-align:middle;
              padding-top: 1px;
              padding-right: 1px;
              padding-bottom: 1px;
              padding-left: 1px;
              margin: auto;

            }
            .codigoElectiva
            {

            }
            .grid-item-inactivo {
              background-color: grey;
              border: 0px solid rgba(0, 0, 0, 0.8);
              border-radius:  10px ;
              font-size: 30px;
              text-align: center;
              display:inline-block;
              vertical-align:middle;
              padding-top: 1px;
              padding-right: 1px;
              padding-bottom: 1px;
              padding-left: 1px;
              margin: auto;

            }
            .grid-dia {
              /*padding: 10px;*/
              font-size: 30px;
              color: aliceblue;
              text-align: center;
            }

            .redBackground{
            background-color:firebrick;
            }

            h1 {
                font-size: 60%
            }

            #checkbox{
              cursor: pointer;
            }

            input[type=checkbox] {
                width: 80px;
                height: 25px;

                filter: alpha(opacity=50);
                opacity: 0.01;

            }

            $(document).ready(function() {
            $('.mdb-select').materialSelect();
            });

            </style>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

            <script>
                $(document).ready(function () {

                  $('input[id^="checkbox"]').click(function () {

                    if ($(this).prop('checked')) {
                        $(this).parent().addClass("redBackground");
                    }
                    else {
                      $(this).parent().removeClass("redBackground");
                    }
                  });

              });
              </script>
</head>
<body>
        <div id="antorcha"></div>
        <div id="bandera"></div>
        <a href="http://www.unicauca.edu.co/" id="logoU"></a>
<div>

    <header class="header">
        @include('includes.headerDocente')
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
