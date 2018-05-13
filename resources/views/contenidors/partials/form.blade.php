@csrf

<!-- CONTENIDOR PARE + NOM -->
<h6>Dades del contenidor</h6>
<div class="form-row">
    <!-- Pare -->
    <div class="form-group col-md-4">
        <label for="pareContenidor">Pare</label>
        <select name="container_parent_id" class="form-control" id="pareContenidor" aria-describedby="pareContenidorHelp">
            @if(isset($container))
                <option value="cap" {{ ($container->container_parent_id or old('container_parent_id')) == null ? 'selected' : '' }}>Cap</option>
                <option value="1" {{ ($container->container_parent_id or old('container_parent_id')) == 1 ? 'selected' : '' }}>Nom 1</option>
                <option value="0" {{ ($container->container_parent_id or old('container_parent_id')) == 0 ? 'selected' : '' }}>Nom 2</option>
            @else
                <option value="cap" selected>Cap</option>
                <option value="1">Nom 1</option>
                <option value="0">Nom 2</option>
            @endif
        </select>
        <small id="pareContenidorHelp" class="form-text text-muted">El nom del contenidor.</small>
    </div>

    <!-- Nom -->
    <div class="form-group col-md-8">
        <label for="nomContenidor">Nom</label>
        <select name="container_name_id" class="form-control" id="nomContenidor" aria-describedby="nomContenidorHelp" required>
            @if(isset($container))
                <option value="1" {{ ($container->container_name_id or old('container_name_id')) == 1 ? 'selected' : '' }}>Nom 1</option>
                <option value="0" {{ ($container->container_name_id or old('container_name_id')) == 0 ? 'selected' : '' }}>Nom 2</option>
            @else
                <option value="1" selected>Nom 1</option>
                <option value="0">Nom 2</option>
            @endif
        </select>
        <small id="nomContenidorHelp" class="form-text text-muted">El nom del contenidor.</small>
    </div>
</div><!-- /.form-row -->
<hr class="mb-4">
<!-- CONTENIDOR VEHICLE - USUARI -->
<h6>Ubicació del contenidor</h6>
<div class="form-row">
    <!-- Ubicació -->
    <div class="form-group col-md-4">
        @if(isset($container))
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="es_dun_vehicle" id="ubicacioVehicle" value="1"
                    {{ ($container->es_dun_vehicle or old('es_dun_vehicle')) == 1 ? 'checked' : '' }}>
                <label class="form-check-label" for="ubicacioVehicle">Vehicle</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="es_dun_vehicle" id="ubicacioParc" value="0"
                    {{ ($container->es_dun_vehicle or old('es_dun_vehicle')) == 0 ? 'checked' : '' }}>
                <label class="form-check-label" for="ubicacioParc">Parc</label>
            </div>
        @else
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="es_dun_vehicle" id="ubicacioVehicle" value="1" checked>
                <label class="form-check-label" for="ubicacioVehicle">Vehicle</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="es_dun_vehicle" id="ubicacioParc" value="0">
                <label class="form-check-label" for="ubicacioParc">Parc</label>
            </div>
        @endif
        <small class="form-text text-muted">Lloc en el que s'ubica el contenidor.</small>
    </div>
    <!-- Vehicle -->
    <div id="vehicleContenidorSelect" class="form-group col-md-8">
        <select name="vehicle_id" class="form-control" id="vehicleContenidor" aria-describedby="vehicleContenidorHelp">
            @if(isset($container))
                <option value="cap" {{ ($container->vehicle_id or old('vehicle_id')) == null ? 'selected' : '' }}>Seleccionar vehicle...</option>
                <option value="1" {{ ($container->vehicle_id or old('vehicle_id')) == 1 ? 'selected' : '' }}>Nom 1</option>
                <option value="0" {{ ($container->vehicle_id or old('vehicle_id')) == 0 ? 'selected' : '' }}>Nom 2</option>
            @else
                <option value="cap" selected>Seleccionar vehicle...</option>
                <option value="1">Nom 1</option>
                <option value="0">Nom 2</option>
            @endif
        </select>
        <small id="vehicleContenidorHelp" class="form-text text-muted">El vehicle al qual pertany el contenidor.</small>
    </div>
    <!-- Parc -->
    <div id="parcContenidorSelect" class="form-group col-md-8" style="display:none">
        <select name="user_id" class="form-control" id="parcContenidor" aria-describedby="parcContenidorHelp">
            @if(isset($container))
                <option value="cap" {{ ($container->user_id or old('user_id')) == null ? 'selected' : '' }}>Seleccionar parc...</option>
                <option value="1" {{ ($container->user_id or old('user_id')) == 1 ? 'selected' : '' }}>Nom 1</option>
                <option value="0" {{ ($container->user_id or old('user_id')) == 0 ? 'selected' : '' }}>Nom 2</option>
            @else
                <option value="cap" selected>Seleccionar parc...</option>
                <option value="1">Nom 1</option>
                <option value="0">Nom 2</option>
            @endif
        </select>
        <small id="parcContenidorHelp" class="form-text text-muted">El parc al qual pertany el contenidor.</small>
    </div>
</div><!-- /.form-row -->

<!-- Botó (submit) -->
<button type="submit" class="btn btn-danger bg-dark">
    <p class="my-0 underline-small">{{ $submitButton }}</p>
</button>