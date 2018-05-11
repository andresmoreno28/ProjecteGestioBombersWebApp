<p class="text-danger"><small>Camps obligatoris <strong> * </strong>.</small></p>

@csrf

<!-- Referència -->
<div class="form-group">
    <label for="matRef">Referència <span class="text-danger"><strong>*</strong></span></label>
    <input type="text" name="referencia" value="{{$material->referencia or old('referencia') }}" class="form-control" id="matRef" aria-describedby="matRefHelp" required>
    <small id="matRefHelp" class="form-text text-muted">Referència del material (ha de ser única).</small>
</div>

<!-- Nom -->
<div class="form-group">
    <label for="matNom">Nom <span class="text-danger"><strong>*</strong></span></label>
    <input type="text" name="nom" value="{{ $material->nom or old('nom') }}" class="form-control" id="matNom" aria-describedby="matNomHelp" required>
    <small id="matNomHelp" class="form-text text-muted">Nom del material.</small>
</div>

<!-- Quantitat (prevista) -->
<div class="form-group">
    <label for="matPre">Quantitat prevista <span class="text-danger"><strong>*</strong></span></label>
    <input type="number" min="0" name="quantitat_prevista" value="{{ $material->quantitat_prevista or old('quantitat_prevista') }}" class="form-control" id="matPre" aria-describedby="matPreHelp" required>
    <small id="matPreHelp" class="form-text text-muted">Quantitat prevista que s'espera que hi hagi del material.</small>
</div>

<!-- Quantitat (real) -->
<div class="form-group">
    <label for="matRea">Quantitat real</label>
    <input type="number" min="0" name="quantitat" value="{{ $material->quantitat or old('quantitat') }}" class="form-control" id="matRea" aria-describedby="matReaHelp">
    <small id="matReaHelp" class="form-text text-muted">Quantitat real que hi ha del material.</small>
</div>

<!-- És del parc? -->
<div class="form-group">
    <label for="matPar">És del parc?</label>
    <select name="es_del_parc" class="form-control" id="matPar" aria-describedby="matParHelp">
        @if(isset($material))
            <option value="1" {{ ($material->es_del_parc or old('es_del_parc')) == 1 ? 'selected' : '' }}>Sí</option>
            <option value="0" {{ ($material->es_del_parc or old('es_del_parc')) == 0 ? 'selected' : '' }}>No</option>
        @else
            <option value="1" selected>Sí</option>
            <option value="0">No</option>
        @endif
    </select>
    <small id="matParHelp" class="form-text text-muted">El material pertany al parc?</small>
</div>

<!-- Botó (submit) -->
<button type="submit" class="btn btn-danger bg-dark">
    <p class="my-0 underline-small">{{ $submitButton }}</p>
</button>