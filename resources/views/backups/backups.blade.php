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
              <li class="breadcrumb-item active" aria-current="page">Backups</li>
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
        <div class="row">

            <div class="col-xs-12 col-2 my-3 clearfix">
                <a id="create-new-backup-button" href="{{ route('bcreate') }}" class="btn btn-danger bg-dark">
                  <p class="my-0 underline-small"><i class="fas fa-archive"></i> Nova copia de seguretat</p>
                </a>
            </div>
        </div>
            <div class="row">
              <div class="col-xs-12 col-12">
                  @if (count($backups))
                    <table class="table table-striped table-bordered">
                        <caption><small>Llista de backups.</small></caption>
                        <thead class="thead-dark">
                            <tr style="border-bottom:3px solid #dc3545;">
                              <th>#</th>
                              <th>Arxiu</th>
                              <th>Tamany</th>
                              <th>Data</th>
                              <th>Temps</th>
                              <th>Acció</th>
                          </tr>
                          </thead>
                          <tbody>
                          @foreach($backups as $key => $backup)
                              @php $count = $key+1; @endphp
                              <tr>
                                  <td>{{ $count }}</td>
                                  <td>{{ $backup['file_name'] }}</td>
                                  <td>{{   SomeClass::bytesToHuman($backup['file_size']) }}</td>
                                  <td>
                                    @php(\Jenssegers\Date\Date::setLocale('ca'))
                                    {{ \Jenssegers\Date\Date::createFromTimestamp($backup['last_modified'])->format('j F Y') }}
                                  </td>
                                  <td>
                                    @php(\Jenssegers\Date\Date::setLocale('ca'))
                                    {{ \Jenssegers\Date\Date::createFromTimestamp($backup['last_modified']) }}
                                  </td>
                                  <td class="text-right">
                                      <a class="btn btn-xs btn-default"
                                         href="{{ url('backup/download/'.$backup['file_name']) }}">
                                         <i class="fas fa-download"></i> Descarregar
                                       </a>
                                       <!-- Esborrar -->
                                       <div class="d-inline-block">
                                           <form action="{{ route('dbackup', ['id' => $backup['file_name']]) }}" method="DELETE" class="form-delete">
                                               @method('DELETE')
                                               @csrf
                                               <input type="hidden" name="nom" value="{{ $backup['file_name'] }}">
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
                          <h4>No hi han copies de seguretat</h4>
                      </div>
                  @endif
              </div>
            </div>

        </div>


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
                <h5 class="modal-title">Esborrar backup</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Body -->
            <div class="modal-body scroll">
                <!-- Avís -->
                <p><strong>Està segur/ra d'esborrar la copia de seguretat?</strong><br>
                Aquesta acció és irreversible.</p>
                <!-- Info del material -->
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Informació</h6>
                        <dl class="row">
                            <dt class="col-sm-3">Nom:</dt>
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

        // Obrir el modal que serà emprat per eborrar el material (si es fa clic
        // al botó amb id="delete-btn").
        $('#materialEsborrarModal').modal().on('click', '#delete-btn', function() {
            form.submit();
        });
    });
</script>
@endsection
