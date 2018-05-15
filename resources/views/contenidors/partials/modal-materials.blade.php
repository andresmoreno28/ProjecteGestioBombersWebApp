<!-- MATERIALS (modal) -->
<div class="modal fade" id="contenidorMaterialsModal{{ $container['id'] }}" tabindex="-1" role="dialog" aria-labelledby="modalMaterials" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- Header -->
            <div class="modal-header">
                <h5 class="modal-title">Materials del contenidor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Body -->
            <div class="modal-body scroll">
                <!-- Llista de materials -->
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">{{ $container['container_name']['nom'] }}</h6>
                        <ul>
                            @foreach ($container['materials'] as $material)
                            <li>{{ $material->nom }}, {{ $material->referencia }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tancar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->