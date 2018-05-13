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
			<div id="regio_parc_vehicle" class="container-fluid">{{$region->codi}}.{{$user->codi_parc}}.{{$vehicle->codi}}</div>

			@php 
				$ldate = new DateTime('today');
				$ldate = date('d-m-Y')
			@endphp

			<div id="data" class="container-fluid"> {{ $ldate }}</div>
		</div>
	</div>
	<div class="row">
		<div id="eo" lass="container-fluid"> 

		@foreach ($contenidors as $contenidor)
			<div id="contorn_contenidors" class="row"> 
				{{ $contenidor->nom->nom }}
			</div>

				 <div class="table-responsive">
				  <table class="table">
				    <thead>
				        <tr>
				          <th>MATERIAL</th>
				          <th class="celles_a_centrar">PREVIST</th>
				          <th class="celles_a_centrar">REAL</th>
				          <th class="celles_a_centrar">REFERENCIA</th>
				          <th class="celles_a_centrar">MATERIAL PARC</th>
				        </tr>
				      </thead>
				      <tbody>
				        <tr>
				        	
				        	@foreach ($contenidor->material as $material)
				        	@dd($contenidor->material->nom)
					          <td>{{ $material->nom }} </td>
					          <td class="celles_a_centrar">{{$material->quantitat_prevista}}</td>
					          <td class="celles_a_centrar">{{$material->quantitat}}</td>
					          <td class="celles_a_centrar">*</td>
					          <td class="celles_a_centrar">				    

		                    	<input class="celles_a_centrar" type="checkbox" name="donat_de_baixa" value="1">
		                  	
					          </td>
					        @endforeach  
				        </tr>
				      </tbody>
				  </table>
				</div> 
		@endforeach
		</div>
	</div>

</body>
</html>