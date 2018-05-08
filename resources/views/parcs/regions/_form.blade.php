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
            <li class="breadcrumb-item" aria-current="page">Regions</li>
            @if ($region->exists)
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
          @if ($region->exists)
            <h5 class="card-title">Editar regió</h5>
          @else
            <h5 class="card-title">Crear regió</h5>
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

          @if ($region->exists)
            {{Form::open(['route' => ['region.update',$region->id],'method'=>'put'])}}
          @else
            {{ Form::open(array('action' => 'RegionController@store')) }}
          @endif
            {{-- Name --}}
            <div class="form-group">
              <label for="regionName">Nom</label>
              <input type="text" name="nom" value="{{ $region->nom or old('nom') }}" class="form-control" id="regionName" aria-describedby="nameHelp" required>
              <small id="nameHelp" class="form-text text-muted">Nom de la regió</small>
            </div>
            {{-- Email --}}
            <div class="form-group">
              <label for="codiRegio">Codi de la regió</label>
              <input type="integer" name="codi" value="{{ $region->codi or old('codi') }}" class="form-control" id="codiRegio" aria-describedby="emailHelp" required>
              <small id="codiRegio" class="form-text text-muted">Codi de la regió.</small>
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
