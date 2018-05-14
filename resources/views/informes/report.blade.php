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
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <!-- Styles -->
	<style type="text/css">
			body {
		margin: 0 auto;
		width: 90%;
	}

	#header {
		height: 100px;
		 border: 1px solid red; 
		top: 0px;
		left: 0px;
		right: 0px;
		margin: 30px;
		overflow: auto;
	}

	#eo {
		margin-top: 50px;
		 border:2px solid green; 
		width: 100%;
	}

	#semicontainer1 {
		width: 20%;
		border: 2px solid blue;
		float: left;
	}

	#semicontainer2 {
		width: 79%;
		border: 2px solid green;
		float: right;
	}

	#inventari {
		width: 11.1%;
		border: 3px solid black;
		/*margin-top: -60px;*/
		/*margin-left: 200px;*/
		font-size: 22px;
		/*position: absolute;*/
		text-align: center;
		border-collapse: collapse;
		float: right;
	}

	#regio_parc_vehicle {
		width: 11.1%;
		border: 3px solid black;
		/*margin-top: -60px;*/
		/*margin-left: 300px;*/
		font-size: 22px;
		position: absolute;
		text-align: center;
		border-collapse: collapse;
		float: right;
	}

	#data {
		width: 11.1%;
		border: 3px solid black;
		/*margin-top: -60px;*/
		/*margin-left: 400px;*/
		font-size: 22px;
		position: absolute;
		text-align: center;
		border-collapse: collapse;
		float: right;
	}

	.celles_a_centrar {
		text-align: center;
	}

	#contorn_contenidors {
		text-align: center;
		border: 3px solid black;
		border-collapse: collapse
		margin-top: 20px;
		margin-bottom: 20px;
		margin-left: 10px;
		padding-left: 20px;
		width: 30%;
		page-break-inside: auto;
	}

</style>
</head>
<body>
	<div id="header" class="container-fluid">
		<div id="semicontainer1">
			<img src="img/logo.jpg" height="90" width="165">
		</div>
		<div id="semicontainer2">
			<div id="inventari">INVENTARI</div>
			<div id="regio_parc_vehicle">{{$region->codi}}.{{$user->codi_parc}}.{{$vehicle->codi}}</div>

			@php 
				$ldate = new DateTime('today');
				$ldate = date('d-m-Y')
			@endphp

			<div id="data"> {{ $ldate }}</div>
		</div>
	</div>
		<div id="eo" class="container-fluid"> 

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
				      		@php 
				        	
				        		$materialsFromContainers = $contenidor->materials;
				        	
			        		@endphp

				        	@foreach ($materialsFromContainers as $material)
				        <tr>


					          <td>{{ $material->nom }} </td>
					          <td class="celles_a_centrar">{{$material->quantitat_prevista}}</td>
					          <td class="celles_a_centrar">{{$material->quantitat}}</td>
					          <td class="celles_a_centrar">{{$material->referencia}}</td>
					          <td class="celles_a_centrar">				    
					          	@if ($material->es_del_parc == 0)
		                    		<input class="celles_a_centrar" type="checkbox" name="donat_de_baixa" value="1">
		                    	@else
		                    		<input class="celles_a_centrar" type="checkbox" name="donat_de_baixa" value="1" checked>
		                    	@endif
		                  	
					          </td>					        
				        </tr>
				        @endforeach  
				      </tbody>
				  </table>
				</div> 
		@endforeach
		</div>

</body>
</html>