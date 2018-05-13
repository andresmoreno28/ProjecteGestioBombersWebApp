@extends('layouts.head')

@section('content')
<div class="container pl-0  mx-0 col-12" id="altura">
  @include('layouts.partials.econtainer')
<div class="col-8 py-4" id="altura">
  <div class="row d-none d-sm-block">
    <nav aria-label="breadcrumb bg-transparent">
      <ol class="breadcrumb bg-transparent">
        <li class="breadcrumb-item active underline-small" aria-current="page">Home</li>
      </ol>
    </nav>
  </div>
  <hr class="my-0 d-none d-sm-block">
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
  <!-- Boto per crear usuaris-->
  <div class="row">
      <div class="col-xs-12 col-2 my-3 clearfix">
        <select name="id"class="custom-select" id="inputGroupSelect07" required>
            <option selected disabled>Selecciona un parc</option>
          @forelse ($users as $user)
              <option value="{{$user['id']}}"> {{$user['name']}} </option>
          @empty

          @endforelse
        </select>
      </div>
  </div>
  <!--Fi BOTO-->
  <!--Taula Usuaris-->
  <div class="row">
    <div class="col-xs-12 col-12" id="taula">
        @if (count($vehicles))

          <table class="table table-striped table-bordered">
              <caption><small>Llista de vehicles.</small></caption>
              <thead class="thead-dark">
                  <tr style="border-bottom:3px solid #dc3545;">
                    <th>Codi vehicle</th>
                    <th>Marca model</th>
                    <th>Tipus de vehicle</th>
                    <th>Matricula</th>
                    <th>Asseguradora</th>
                    <th></th>
                </tr>
                </thead>
                <tbody id="cosTaula">
                @foreach($vehicles as $vehicle)
                    <tr >
                        <td>{{ $vehicle->matricula }}</td>
                        <td>{{   $vehicle->marca_model }}</td>
                        <td>
                          {{ $vehicle->type->nom }}
                        </td>
                        <td>
                          {{$vehicle->matricula}}
                        </td>
                        <td>{{$vehicle->insurers->nom}}</td>
                        <td class="text-right ">

                          <a class="btn btn-xs btn-default" target="_blank"
                             href="{{ action('VehicleController@qr', ['id'=>$vehicle->id]) }}">
                             <i class="fas fa-qrcode"></i>
                           </a>
                          <a class="btn btn-xs btn-default see" id="show" name="{{$vehicle->id}}"
                             >
                             <i class="far fa-eye"></i>
                           </a>
                          <a class="btn btn-xs btn-default"
                             href="{{ url('vehicle/'.$vehicle->id.'/edit') }}">
                             <i class="fas fa-pencil-alt"></i> Editar
                           </a>
                           <!-- Esborrar -->
                           <div class="d-inline-block">
                               <form action="{{ action('VehicleController@destroy', ['id' => $vehicle->id]) }}" method="DELETE" class="form-delete">
                                   @method('DELETE')
                                   @csrf
                                   <input type="hidden" name="nom" value="{{ $vehicle->matricula }}">
                                   <button type="submit" class="btn btn-xs btn-danger">
                                       <i class="fas fa-times"></i> Eliminar
                                   </button>
                               </form>
                           </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <div class="well">
                <h4>No hi han vehicles</h4>
            </div>
        @endif
    </div>
  </div>
  <!--Fi taula Usuaris-->
</div>
<!--Fi Contenedor central-->
<!--Contenedor dret-->
<div class="mr-0 col-2 py-4 d-none d-md-block pt-5" id="altura">
  <div class="row mr-1 mt-5">
    <iframe src="https://feed.mikle.com/widget/v2/77801/" height="402px" width="100%" class="fw-iframe" scrolling="no" frameborder="0"></iframe>
  </div>
</div>
</div>
<!--Fi Contenedor dret-->
</div>

<!-- ESBORRAR (modal) -->
<div class="modal fade" id="materialEsborrarModal" tabindex="-1" role="dialog" aria-labelledby="modalEsborrar" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <!-- Header -->
        <div class="modal-header">
            <h5 class="modal-title">Esborrar vehicle</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <!-- Body -->
        <div class="modal-body scroll">
            <!-- Avís -->
            <p><strong>Està segur/ra d'esborrar el vehicle?</strong><br>
            Aquesta acció és irreversible.</p>
            <!-- Info del material -->
            <div class="card">
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">Informació</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Codi vehicle:</dt>
                        <dd id="modalEsborrarNom" class="col-sm-8"></dd>
                    </dl>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel·lar</button>
            <button id="delete-btn" type="button" class="btn btn-danger"><i class="fas fa-times"></i> Eliminar</button>
        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- SHOW (modal) -->
<div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="modalShow" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <!-- Header -->
        <div class="modal-header">
            <h5 class="modal-title">Dades vehicle</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <!-- Body -->
        <div class="modal-body scroll">
            <!-- Info del material -->
            <div class="card">
                <div class="card-body">
                    <div class=" row">
                      <div class="col-6">
                        <dt >Matricula vehicle:</dt>
                        <dd  id="showMatricula"></dd>
                      </div>
                      <div class="col-6">
                        <dt>Data matriculacio:</dt>
                        <dd id="showdMatricula"></dd>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <dt>Nº de xasis:</dt>
                        <dd id="showdxasi"></dd>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-6">
                        <dt>Kilometres:</dt>
                        <dd id="showKm"></dd>
                      </div>
                      <div class="col-6">
                        <dt>Data kilometres:</dt>
                        <dd id="showdKm"></dd>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <dt>Data manteniment:</dt>
                        <dd id="showdM"></dd>
                      </div>
                      <div class="col-6">
                        <dt>Data proper manteniment:</dt>
                        <dd id="showdpm"></dd>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <dt>Data proper manteniment KM:</dt>
                        <dd id="showpmk"></dd>
                      </div>
                      <div class="col-6">
                        <dt>Hores de la bomba:</dt>
                        <dd id="showhb"></dd>
                      </div>
                    </div>
                    <hr>

                    <div class="row">
                      <div class="col-6">
                        <dt>Potencia del motor:</dt>
                        <dd id="showpot"></dd>
                      </div>
                      <div class="col-6">
                        <dt>Eslora:</dt>
                        <dd id="showeslo"></dd>
                      </div>
                      <div class="col-6">
                        <dt>Places:</dt>
                        <dd id="showpla"></dd>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <dt>Dimensio roda:</dt>
                        <dd id="showdro"></dd>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-6">
                        <dt>Data ITV:</dt>
                        <dd id="showitv"></dd>
                      </div>
                      <div class="col-6">
                        <dt>Propera ITV:</dt>
                        <dd id="showpitv"></dd>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <dt>Baixa prevista:</dt>
                        <dd id="showbapre"></dd>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-6">
                        <dt>Numero polisa:</dt>
                        <dd id="shownpol"></dd>
                      </div>
                      <div class="col-6">
                        <dt>Final renting:</dt>
                        <dd id="showfren"></dd>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tancar</button>

        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection
@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
$('table').on('click', '.form-delete', function(e) {
    // Evitar que continuï endavant el "submit" per fer que finalitzi, o no,
    // a través del modal.
    e.preventDefault();

    // Guardar el submit per permetre que continuï o no.
    var form = $(this);

    // Tractar dades del formulari per obtenir les dades dels inputs.
    var formData     = $(this).serializeArray();
    var formDataJson = JSON.stringify(formData);
    var formObject   = JSON.parse(formDataJson);
console.log(formObject);
    // Guardar les dades del formulari (per emplenar el modal).
    // Els índex [0] van segons l'ordre dels <imputs></imputs>.
    var Nom = formObject[2].value;

    $('#modalEsborrarNom').text(Nom);

    // Obrir el modal que serà emprat per eborrar el material (si es fa clic
    // al botó amb id="delete-btn").
    $('#materialEsborrarModal').modal().on('click', '#delete-btn', function() {
        form.submit();
    });
});
$('table').on('click', '.see', function(e) {
  e.preventDefault();
  var x= $(this).attr('name');
  $.ajax({
          type: 'get',
          url: "vehicle/"+x,
          dataType: 'json',
          contentType: 'application/json; charset=utf-8',
          success: function(content) {

            $('#showMatricula').text(content.vehicle.matricula);
            $('#showdMatricula').text(content.vehicle.matricula_data);
            $('#showKm').text(content.vehicle.km);
            $('#showdKm').text(content.vehicle.km_data);
            $('#showdM').text(content.vehicle.manteniment_data);
            $('#showdpm').text(content.vehicle.proper_manteniment_data);
            $('#showdxasi').text(content.vehicle.num_xasis);
            $('#showpmk').text(content.vehicle.proper_manteniment_km);
            $('#showhb').text(content.vehicle.hores_bomba);
            $('#showpot').text(content.vehicle.motor_potencia);
            $('#showeslo').text(content.vehicle.eslora);
            $('#showitv').text(content.vehicle.itv_vigor);
            $('#showpitv').text(content.vehicle.itv_propera);
            $('#showpla').text(content.vehicle.places);
            $('#showbapre').text(content.vehicle.baixa_prevista);
            $('#showdro').text(content.vehicle.roda_dimensio);
            $('#shownpol').text(content.vehicle.asseg_num_polissa);
            $('#showfren').text(content.vehicle.final_renting);



            $('#showModal').modal().on('click', '#show', function() {

            });
          },
          error: function(xhr, status, text) {
            console.log(xhr);
              $("#content").text(text);
          }
      });
});

$( "select" ).change(function() {

    $( "select option:selected" ).each(function() {
      var x= $(this).attr('value');
      if (typeof x !== 'undefined') {
        var taula;

        $.ajax({
                type: 'get',
                url: "home/vehicle/"+x,
                dataType: 'json',
                contentType: 'application/json; charset=utf-8',
                success: function(content) {

                  for(i=0; i<content.vehicles.length; i++){
                    if (i==0) {
                      taula="<tr>";
                    }else {
                      taula=taula+"<tr>";
                    }
                      taula=taula+"<td>"+content.vehicles[i].codi+"</td>";
                      taula=taula+"<td>"+content.vehicles[i].marca_model+"</td>";
                      taula=taula+"<td>"+content.vehicles[i].vehicle_type_id+"</td>";
                      taula=taula+"<td>"+content.vehicles[i].matricula+"</td>";
                      taula=taula+"<td>"+content.vehicles[i].vehicle_insurer_id+"</td>";
                      taula=taula+"<td class='text-right'><a class='btn btn-xs btn-default' target='_blank' href='vehicle/qr/"+content.vehicles[i].id+"><i class='fas fa-qrcode'><i class='fas fa-qrcode'></i></a>";
                      taula=taula+"<a class='btn btn-xs btn-default see' id='show' name="+content.vehicles[i].id+"><i class='far fa-eye'></i></i></a>";
                      taula=taula+"<a class='btn btn-xs btn-default' href='vehicle/"+content.vehicles[i].id+"/edit') }}'><i class='fas fa-pencil-alt'></i> Editar</i></a>";
                      //taula=taula+"<a class='btn btn-xs btn-danger' href='vehicle/"+content.vehicles[i].id+"/del') }}'><input type='hidden' name='nom' value="+content.vehicles[i].matricula+"><i class='fas fa-times'></i> Eliminar</a>";ç
                      taula=taula+"<div class='d-inline-block'><form action='vehicle/"+content.vehicles[i].id+"/del'class='form-delete'><input type='hidden' name='_method' value='DELETE'><input type='hidden' name='janose' value'hola'><input type='hidden' name='nom' value="+content.vehicles[i].matricula+"><button type='submit' class='btn btn-xs btn-danger'><i class='fas fa-times'></i> Eliminar</button></form></div>";
                      taula=taula+"</td></tr>";

                }
                $( "#cosTaula" ).empty();
                $("#cosTaula").html(taula)

                },
                error: function(xhr, status, text) {
                  console.log(xhr);
                    $("#content").text(text);
                }
            });
        }
    });
  })
  .trigger( "change" );
</script>
@endsection
