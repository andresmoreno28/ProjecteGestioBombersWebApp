@extends('layouts.head')

@section('content')

<div class="container pl-0  mx-0 col-12" id="altura">
@include('layouts.partials.econtainer')
    <!--Fi Contenedor esquerre-->
    <!--Contenedor central-->
    <div class="col-8 py-4" id="altura">
      <div class="row d-none d-sm-block">
        <nav aria-label="breadcrumb bg-transparent">
          <ol class="breadcrumb bg-transparent">
            <li class="breadcrumb-item" aria-current="page">Home</li>
            <li class="breadcrumb-item" aria-current="page">Poblacions</li>
            @if ($location->exists)
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
          @if ($location->exists)
            <h5 class="card-title">Editar població</h5>
          @else
            <h5 class="card-title">Crear població</h5>
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

          @if ($location->exists)
            {{Form::open(['route' => ['location.update',$location->id],'method'=>'put'])}}
          @else
            {{ Form::open(array('action' => 'LocationController@store')) }}
          @endif
            {{-- Name --}}
            <div class="form-group">
              <label for="locationName">Nom</label>
              <input type="text" name="nom" value="{{ $location->nom or old('nom') }}" class="form-control" id="locationName" aria-describedby="nameHelp" required>
              <small id="nameHelp" class="form-text text-muted">Nom de la població</small>
            </div>
            {{-- Codi --}}
            <div class="form-group">
              <label for="codiPoblacio">Codi de la població</label>
              <input type="integer" name="codi" value="{{ $location->codi or old('codi') }}" class="form-control" id="codiPoblacio" aria-describedby="emailHelp" required>
              <small id="codiPoblacio" class="form-text text-muted">Codi de la població.</small>
            </div>
            {{-- Regio --}}
            <div class="form-group">
              <label for="userRegion">Regió</label>
                <select name="region_id"class="custom-select" id="inputGroupSelect01">
                  <option selected disabled>Selecciona una regió</option>
                  @forelse ($regions as $regio)
                    <option selected value="{{$regio['id']}}">{{$regio['nom']}}</option>
                  @empty

                  @endforelse
                </select>
              <small id="regiolHelp" class="form-text text-muted">Regió on es troba el nou parc.</small>
            </div>
            {{-- Crear --}}
            <button type="submit" class="btn btn-primary">Guardar</button>
          </form>
        </div>
      </div>
      </form>
      <!--Fi formaulari-->
    </div>
    <!--Fi Contenedor central-->
    <!--Contenedor dret -->
    <div class="mr-0 col-2 py-4 d-none d-md-block pt-5" id="altura">
      <div class="row mr-1 mt-5">
        <iframe src="https://feed.mikle.com/widget/v2/77801/" height="402px" width="100%" class="fw-iframe" scrolling="no" frameborder="0"></iframe>
      </div>
    </div>
  </div>
  <!--Fi Contenedor dret-->
</div>


@endsection
