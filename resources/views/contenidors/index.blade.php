@extends('layouts.head')

@section('content')

<div class="container pl-0  mx-0 col-12" id="altura">
    <!-- CONTINGUT ESQUERRE (sidebar) -->
    @include('layouts.partials.econtainer')

    <!-- CONTINGUT CENTRE -->
    <div class="col-8 py-4" id="altura">
        <!-- Breadcrumbs -->
        <div class="row d-none d-sm-block">
            <nav aria-label="breadcrumb bg-transparent">
                <ol class="breadcrumb bg-transparent">
                    <li class="breadcrumb-item" aria-current="page">Home</li>
                    <li class="breadcrumb-item" aria-current="page">Contenidors</li>
                    <li class="breadcrumb-item active" aria-current="page">Consultar</li>
                </ol>
            </nav>
        </div><!-- /.row -->
        <hr class="my-0 d-none d-sm-block">
        <hr class="my-0 d-none d-sm-block">

        <!-- Botó Afegir -->
        <div class="row">
            <div class="col-xs-12 col-2 my-3 clearfix">
                <a href="{{ action('ContainerController@create') }}" class="btn btn-danger bg-dark">
                  <p class="my-0 underline-small"><i class="fas fa-archive"></i> Afegir un contenidor</p>
                </a>
            </div><!-- /.col -->
        </div><!-- /.row -->

        <!-- Taula de Contenidors -->
        <div class="row">
            <div class="col-xs-12 col-12">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Acció</th>
                    </tr>
                    </thead>
                    @forelse ($containers as $container)
                        <tbody>
                            <tr>
                                <td>Nom</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-default" href="#">
                                        <i class="fas fa-pencil-alt"></i> Editar
                                    </a>
                                    <a class="btn btn-xs btn-danger" data-button-type="delete" href="#">
                                        <i class="fas fa-times"></i> Eliminar
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    @empty
                        <tr>
                            <td colspan="6">Encara no hi ha contenidors. <a href="{{ action('ContainerController@create') }}">Afegir un contenidor</a>.</td>
                        </tr>
                    @endforelse
                </table>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.col -->

    <!-- CONTINGUT DRET (sidebar) -->
    <div class="mr-0 col-2 py-4 d-none d-md-block pt-5" id="altura">
        <div class="row mr-1 mt-5">
            <iframe src="https://feed.mikle.com/widget/v2/77801/" height="402px" width="100%" class="fw-iframe" scrolling="no" frameborder="0"></iframe>
        </div><!-- /.row -->
    </div><!-- /.col -->
</div><!-- /.container -->


@endsection