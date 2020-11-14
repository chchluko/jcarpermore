<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>XXII Jornadas Carpermor</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
        .container {
             /* max-width: 1200px;*/
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
.item1{
    flex: 0 1 auto;
    align-self: stretch;
}
.item3, .item4, .item5, .item2{
    flex: 0 1 auto;
    align-self: flex-end;
    padding: 5px
    }
        img {
            width: 100%;
            height: auto;
            display: block;
        }
        @font-face {
            font-family: 'Gotham';
            src: url('{{asset('fonts/Gotham-Bold.woff')}}') format('woff'); /* Modern Browsers */
            font-weight: 300;
            font-style: normal;
        }
        .links > a {
            /*color: #00E3B6;*/
            color: white;
            font-family: 'Gotham';
            padding: 0 25px;
            letter-spacing: .1rem;
            text-decoration: none;
            /*   text-transform: uppercase;*/
            font-size: 1.5vw;
            }body{
                background-color: #00E3B6;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="item1"><img src="{{asset('images/top.jpg')}}" alt=""></div>
                @if (Route::has('login'))
                    @auth
                        <div class="item2 links"><a href="{{ url('/home') }}">Inicio</a></div>
                        @else
                            <div class="item3 links"><a href="{{ route('login') }}">Descargue su constancia aquí</a></div>
                        @if (Route::has('registro.create'))
                            <div class="item4 links"><a href="{{ route('registro.create') }}">Cliente No Registrado</a></div>
                        @endif
                    @endauth
                @endif
            <div class="item5 links">
                <a title="Aviso de privacidad"
                href="{{ url('/aviso_privacidad') }}">Aviso de privacidad</a>
            </div>
        </div>
    </body>
</html>
