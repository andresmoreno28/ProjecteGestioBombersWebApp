@csrf

<!-- CONTENIDOR PARE + NOM -->
<h6>Dades del contenidor</h6>
<div class="form-row">
    <!-- Pare -->
    <div class="form-group col-md-4">
        <label for="pareContenidor">Pare</label>
        <select name="container_parent_id" class="form-control" id="pareContenidor" aria-describedby="pareContenidorHelp">
            <!-- Permetre que no hi hagi contenidor pare -->
            <option value="cap">----</option>
            <!-- Llistat de contenidors -->
            @foreach ($containers as $container)
                {{-- Quan la variable $containerEdit estigui definida, seleccionem l'ítem que pertoqui.
                en cas contrari mostrem valors sense selecció, sent el primer el que es mostri. --}}
                @if (isset($containerEdit))
                    <option value="{{ $container->id }}" {{ ($containerEdit->container_parent_id or old('container_parent_id')) == $container->id ? 'selected' : '' }}>
                        {{ $container->container_name->nom.', ' }}
                        {{-- Mostrar les dades del lloc on està ubicat el contenidor. --}}
                        @if (isset($container['vehicle']))
                            {{ $container['vehicle']['codi'] }}, {{ $container['vehicle']['type']['codi'] }}
                        @elseif (isset($container['user']))
                            {{ $container['user']['codi_parc'] }}, {{ $container['user']['name'] }}
                        @else
                            No assignat
                        @endif
                    </option>
                @else
                    <option value="{{ $container->id }}">
                        {{ $container->container_name->nom.', ' }}
                        {{-- Mostrar les dades del lloc on està ubicat el contenidor. --}}
                        @if (isset($container['vehicle']))
                            {{ $container['vehicle']['codi'] }}, {{ $container['vehicle']['type']['codi'] }}
                        @elseif (isset($container['user']))
                            {{ $container['user']['codi_parc'] }}, {{ $container['user']['name'] }}
                        @else
                            No assignat
                        @endif
                    </option>
                @endif
            @endforeach
        </select>
        <small id="pareContenidorHelp" class="form-text text-muted">El contenidor on hi serà contingut.</small>
    </div>

    <!-- Tipus -->
    <div class="form-group col-md-8">
        <label for="nomContenidor">Tipus</label>
        <select name="container_name_id" class="form-control" id="nomContenidor" aria-describedby="nomContenidorHelp" required>
            <!-- Llistat dels tipus de contenidors -->
            @foreach ($containerNames as $containerName)
                {{-- Quan la variable $containerEdit estigui definida, seleccionem l'ítem que pertoqui.
                en cas contrari mostrem valors sense selecció, sent el primer el que es mostri. --}}
                @if (isset($containerEdit))
                    <option value="{{ $containerName->id }}" {{ ($containerEdit->container_name_id or old('container_name_id')) == $containerName->id ? 'selected' : '' }}>
                        {{ $containerName->nom }}
                    </option>
                @else
                    <option value="{{ $containerName->id }}">{{ $containerName->nom }}</option>
                @endif
            @endforeach
        </select>
        <small id="nomContenidorHelp" class="form-text text-muted">El tipus de contenidor.</small>
    </div>
</div><!-- /.form-row -->
<hr class="mb-4">
<!-- CONTENIDOR VEHICLE - USUARI -->
<h6>Ubicació del contenidor</h6>
<div class="form-row">
    <!-- Ubicació -->
    <div class="form-group col-md-4">
        {{-- Quan la variable $containerEdit estigui definida, seleccionem l'ítem que pertoqui.
        en cas contrari mostrem valors sense selecció, sent el primer el que es mostri. --}}
        @if (isset($containerEdit))
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="es_dun_vehicle" id="ubicacioVehicle" value="1"
                    {{ ($containerEdit->es_dun_vehicle or old('es_dun_vehicle')) == 1 ? 'checked' : '' }}>
                <label class="form-check-label" for="ubicacioVehicle">Vehicle</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="es_dun_vehicle" id="ubicacioParc" value="0"
                    {{ ($containerEdit->es_dun_vehicle or old('es_dun_vehicle')) == 0 ? 'checked' : '' }}>
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
            <!-- Permetre que no hi hagi contenidor pare -->
            <option value="cap">----</option>
            <!-- Llistat dels vehicles -->
            @foreach ($vehicles as $vehicle)
                {{-- Quan la variable $containerEdit estigui definida, seleccionem l'ítem que pertoqui.
                en cas contrari mostrem valors sense selecció, sent el primer el que es mostri. --}}
                @if (isset($containerEdit))
                    <option value="{{ $vehicle->id }}" {{ ($containerEdit->vehicle_id or old('vehicle_id')) == $vehicle->id ? 'selected' : '' }}>
                            {{ $vehicle->codi }}, {{ $vehicle->type->codi }}, {{ $vehicle->type->descripcio }} ({{ $vehicle->type->nom }})
                    </option>
                @else
                    <option value="{{ $vehicle->id }}">
                        {{ $vehicle->codi }}, {{ $vehicle->type->codi }}, {{ $vehicle->type->descripcio }} ({{ $vehicle->type->nom }})
                    </option>
                @endif
            @endforeach
        </select>
        <small id="vehicleContenidorHelp" class="form-text text-muted">El vehicle al qual pertany el contenidor.</small>
    </div>
    <!-- Parc -->
    <div id="parcContenidorSelect" class="form-group col-md-8" style="display:none">
        <select name="user_id" class="form-control" id="parcContenidor" aria-describedby="parcContenidorHelp">
            <!-- Permetre que no hi hagi contenidor pare -->
            <option value="cap">----</option>
            <!-- Llistat dels vehicles -->
            @foreach ($users as $user)
                {{-- Quan la variable $containerEdit estigui definida, seleccionem l'ítem que pertoqui.
                en cas contrari mostrem valors sense selecció, sent el primer el que es mostri. --}}
                @if (isset($containerEdit))
                    <option value="{{ $user->id }}" {{ ($containerEdit->user_id or old('user_id')) == $user->id ? 'selected' : '' }}>
                        {{ $user->codi_parc }}, {{ $user->name }}
                    </option>
                @else
                    <option value="{{ $user->id }}">{{ $user->codi_parc }}, {{ $user->name }}</option>
                @endif
            @endforeach
        </select>
        <small id="parcContenidorHelp" class="form-text text-muted">El parc al qual pertany el contenidor.</small>
    </div>
</div><!-- /.form-row -->

<!-- Botó (submit) -->
<button type="submit" class="btn btn-danger bg-dark">
    <p class="my-0 underline-small">{{ $submitButton }}</p>
</button>