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
  background:  url("images/constancia.jpg");
            background-size: cover;
            background-repeat: no-repeat;
     }
     .nombre {
  position:fixed !important;
  left: 90px;
  bottom: 515px;
  width: 560px;
  color: #005E79;
 /* border-style: solid;*/
  text-align: center;
  font-family: helvetica;
  font-weight: 500;
  z-index:-10 !important;
  }
</style>

</head>
<body style="text-align: justify;">
    <div class="nombre">
        {{ $medic->nombre }} {{ $medic->paterno }} {{ $medic->materno }}
    </div>
</body>
</html>
