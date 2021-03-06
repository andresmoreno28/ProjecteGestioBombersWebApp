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

        <!-- Botó Afegir -->
        <div class="row">
            <div class="col-xs-12 col-2 my-3 clearfix">
                <a href="{{ action('ContainerController@create') }}" class="btn btn-danger bg-dark">
                  <p class="my-0 underline-small"><i class="fas fa-archive"></i> Afegir contenidor</p>
                </a>
            </div><!-- /.col -->
        </div><!-- /.row -->

        {{-- Success --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        {{-- Warning --}}
        @if (session('warning'))
            <div class="alert alert-warning alert-dismissible fade show">
                {{ session('warning') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <!-- Taula de Materials -->
        <div class="row">
            <div class="col-xs-12 col-12">
                <!-- NAVEGACIÓ AJUDA -->
                @include('contenidors.partials.tanchors')

                <!-- VEHICLES -->
                <h5 id="vehicles">Vehicles <span class="badge badge-danger">({{ $containersVC }})</span></h5>
                @include('contenidors.partials.tcontainers', [
                    'containers'  => $containersV,
                    'tBuida'      => 'No hi ha contenidors associats a vehicles.',
                    'tInfo'       => 'Llista de contenidors associats a vehicles.'
                ])
                <hr class="mb-4">

                <!-- NAVEGACIÓ AJUDA -->
                @include('contenidors.partials.tanchors')

                <!-- PARCS -->
                <h5 id="parcs">Parcs <span class="badge badge-danger">({{ $containersUC }})</span></h5>
                @include('contenidors.partials.tcontainers', [
                    'containers'  => $containersU,
                    'tBuida'      => 'No hi ha contenidors associats a parcs.',
                    'tInfo'       => 'Llista de contenidors associats a parcs.'
                ])
                <hr class="mb-4">

                <!-- NAVEGACIÓ AJUDA -->
                @include('contenidors.partials.tanchors')

                <!-- NO ASSIGNATS -->
                <h5 id="assignar">No assignats <span class="badge badge-danger">({{ $containersNC }})</span></h5>
                @include('contenidors.partials.tcontainers', [
                    'containers'  => $containersN,
                    'tBuida'      => 'No hi ha contenidors sense assignar.',
                    'tInfo'       => 'Llista de contenidors no assignats (buits).'
                ])
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

<!-- ESBORRAR (modal) -->
<div class="modal fade" id="contenidorEsborrarModal" tabindex="-1" role="dialog" aria-labelledby="modalEsborrar" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- Header -->
            <div class="modal-header">
                <h5 class="modal-title">Esborrar contenidor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Body -->
            <div class="modal-body scroll">
                <!-- Avís -->
                <p><strong>Està segur/ra d'esborrar el contenidor?</strong><br>
                Aquesta acció és irreversible.</p>
                <!-- Info del container -->
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Informació</h6>
                        <dl class="row">
                            <dt class="col-sm-3">Grup</dt>
                            <dd id="modalEsborrarGrup" class="col-sm-9"></dd>
                            <dt class="col-sm-3">Tipus</dt>
                            <dd id="modalEsborrarTipus" class="col-sm-9"></dd>
                            <dt class="col-sm-3">Ubicat</dt>
                            <dd id="modalEsborrarUbicat" class="col-sm-9"></dd>
                            <dt class="col-sm-3">Contingut</dt>
                            <dd id="modalEsborrarContingut" class="col-sm-9"></dd>
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
@endsection

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
    // ESBORRAR CONTENIDOR
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

        // Guardar les dades del formulari (per emplenar el modal).
        // Els índex [0] van segons l'ordre dels <imputs></imputs>.
        var tipus     = formObject[2].value;
        var ubicat    = formObject[3].value;
        var contingut = formObject[4].value;
        var grup      = formObject[5].value;

        $('#modalEsborrarTipus').text(tipus);
        $('#modalEsborrarUbicat').text(ubicat);
        $('#modalEsborrarContingut').text(contingut);
        $('#modalEsborrarGrup').text(grup);

        // Obrir el modal que serà emprat per eborrar el container (si es fa clic
        // al botó amb id="delete-btn").
        $('#contenidorEsborrarModal').modal().on('click', '#delete-btn', function() {
            form.submit();
        });
    });
</script>
@endsection
