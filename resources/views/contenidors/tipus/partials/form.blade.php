<p class="text-danger"><small>Camps obligatoris <strong> * </strong>.</small></p>

@csrf

<!-- Nom -->
<div class="form-group">
    <label for="tipNom">Nom <span class="text-danger"><strong>*</strong></span></label>
    <input type="text" name="nom" value="{{ $type->nom or old('nom') }}" class="form-control" id="tipNom" aria-describedby="tipNomHelp" required>
    <small id="tipNomHelp" class="form-text text-muted">Nom del tipus de contenidor.</small>
</div>

<!-- Botó (submit) -->
<button type="submit" class="btn btn-danger bg-dark">
    <p class="my-0 underline-small">{{ $submitButton }}</p>
</button>