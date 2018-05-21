<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Reserva de auditorios y gestion de eventos</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>

            
            html, body {
                background-image: url("https://upload.wikimedia.org/wikipedia/commons/a/a9/Desarrollo_y_progreso.JPG");
                background-repeat: no-repeat;
                font-family: Georgia, 'Times New Roman', Times, serif;
                font-weight: 100%;
                width: 100%;
                height: 100%;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }
            body{
                background-size: cover;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
                
            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color:black;
                padding: 0 25px;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: blanchedalmond;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Ingresar</a>
                        <a href="{{ route('register') }}">Registrarse</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <h6>Reserva De Auditoríos.</h6>
                </div>

                <div class="links">
                    
                    <a href="/acercaDe">Desarrolladores</a>                    
                </div>
            </div>
        </div>
    </body>
</html>
