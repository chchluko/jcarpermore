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
body {
  color: #001028;
  background:  url("images/constancia.jpg");
            background-size: cover;
            background-repeat: no-repeat;
     }
     .nombre {
  position:fixed !important;
  left: 100px;
  bottom: 535px;
  color: #005E79;
  z-index:-10 !important}
</style>

</head>
<body style="text-align: justify;">
    <div class="nombre">
        <h3>{{ $medic->nombre }} {{ $medic->paterno }} {{ $medic->materno }}</h3>
    </div>
</body>
</html>
