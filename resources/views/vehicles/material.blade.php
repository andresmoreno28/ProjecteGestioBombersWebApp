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
          <div class="row">
            <div class="col-12 mt-3">
              {{-- Warning --}}
              @if (session('warning'))
              <div class="alert alert-warning alert-dismissible fade show">
                {{ session('warning') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif

              {{-- Success --}}
              @if (session('success'))
              <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif
            </div>
          </div>
          <form action="{{ action('InventoryController@update', ['quantitat' => 'real[]','id' => 'id_cont_mat[]']) }}">
            @foreach ($vehicle->containers as $contenidor)
            @if ($contenidor->container_parent_id == null)
            <div id="contorn_contenidors" class="row">
              <h3 class="border-bottom border-danger">{{ $contenidor->nom->nom }}</h3>
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
                  @endif
                  @foreach ($materialsFromContainers as $material)

                  <tr>
                   <td>{{ $material->nom }} </td>
                   <td class="celles_a_centrar">{{$material->pivot->quantitat_prevista}}</td>
                   <td class="celles_a_centrar">
                    <input type="number" class="form-control" min="0" name="real[]">
                    <input type="hidden" name="id_cont_mat[]" value="{{ $material->pivot->id }}">
                  </td>
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
                <!-- Apartat de subcontenidors -->
                @if ($contenidor->containers()->count() > 0)
                @foreach ($contenidor->containers as $key => $contenidor_fill)
                <tr>

                  <td id="cont_fill">*  {{ $contenidor_fill->nom->nom }} ({{$contenidor_fill->materials->count()}})</td>
                </tr>

                @php 

                $materials_subcontenidors = $contenidor_fill->materials;

                @endphp
                <!-- Materials de subcontenidors -->
                @foreach ($materials_subcontenidors as $material)                 
                <tr>
                  <td>**    {{ $material->nom }}</td>
                  <td class="celles_a_centrar">{{$material->pivot->quantitat_prevista}}</td>
                  <td class="celles_a_centrar">
                    <input type="number" class="form-control" min="0" name="
                    real[]">
                    <input type="hidden" name="id_cont_mat[]" value="{{ $material->pivot->id }}">
                  </td>
                  <td class="celles_a_centrar">{{$material->referencia}}</td>
                  <td style="text-align:center;" class="celles_a_centrar subcont">
                    @if ($material->es_del_parc == 0)
                    <input style="text-align:center;" class="celles_a_centrar" type="checkbox" name="donat_de_baixa" value="1">
                    @else
                    <input style="text-align:center;" class="celles_a_centrar" type="checkbox" name="donat_de_baixa" value="1" checked>
                    @endif
                  </td>                 
                </tr>                    
                @endforeach
                @endforeach
                @endif
              </tbody>
            </table>
          </div>
          @endforeach
          <input type="submit" name="enviar" value="Enviar">
        </form>
      </div>
    </div>
  </div>
</body>
</html>
