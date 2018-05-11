@extends('layouts.head')

@section('content')

<div class="container pl-0  mx-0 col-12" id="altura">
@include('layouts.partials.econtainer')
    <!--Fi Contenedor esquerre-->
    <!--Contenedor central-->
    <div class="col-8 py-4" id="altura">
      <div class="row d-none d-sm-block">
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
        <nav aria-label="breadcrumb bg-transparent">
          <ol class="breadcrumb bg-transparent">
            <li class="breadcrumb-item" aria-current="page">Home</li>
            <li class="breadcrumb-item" aria-current="page">Vehicles</li>
            @if ($vehicle->exists)
              <li class="breadcrumb-item active" aria-current="page">Editar</li>
            @else
              <li class="breadcrumb-item active" aria-current="page">Crear</li>
            @endif

          </ol>
        </nav>
      </div>
      <hr class="mt-0 d-none d-sm-block pb-4">
      <!--Formulari-->
      <div class="card shadow-2 mt-5">
        <div class="card-body">
          <p class="text-danger"><small>Camps obligatoris <strong> * </strong>.</small></p>
          @if ($vehicle->exists)
            <h5 class="card-title">Editar vehicle</h5>
          @else
            <h5 class="card-title">Crear vehicle</h5>
          @endif


          {{-- Errors --}}
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          @if ($vehicle->exists)
            {{Form::open(['route' => ['vehicle.update',$vehicle->id], 'method' => 'PUT'])}}
          @else
            {{ Form::open(array('action' => 'VehicleController@store')) }}
          @endif
          @csrf
      <!--PRIMER BLOC DADES VEHICLE-->
          <h6>Dades del vehicle</h6>
          <div class="row">
            <div class="col-3 ">
              {{-- tipus vehicle --}}
              <div class="form-group">
                <label for="vehicle_type_id">Tipus de vehicle <span class="text-danger"><strong>*</strong></span></label>

                  <select name="vehicle_type_id"class="custom-select" id="inputGroupSelect02">
                    @if ($vehicle->exists)
                    @else
                      <option selected disabled>Selecciona una opció</option>
                    @endif
                    @forelse ($vTypes as $type)
                      @if ($vehicle->type['nom']==$type['nom'])
                        <option value="{{$type['id']}}" selected> {{$type['nom']}} </option>
                      @else
                        <option value="{{$type['id']}}">{{$type['nom']}}</option>
                      @endif
                    @empty

                    @endforelse
                  </select>
                <small id="vehicle_type_id" class="form-text text-muted">Tipus de vehicle.</small>
              </div>
            </div>
            <div class="col-4 ">
              {{-- Marca & Model --}}
              <div class="form-group">
                <label for="marca_model">Marca i model del vehicle <span class="text-danger"><strong>*</strong></span></label>
                <input type="text" name="marca_model" value="{{ $vehicle->marca_model or old('marca_model') }}" class="form-control" id="marca_model" aria-describedby="marca_model">
                <small id="marca_model" class="form-text text-muted">Marca i model del vehicle.</small>
              </div>
            </div>
            <div class="col-2 ">
              {{-- nplaces --}}
              <div class="form-group">
                <label for="places">Places vehicle</label>
                <input type="integer" name="places" value="{{ $vehicle->places or old('places') }}" class="form-control" id="places" aria-describedby="places">
                <small id="places" class="form-text text-muted">Numero de places de les que consta el vehicle.</small>
              </div>
            </div>
            <div class="col-3 ">
              {{-- cadenes --}}
              <div class="form-group">
                <label for="roda_cadenes">Cadenes <span class="text-danger"><strong>*</strong></span></label>
                  <select name="roda_cadenes"class="custom-select" id="inputGroupSelect04">
                    @if ($vehicle->exists)
                    @else
                      <option selected disabled>Selecciona una opció</option>
                      <option value="no">No</option>
                      <option value="textil">Textil</option>
                      <option value="metalica">Metalica</option>
                    @endif
                    @if ($vehicle['roda_cadenes']=='no')
                      <option selected value="no">No</option>
                      <option value="textil">Textil</option>
                      <option value="metalica">Metalica</option>
                    @elseif ($vehicle['roda_cadenes']=='textil')
                      <option  value="no">No</option>
                      <option selected value="textil">Textil</option>
                      <option value="metalica">Metalica</option>
                    @elseif ($vehicle['roda_cadenes']=='metalica')
                      <option  value="no">No</option>
                      <option value="textil">Textil</option>
                      <option selected value="metalica">Metalica</option>
                    @endif
                  </select>
                <small id="roda_cadenes" class="form-text text-muted">Indica si el vehicle te cadenes i el tipus.</small>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-4">
              {{-- Num xasis --}}
              <div class="form-group">
                <label for="num_xasis">Numero del xasis <span class="text-danger"><strong>*</strong></span></label>
                <input type="text" name="num_xasis" value="{{ $vehicle->num_xasis or old('num_xasis') }}" class="form-control" id="num_xasis" aria-describedby="num_xasis">
                <small id="num_xasis" class="form-text text-muted">Numero del xasis del vehicle.</small>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <hr>
            </div>
          </div>
    <!--FI PRIMER BLOC DADES VEHICLE-->
    <!--SEGON BLOC DADES MATRICULACIO-->
          <h6>Dades matriculació</h6>
          <div class="row">
            <div class="col-4">
              {{-- Name --}}
              <div class="form-group">
                <label for="userName">Matricula del vehicle <span class="text-danger"><strong>*</strong></span></label>
                <input type="text" name="matricula" value="{{ $vehicle->matricula or old('matricula') }}" class="form-control" id="matricula" aria-describedby="nameHelp" required>
                <small id="nameHelp" class="form-text text-muted">Matricula per la que es reconeix el vehicle.</small>
              </div>
            </div>
            <div class="col-4">
              {{-- Data de matriculació --}}
              <div class="form-group">
                <label for="matricula_dataHelp">Data de matriculació</label>
                @if ($vehicle->exists)
                  @if ($vehicle['matricula_data']==null)
                    <input type="date" name="matricula_data" value="" class="form-control" id="matricula_data" aria-describedby="matricula_dataHelp" >
                  @else
                    @php ($matricula_data=date('Y-m-d',strtotime($vehicle['matricula_data'])))
                    <input type="date" name="matricula_data" value="{{ $matricula_data or old('matricula_data') }}" class="form-control" id="matricula_data" aria-describedby="matricula_dataHelp" >
                  @endif
                @else
                  <input type="date" name="matricula_data" value="" class="form-control" id="matricula_data" aria-describedby="matricula_dataHelp" >
                @endif
                <small id="matricula_dataHelp" class="form-text text-muted">Data en la que és va matricular el vehicle.</small>
              </div>
            </div>
            <div class="col-4">
              {{-- Matricula tercera --}}
              <div class="form-group">
                <div class="col-12">
                  <label for="matricula_terceraHelp">Tercera matricula <span class="text-danger"><strong>*</strong></span></label>
                </div>
                <div class="col-12 my-2">
                  @if ($vehicle->exists)
                    @if ($vehicle->matricula_tercera==1)
                      <input type="checkbox" name="matricula_tercera" value="1" checked>
                    @else
                      <input type="checkbox" name="matricula_tercera" value="1" >
                    @endif

                  @else
                    <input type="checkbox" name="matricula_tercera" value="1">
                  @endif

                </div>
                <small id="matricula_terceraHelp" class="form-text text-muted">Tercera matricula que consta en el vehicle.</small>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <hr>
            </div>
          </div>
    <!--FI SEGON BLOC DADES MATRICULACIO-->
    <!--TERCER BLOC CARACTERISTIQUES TECNIQUES-->
        <h6>Caracteristiques tecniques</h6>
        <div class="row">
          <div class="col-4">
            {{-- Motor potencia --}}
            <div class="form-group">
              <label for="motor_potencia">Potencia del motor</label>
              <input type="integer" name="motor_potencia" value="{{ $vehicle->motor_potencia or old('motor_potencia') }}" class="form-control" id="motor_potencia" aria-describedby="motor_potencia">
              <small id="motor_potencia" class="form-text text-muted">Potencia de la que consta el motor del vehicle amb CV.</small>
            </div>
          </div>
          <div class="col-4">
            {{-- Dimensio roda --}}
            <div class="form-group">
              <label for="roda_dimensio">Dimensio rodes del vehicle</label>
              <input type="text" name="roda_dimensio" value="{{ $vehicle->roda_dimensio or old('roda_dimensio') }}" class="form-control" id="roda_dimensio" aria-describedby="roda_dimensio">
              <small id="roda_dimensio" class="form-text text-muted">Dimensio de les rodes del vehicle.</small>
            </div>
          </div>
          <div class="col-4">
            {{-- Eslora --}}
            <div class="form-group">
              <label for="eslora">Eslora del vehicle</label>
              <input type="integer" name="eslora" value="{{ $vehicle->eslora or old('eslora') }}" class="form-control" id="eslora" aria-describedby="eslora">
              <small id="eslora" class="form-text text-muted">En cas que estigueu inserint una embarcació indica la eslora.</small>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <hr>
          </div>
        </div>
  <!--FI tercer BLOC CARACTERISTIQUES TECNIQUES-->
  <!--QUART BLOC MANTENIMENT VEHICLE-->
      <h6>Manteniment vehicle</h6>
          <div class="row">
            <div class="col-4">
              {{-- KM --}}
              <div class="form-group">
                <label for="kmHelp">Kilometratje del vehicle</label>
                <input type="decimal" name="km" value="{{ $vehicle->km or old('km') }}" class="form-control" id="km" aria-describedby="kmHelp">
                <small id="kmHelp" class="form-text text-muted">Tercera matricula que consta en el vehicle.</small>
              </div>
            </div>
            <div class="col-4">
              {{-- Proper maneteniment KM --}}
              <div class="form-group">
                <label for="proper_maneteniment_km">Proper maneteniment KM</label>
                <input type="decimal" name="proper_maneteniment_km" value="{{ $vehicle->proper_manteniment_km or old('proper_maneteniment_km') }}" class="form-control" id="proper_maneteniment_km" aria-describedby="proper_maneteniment_km">
                <small id="proper_maneteniment_km" class="form-text text-muted">Kilometratje per al proper manteniment del vehicle.</small>
              </div>
            </div>
            <div class="col-4">
              {{-- Data kilometratje del vehicle--}}
              <div class="form-group">
                <label for="km_data">Data kilometratje del vehicle</label>
                @if ($vehicle->exists)
                  @if ($vehicle['km_data']==null)
                    <input type="date" name="km_data" value="" class="form-control" id="km_data" aria-describedby="km_dataHelp" >
                  @else
                    @php ($km_data=date('Y-m-d',strtotime($vehicle['km_data'])))
                    <input type="date" name="km_data" value="{{ $km_data or old('km_data') }}" class="form-control" id="km_data" aria-describedby="km_dataHelp">
                  @endif
                @else
                  <input type="date" name="km_data" value="" class="form-control" id="km_data" aria-describedby="km_dataHelp">
                @endif

                <small id="km_dataHelp" class="form-text text-muted">Data en la que es va enregistrar el kilometratje del vehicle.</small>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-4">
              {{-- Data manteniment --}}
              <div class="form-group">
                <label for="manteniment_data">Data manteniment</label>
                @if ($vehicle->exists)
                  @if ($vehicle['manteniment_data']==null)
                    <input type="date" name="manteniment_data" value="" class="form-control" id="manteniment_data" aria-describedby="manteniment_dataHelp" >
                  @else
                    @php ($manteniment_data=date('Y-m-d',strtotime($vehicle['manteniment_data'])))
                    <input type="date" name="manteniment_data" value="{{ $manteniment_data or old('manteniment_data') }}" class="form-control" id="manteniment_data" aria-describedby="manteniment_dataHelp">
                  @endif
                @else
                  <input type="date" name="manteniment_data" value="" class="form-control" id="manteniment_data" aria-describedby="km_dataHelp">
                @endif

                <small id="manteniment_data" class="form-text text-muted">Data en la que s'ha realitzat l'ultim manteniment del vehicle.</small>
              </div>
            </div>
            <div class="col-4">
              {{-- Data proper maneteniment --}}
              <div class="form-group">
                <label for="proper_maneteniment_data">Data proper maneteniment</label>
                  @if ($vehicle->exists)
                    @if ($vehicle['proper_maneteniment_data']==null)
                      <input type="date" name="proper_maneteniment_data" value="" class="form-control" id="proper_maneteniment_data" aria-describedby="proper_maneteniment_dataHelp" >
                    @else
                      @php ($proper_maneteniment_data=date('Y-m-d',strtotime($vehicle['proper_maneteniment_data'])))
                      <input type="date" name="proper_maneteniment_data" value="{{ $proper_maneteniment_data or old('proper_maneteniment_data') }}" class="form-control" id="proper_maneteniment_data" aria-describedby="proper_maneteniment_dataHelp">
                    @endif
                  @else
                    <input type="date" name="proper_maneteniment_data" value="" class="form-control" id="proper_maneteniment_data" aria-describedby="proper_maneteniment_dataHelp">
                  @endif
                <small id="proper_maneteniment_data" class="form-text text-muted">Data en la que s'ha de ralitzar el proper manteniment del vehicle.</small>
              </div>
            </div>
            <div class="col-4">
              {{-- Hores bomba --}}
              <div class="form-group">
                <label for="hores_bomba">Hores de la bomba</label>
                @if ($vehicle->exists)
                  @if ($vehicle['hores_bomba']==null)
                    <input type="integer" name="hores_bomba" value="" class="form-control" id="hores_bomba" aria-describedby="hores_bomba">
                  @else
                    @php ($hores_bomba=date('H:m',strtotime($vehicle['hores_bomba'])))
                    <input type="integer" name="hores_bomba" value="{{ $hores_bomba or old('hores_bomba') }}" class="form-control" id="hores_bomba" aria-describedby="hores_bomba">
                  @endif
                @else
                  <input type="integer" name="hores_bomba" value="" class="form-control" id="hores_bomba" aria-describedby="hores_bomba">
                @endif
                <small id="hores_bomba" class="form-text text-muted">Quantitat d'hores que ha estat treballant la bomba.</small>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              {{-- ITV vigor --}}
              <div class="form-group">
                <label for="itv_vigor">Data de la ITV</label>
                @if ($vehicle->exists)
                  @if ($vehicle['itv_vigor']==null)
                    <input type="date" name="itv_vigor" value="" class="form-control" id="itv_vigor" aria-describedby="itv_vigor">
                  @else
                    @php ($itv_vigor=date('Y-m-d',strtotime($vehicle['itv_vigor'])))
                    <input type="date" name="itv_vigor" value="{{ $itv_vigor or old('itv_vigor') }}" class="form-control" id="itv_vigor" aria-describedby="itv_vigor">
                  @endif
                @else
                  <input type="date" name="itv_vigor" value="" class="form-control" id="itv_vigor" aria-describedby="itv_vigor">
                @endif
                <small id="itv_vigor" class="form-text text-muted">Data en la que s'ha passat la ITV.</small>
              </div>
            </div>
            <div class="col-6">
              {{-- Propera ITV --}}
              <div class="form-group">
                <label for="itv_propera">Data de la propera ITV</label>
                @if ($vehicle->exists)
                  @if ($vehicle['itv_propera']==null)
                    <input type="date" name="itv_propera" value="" class="form-control" id="itv_propera" aria-describedby="itv_propera">
                  @else
                    @php ($itv_propera=date('Y-m-d',strtotime($vehicle['itv_propera'])))
                    <input type="date" name="itv_propera" value="{{ $itv_propera or old('itv_propera') }}" class="form-control" id="itv_propera" aria-describedby="itv_propera">
                  @endif
                @else
                  <input type="date" name="itv_propera" value="" class="form-control" id="itv_propera" aria-describedby="itv_propera">
                @endif
                <small id="itv_propera" class="form-text text-muted">Data en la que s'ha de passar la propera ITV.</small>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-4">
              {{-- Baixa prevista --}}
              <div class="form-group">
                <label for="baixa_prevista">Data prevista de baixa</label>
                @if ($vehicle->exists)
                  @if ($vehicle['baixa_prevista']==null)
                    <input type="date" name="baixa_prevista" value="" class="form-control" id="baixa_prevista" aria-describedby="baixa_prevista">
                  @else
                    @php ($baixa_prevista=date('Y-m-d',strtotime($vehicle['baixa_prevista'])))
                    <input type="date" name="baixa_prevista" value="{{ $baixa_prevista or old('baixa_prevista') }}" class="form-control" id="baixa_prevista" aria-describedby="baixa_prevista">
                  @endif
                @else
                  <input type="date" name="baixa_prevista" value="" class="form-control" id="baixa_prevista" aria-describedby="baixa_prevista">
                @endif
                <small id="baixa_prevista" class="form-text text-muted">Data en la que esta previst donar de baixa el vehicle.</small>
              </div>
            </div>
            <div class="col-4">
              {{-- donat de baixa --}}
              <div class="col-12">
                <label for="donat_de_baixa">Esta donat de baixa</label>
              </div>
              <div class="col-12 my-2">
                @if ($vehicle->exists)
                  @if ($vehicle->donat_de_baixa==1)
                    <input type="checkbox" name="donat_de_baixa" value="1" checked>
                  @else
                    <input type="checkbox" name="donat_de_baixa" value="1">
                  @endif

                @else
                  <input type="checkbox" name="donat_de_baixa" value="1">
                @endif

              </div>
              <small id="donat_de_baixa" class="form-text text-muted mt-3">Indica si el vehicle esta donat de baixa.</small>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <hr>
            </div>
          </div>
  <!--FI QUART BLOC MANTENIMENT VEHICLE-->
          <h6>Dades assegurança</h6>
          <div class="row">
            <div class="col-4">
              {{-- tipus assegurança --}}
              <div class="form-group">
                <label for="vehicle_insurer_id">Asseguradora <span class="text-danger"><strong>*</strong></span></label>
                  <select name="vehicle_insurer_id"class="custom-select" id="inputGroupSelect01">
                    @if ($vehicle->exists)
                    @else
                      <option selected disabled>Selecciona una opció</option>
                    @endif
                    @forelse ($asseguradores as $asseguradora)
                      @if ($vehicle->insurers['nom']==$asseguradora['nom'])
                        <option value="{{$asseguradora['id']}}" selected> {{$asseguradora['nom']}} </option>
                      @else
                      <option value="{{$asseguradora['id']}}">{{$asseguradora['nom']}}</option>
                      @endif
                    @empty

                    @endforelse
                  </select>
                <small id="vehicle_insurer_id" class="form-text text-muted">Asseguradora que gestiona el vehicle.</small>
              </div>
            </div>
            <div class="col-4">
              {{-- tipus assegurança --}}
              <div class="form-group">
                <label for="asseg_tipus">Tipus assegurança <span class="text-danger"><strong>*</strong></span></label>
                  <select name="asseg_tipus"class="custom-select" id="inputGroupSelect04">
                    @if ($vehicle->exists)
                    @else
                      <option selected disabled>Selecciona una opció</option>
                    @endif
                    @if ($vehicle['asseg_tipus']==0)
                      <option selected value="0">Tot risc</option>
                      <option value="3">Tercers</option>
                    @elseif ($vehicle['asseg_tipus']==3)
                      <option  value="0">Tot risc</option>
                      <option selected value="3">Tercers</option>
                    @endif
                  </select>
              </div>
            </div>
            <div class="col-4">
              {{-- propietari vehicle --}}
              <div class="form-group">
                <label for="vehicle_owner_id">Propietari del vehicle <span class="text-danger"><strong>*</strong></span></label>
                  <select name="vehicle_owner_id"class="custom-select" id="inputGroupSelect03">
                    @if ($vehicle->exists)
                    @else
                      <option selected disabled>Selecciona una opció</option>
                    @endif
                    @forelse ($vOwners as $owner)
                      @if ($vehicle->owner['nom']==$owner['nom'])
                        <option value="{{$owner['id']}}" selected> {{$owner['nom']}} </option>
                      @else
                      <option value="{{$owner['id']}}">{{$owner['nom']}}</option>
                      @endif
                    @empty
                    @endforelse
                  </select>
                <small id="vehicle_owner_id" class="form-text text-muted">Nom del propietari de vehicle.</small>
              </div>
            </div>
            <div class="col-4">
              {{-- Num polisa --}}
              <div class="form-group">
                <label for="asseg_num_polissa">Numero polisa del vehicle <span class="text-danger"><strong>*</strong></span></label>
                <input type="text" name="asseg_num_polissa" value="{{ $vehicle->asseg_num_polissa or old('asseg_num_polissa') }}" class="form-control" id="asseg_num_polissa" aria-describedby="asseg_num_polissa">
                <small id="asseg_num_polissa" class="form-text text-muted">Numero de polisa del vehicle.</small>
              </div>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-4">
              {{-- Crear --}}
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
          </div>
          </form>
        </div>
      </div>
      </form>
      <!--Fi formaulari-->
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


@endsection
