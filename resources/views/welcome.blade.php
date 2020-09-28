<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jornadas Medicas</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>

         /*       .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
                flex-direction: row-reverse;
            }

            .logo img{
width: 100%;
            }
            .jornadas img{
                width: 10%;
            }

        */
            .container {
 /* max-width: 1200px;*/
  display: flex;
  align-items: center;
 /* -webkit-justify-content: center;*/
 justify-content: center;
  flex-direction: column;
  /* Safari */
  justify-content: center;
}

.item {
  padding: 10px;
}

img {
  width: 100%;
  height: auto;
  display: block;
}
.links > a {
                color: #636b6f;
                padding: 0 25px;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;

    font-size: 1vw;
            }
        </style>
    </head>
    <body>


         <div class="container">
            <div class="item"><img src="{{asset('images/portalmedicochopo.png')}}" alt=""></div>
        <div class="item">@if (Route::has('login'))
            <div class="links">
                @auth
                    <a href="{{ url('/home') }}">Inicio</a>

                @else
                    <a href="{{ route('login') }}">Descargue su constancia aquí</a>
                    @if (Route::has('medicos.create'))
                        <a href="{{ route('medicos.create') }}">Médico No Registrado</a>
                    @endif
                    <a title="Aviso de privacidad"
            href="https://www.chopo.com.mx/guadalajara/informacion-institucional#privacidad" target="_blanck">Aviso de privacidad</a>
                @endauth
            </div>
        @endif</div>
    </body>
</html>
