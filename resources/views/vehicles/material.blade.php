<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

  <body>
    <div class="col-12 border-top border-danger">
      <div class="row mx-2 mt-2">
        <div class="col-12">
          @foreach ($vehicle->containers as $contenidor)
      			<div id="contorn_contenidors" class="row">
      				<h3>{{ $contenidor->nom->nom }}</h3>
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
      </div>
    </div>



  </body>
</html>
