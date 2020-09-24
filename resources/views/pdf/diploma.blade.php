<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
<style type="text/css" media="screen">

.clearfix:after {
	content: "";
	display: table;
	clear: both;
				}

a {
  color: #5D6975;
  text-decoration: underline;
  }

body {
  position: relative;
  width: 18cm;
  height: 29.7cm;
  margin: 0 auto;
  color: #001028;
  background: #FFFFFF;
  font-family: Arial, sans-serif;
  font-size: 14px;
  font-family: Arial;
     }

header {
  padding: 10px 0;
  margin-bottom: 30px;
}

#logo {
  text-align: center;
  margin-bottom: 10px;
}

#logo img {
  width: 90px;
}

h1 {
  border-top: 1px solid  #5D6975;
  border-bottom: 1px solid  #5D6975;
  color: #5D6975;
  font-size: 2.4em;
  line-height: 1.4em;
  font-weight: normal;
  text-align: center;
  margin: 0 0 20px 0;
  background: url(dimension.png);
}

#project {
  float: left;
}

#project span {
  color: #5D6975;
  text-align: right;
  width: 52px;
  margin-right: 10px;
  display: inline-block;
  font-size: 0.8em;
}

#company {
  float: right;
  text-align: right;
}

#project div,
#company div {
  white-space: nowrap;
}
table {
    border-collapse: collapse;
}
table, th, td {
   border: 1px solid black;
}
table.clean{
	border: 0px;
}
div.centerTable{
        text-align: center;
}
div.centerTable table {
       margin: 0 auto;
       text-align: left;
}
#notices .notice {
  color: #5D6975;
  font-size: 1.2em;
}

footer {
  color: #5D6975;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #C1CED9;
  padding: 8px 0;
  text-align: center;
}
</style>

</head>
<body style="text-align: justify;">
<h1>Diploma Jornadas Medicas 2020</h1>
<h1>Otorgado al Dr:</h1>
<h1>{{ $medic->nombre }} {{ $medic->paterno }} {{ $medic->materno }}</h1><br>
<h1>Con especialidad en:</h1>
<h1>{{ $medic->especialidad }}</h1>
</body>
</html>
