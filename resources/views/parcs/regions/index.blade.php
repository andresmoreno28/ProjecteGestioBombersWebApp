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
          <li class="breadcrumb-item active" aria-current="page">Consultar</li>
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

     <!-- Taula amb llistat de regions -->
        <div class="row">
            <div class="col-xs-12 col-2 my-3 clearfix">
                <a id="create-new-backup-button" href="{{ route('region.create') }}" class="btn btn-danger bg-dark">
                  <p class="my-0 underline-small"><i class="fas fa-archive"></i> Crear nova regió</p>
                </a>
            </div>
        </div>
            <div class="row">
              <div class="col-xs-12 col-12">
                  @if (count($regions))
                      <table class="table table-striped table-bordered">
                          <caption><small>Llista de regions.</small></caption>
                          <thead class="thead-dark">
                              <tr style="border-bottom:3px solid #dc3545;">
                              <th>#</th>
                              <th>Codi</th>
                              <th>Nom</th>
                              <th>Acció</th>
                          </tr>
                          </thead>
                          <tbody>
                          @foreach($regions as $key => $region)
                              @php $count = $key+1; @endphp
                              <tr>
                                  <td>{{ $count }}</td>
                                  <td>{{ $region['codi'] }}</td>
                                  <td>{{ $region['nom'] }}</td>

                                  <td class="text-right">
                                      <a class="btn btn-xs btn-default"
                                         href="{{ action('RegionController@edit',$region['id']) }}">
                                         <i class="fas fa-download"></i> Editar
                                       </a>
                                      <a class="btn btn-xs btn-danger" data-button-type="delete"
                                         href="{{ url('region/delete/'.$region['id']) }}" role="button">
                                         <i class="fas fa-times"></i>
                                          Eliminar</a>
                                  </td>
                              </tr>
                          @endforeach
                          </tbody>
                      </table>
                      <!-- Paginació -->
                      {{ $regions->links() }}
                  @else
                      <div class="well">
                          <h4>No hi han regions inserides</h4>
                      </div>
                  @endif
              </div>
            </div>
          </div>
<!--Fi Contenedor central-->
<!--Contenedor dret-->
<div class="mr-0 col-2 py-4 d-none d-md-block pt-5" id="altura">
  <div class="row mr-1 mt-5">
    <iframe src="https://feed.mikle.com/widget/v2/77801/" height="402px" width="100%" class="fw-iframe" scrolling="no" frameborder="0"></iframe>
  </div>
</div>
<!--Fi Contenedor dret-->
</div>


@endsection