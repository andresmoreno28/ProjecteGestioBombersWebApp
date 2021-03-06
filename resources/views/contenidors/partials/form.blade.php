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
                    {{-- Un contenior no podrà ser inclòs dintre d'ell mateix. --}}
                    @if($container->id != $containerEdit['id'])
                        <option value="{{ $container->id }}"
                            @if($container->id == $containerEdit['parent']['id'] or $container->id == old('container_parent_id')) selected @endif>
                            {{ $container->container_name->nom.', ' }}
                            {{-- Mostrar les dades del lloc on està ubicat el contenidor. --}}
                            @if (isset($container['vehicle']))
                                {{ $container['vehicle']->codigo() }}, {{ $container['vehicle']['type']['nom'] }}
                            @elseif (isset($container['user']))
                                {{ $container['user']['codi_parc'] }}, {{ $container['user']['name'] }}
                            @else
                                No assignat
                            @endif
                        </option>
                    @endif
                @else
                    <option value="{{ $container->id }}">
                        {{ $container->container_name->nom.', ' }}
                        {{-- Mostrar les dades del lloc on està ubicat el contenidor. --}}
                        @if (isset($container['vehicle']))
                            {{ $container['vehicle']->codigo() }}, {{ $container['vehicle']['type']['nom'] }}
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

                    <option value="{{ $containerName->id }}"
                        @if($containerName->id == $containerEdit['container_name']['id'] or $containerName->id == old('container_name_id')) selected @endif>
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
    <div id="vehicleContenidorSelect" class="form-group col-md-8" style="display:none">
        <select name="vehicle_id" class="form-control" id="vehicleContenidor" aria-describedby="vehicleContenidorHelp">
            <!-- Permetre que no hi hagi cap vehicle -->
            <option value="cap">----</option>
            <!-- Llistat dels vehicles -->
            @foreach ($vehicles as $vehicle)
                {{-- Quan la variable $containerEdit estigui definida, seleccionem l'ítem que pertoqui.
                en cas contrari mostrem valors sense selecció, sent el primer el que es mostri. --}}
                @if (isset($containerEdit))
                    <option value="{{ $vehicle->id }}"
                        @if($vehicle->id == $containerEdit['vehicle']['id'] or $vehicle->id == old('vehicle_id')) selected @endif>
                        {{ $vehicle->codigo() }}, {{ $vehicle->type->codi }}, {{ $vehicle->type->descripcio }} ({{ $vehicle->type->nom }})
                    </option>
                @else
                    <option value="{{ $vehicle->id }}">
                        {{ $vehicle->codigo() }}, {{ $vehicle->type->codi }}, {{ $vehicle->type->descripcio }} ({{ $vehicle->type->nom }})
                    </option>
                @endif
            @endforeach
        </select>
        <small id="vehicleContenidorHelp" class="form-text text-muted">El vehicle al qual pertany el contenidor.</small>
    </div>
    <!-- Parc -->
    <div id="parcContenidorSelect" class="form-group col-md-8" style="display:none">
        <select name="user_id" class="form-control" id="parcContenidor" aria-describedby="parcContenidorHelp">
            <!-- Permetre que no hi hagi cap parc -->
            <option value="cap">----</option>
            <!-- Llistat dels parcs -->
            @foreach ($users as $user)
                {{-- Quan la variable $containerEdit estigui definida, seleccionem l'ítem que pertoqui.
                en cas contrari mostrem valors sense selecció, sent el primer el que es mostri. --}}
                @if (isset($containerEdit))
                    <option value="{{ $user->id }}"
                        @if($user->id == $containerEdit['user']['id'] or $user->id == old('user_id')) selected @endif>
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
<hr class="mb-4">

<!-- MATERIALS -->
<h6>Materials</h6>
<div class="row">
    <div class="col-12">
        <input class="form-control mb-2" type="text" placeholder="Cercar material" id="myInput" onkeyup="myFunction()">
    </div>
    <div class="col table-responsive" style="overflow-y:scroll; height:408px;">
        <table class="table table-hover table-sm" id="myTable">
            <thead class="thead-dark">
                <tr style="border-bottom:3px solid #dc3545;">
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Referència</th>
                    <th scope="col"></th>
                    <th scope="col">Quantitat (prevista)</th>
                    <th scope="col">Quantitat (real)</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($materials as $key => $material)
                    @php $count = $key+1; @endphp
                    <tr>
                        <td>{{ $count }}</td>
                        <td>{{ $material->nom }}</td>
                        <td>{{ $material->referencia }}</td>
                        <td>
                            {{-- Quan la variable $containerEdit estigui definida, seleccionem l'ítem que pertoqui.
                            en cas contrari mostrem valors sense selecció, sent el primer el que es mostri. --}}
                            @if (isset($containerEdit))
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"
                                        value="{{ $material->id }}" id="material-{{ $material->id }}"
                                        name="material_container[]"
                                        @if(!empty($containerEdit['materials'][$key]))
                                            @if ($material->id == $containerEdit['materials'][$key]['id'] or $material->id == old('material_container')) checked @endif>
                                        @endif
                                    <label class="form-check-label text-muted" for="material-{{ $material->id }}">
                                        Seleccionar
                                    </label>
                                </div>
                            @else
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"
                                        value="{{ $material->id }}" id="material-{{ $material->id }}" name="material_container[]">
                                    <label class="form-check-label text-muted" for="material-{{ $material->id }}">
                                        Seleccionar
                                    </label>
                                </div>
                            @endif
                        </td>
                        <td>
                            <input type="number" name="quantitat_prevista[]"
                                value="{{ $material->pivot['quantitat_prevista'] or old('quantitat_prevista') }}"
                                class="form-control qp" id="qPrevista" min="0"
                                placeholder="0" disabled>
                        </td>
                        <td>
                            <input type="number" name="quantitat[]"
                                value="{{ $material->pivot['quantitat'] or old('quantitat') }}"
                                class="form-control qr" id="qReal" min="0"
                                placeholder="0" disabled>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">Encara no hi ha materials.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div><!-- /.col -->
</div><!-- /.row -->
<hr class="mb-4">

<!-- Botó (submit) -->
<button type="submit" class="btn btn-danger bg-dark">
    <p class="my-0 underline-small">{{ $submitButton }}</p>
</button>

<script type="text/javascript">
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

</script>
