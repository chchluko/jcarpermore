<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Constacncia</title>
<style type="text/css" media="screen">
html {
	margin: 0pt 0pt;
}
/*@font-face {
    font-family: 'Gotham';
    src: url('GothamBook.ttf');
    font-weight: 300;
   font-style: normal;
     }*/
body {
  color: #001028;
  background:  url("images/constancia072022.jpg");
            background-size: cover;
            background-repeat: no-repeat;
     }
     .nombre {
  position:fixed !important;
  left: 145px;
  bottom: 465px;
  width: 800px;
  color: #737373;
  /*border-style: solid;*/
  text-align: center;
  font-family: helvetica;
  font-weight: 500;
  z-index:-10 !important;
  font-size: 1.7em;
  }

</style>

</head>
<body style="text-align: justify;">
    <div class="nombre" @if (strlen($medic->nombre) >= 25)
        style="bottom: 435px"
    @endif>
        {{ $medic->paterno }} {{ $medic->materno }} {{ $medic->nombre }}
    </div>
</body>
</html>
