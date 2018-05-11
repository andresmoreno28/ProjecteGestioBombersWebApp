<p class="text-danger"><small>Camps obligatoris <strong> * </strong>.</small></p>

@csrf

<!-- CONTENIDOR PARE + NOM -->
<div class="form-row">
    <!-- Pare -->
    <div class="form-group col-md-4">
            <label for="pareContenidor">Pare</label>
            <select name="container_parent_id" class="form-control" id="pareContenidor" aria-describedby="pareContenidorHelp">
                @if(isset($container))
                    <option value="1" {{ ($container->container_parent_id or old('container_parent_id')) == 1 ? 'selected' : '' }}>Nom 1</option>
                    <option value="0" {{ ($container->container_parent_id or old('container_parent_id')) == 0 ? 'selected' : '' }}>Nom 2</option>
                @else
                    <option value="1" selected>Sí</option>
                    <option value="0">No</option>
                @endif
            </select>
            <small id="pareContenidorHelp" class="form-text text-muted">El nom del contenidor.</small>
        </div>

    <!-- Nom -->
    <div class="form-group col-md-8">
        <label for="nomContenidor">Nom</label>
        <select name="container_name_id" class="form-control" id="nomContenidor" aria-describedby="nomContenidorHelp">
            @if(isset($container))
                <option value="1" {{ ($container->container_name_id or old('container_name_id')) == 1 ? 'selected' : '' }}>Nom 1</option>
                <option value="0" {{ ($container->container_name_id or old('container_name_id')) == 0 ? 'selected' : '' }}>Nom 2</option>
            @else
                <option value="1" selected>Sí</option>
                <option value="0">No</option>
            @endif
        </select>
        <small id="nomContenidorHelp" class="form-text text-muted">El nom del contenidor.</small>
    </div>
</div><!-- /.form-row -->

<!-- Botó (submit) -->
<button type="submit" class="btn btn-danger bg-dark">
    <p class="my-0 underline-small">{{ $submitButton }}</p>
</button>