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
                    <li class="breadcrumb-item active" aria-current="page">Tipus</li>
                </ol>
            </nav>
        </div><!-- /.row -->
        <hr class="my-0 d-none d-sm-block">

        <!-- Botó Afegir -->
        <div class="row">
            <div class="col-xs-12 col-2 my-3 clearfix">
                <a href="{{ action('ContainerNameController@create') }}" class="btn btn-danger bg-dark">
                  <p class="my-0 underline-small"><i class="fas fa-archive"></i> Afegir un tipus</p>
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

        <!-- Taula de Tipus -->
        <div class="row">
            <div class="col-xs-12 col-12">
                <table class="table table-bordered table-striped">
                    <caption><small>Llistat dels tipus de contenidors.</small></caption>
                    <thead class="thead-dark">
                        <tr style="border-bottom:3px solid #dc3545;">
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Acció</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($types as $key => $type)
                            @php $count = $key+1; @endphp
                            <tr>
                                <td>{{ $count }}</td>
                                <td>{{ $type->nom }}</td>
                                <td class="text-right">
                                    <!-- Editar -->
                                    <a class="btn btn-default" href="{{ action('ContainerNameController@edit', ['id' => $type->id]) }}">
                                        <i class="fas fa-pencil-alt"></i> Editar
                                    </a>
                                    <!-- Esborrar -->
                                    <div class="d-inline-block">
                                        <form action="{{ action('ContainerNameController@destroy', ['id' => $type->id]) }}" method="POST" class="form-delete">
                                            @method('DELETE')
                                            @csrf
                                            <input type="hidden" name="nom" value="{{ $type->nom }}">
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fas fa-times"></i> Eliminar
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">Encara no hi ha tipus de contenidors. <a href="{{ action('ContainerNameController@create') }}">Afegir tipus</a>.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <!-- Paginació -->
                {{ $types->links() }}
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
<div class="modal fade" id="tipusEsborrarModal" tabindex="-1" role="dialog" aria-labelledby="modalEsborrar" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- Header -->
            <div class="modal-header">
                <h5 class="modal-title">Esborrar tipus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Body -->
            <div class="modal-body scroll">
                <!-- Avís -->
                <p><strong>Està segur/ra d'esborrar el tipus de contenidor?</strong><br>
                Aquesta acció és irreversible.</p>
                <!-- Info del tipus -->
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Informació</h6>
                        <dl class="row">
                            <dt class="col-sm-3">Nom</dt>
                            <dd id="modalEsborrarNom" class="col-sm-9"></dd>
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
        var Nom = formObject[2].value;
        
        $('#modalEsborrarNom').text(Nom);

        // Obrir el modal que serà emprat per eborrar el tipus de contenidor (si es fa clic
        // al botó amb id="delete-btn").
        $('#tipusEsborrarModal').modal().on('click', '#delete-btn', function() {
            form.submit();
        });
    });
</script>
@endsection