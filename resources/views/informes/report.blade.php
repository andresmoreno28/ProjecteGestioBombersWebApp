<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/report.css') }}">
</head>
<body>
	<div class="row">
		<div id="header" class="container-fluid">
			<img src="img/logo.jpg" height="90" width="165">
			<div id="inventari" class="container-fluid">INVENTARI</div>
			<div id="regio_parc_vehicle" class="container-fluid">{{$region->codi}}.{{$user->codi_parc}}.{{$vehicle->id}}</div>

			@php 
				$ldate = new DateTime('today');
				$ldate = date('d-m-Y')
			@endphp

			<div id="data" class="container-fluid"> {{ $ldate }}</div>
		</div>
	</div>
	<div class="row">
		<div id="eo" lass="container-fluid">Eoooo</div>
	</div>

</body>
</html>