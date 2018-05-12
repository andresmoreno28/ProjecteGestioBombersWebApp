<p class="text-danger"><small>Camps obligatoris <strong> * </strong>.</small></p>

@csrf

<!-- Referència -->
<div class="form-group">
    <label for="matRef">Referència</label>
    <input type="text" name="referencia" value="{{$material->referencia or old('referencia') }}" class="form-control" id="matRef" aria-describedby="matRefHelp">
    <small id="matRefHelp" class="form-text text-muted">Referència del material (ha de ser única).</small>
</div>

<!-- Nom -->
<div class="form-group">
    <label for="matNom">Nom <span class="text-danger"><strong>*</strong></span></label>
    <input type="text" name="nom" value="{{ $material->nom or old('nom') }}" class="form-control" id="matNom" aria-describedby="matNomHelp" required>
    <small id="matNomHelp" class="form-text text-muted">Nom del material.</small>
</div>

<!-- Botó (submit) -->
<button type="submit" class="btn btn-danger bg-dark">
    <p class="my-0 underline-small">{{ $submitButton }}</p>
</button>