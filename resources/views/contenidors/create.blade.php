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
                    <li class="breadcrumb-item active" aria-current="page">Afegir</li>
                </ol>
            </nav>
        </div><!-- /.row -->
        <hr class="my-0 d-none d-sm-block">

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

        <!-- Formulari -->
        <div class="row mt-5">
            <div class="col-xs-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Afegir Contenidor</h5>
                        <form action="{{ action('MaterialController@store') }}" method="POST">
                            @include('contenidors.partials.form', [
                                'submitButton' => 'Afegir'
                            ])
                        </form>
                    </div>
                </div><!-- /.card -->
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

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
$(function() {
    // Fem que el "radio button" mostri el "select" de vehicles o parcs segons
    // quina opció s'hagi seleccionat.
    // Com per defecte el valor seleccionat és el dels vehicles, assignem
    // style="display:none" als parcs, ja que el toggle ho activa i desactiva
    // de forma automàtica.
    $("input[name='es_dun_vehicle']:radio").change(function() {
        $("#vehicleContenidorSelect").toggle($(this).val() == "1");
        $("#parcContenidorSelect").toggle($(this).val() == "0");
    });
});
</script>
@endsection