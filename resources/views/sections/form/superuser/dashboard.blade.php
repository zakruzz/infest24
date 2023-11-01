<div class="row">
    <div class="col-lg-12 mb-2">
        <span>Bidang wajib diisi (<span class="text-danger">*</span>)</span>
    </div>
    <div class="col-lg-12 mb-3">
        <label class="form-label" for="field-image-slider">Abstrak <span class="text-danger">*</span></label>
        <input class="form-control @error('abstrak') is-invalid @enderror" type="file" id="field-image-slider"
               wire:model="abstrak" wire:loading.attr="disabled" accept="image/*">
        <small class="text-muted"> <i class="fa fa-info-circle"></i> Maksimum size 5MB (.pdf)</small>
        @error('abstrak')
        <span class="invalid-feedback">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>
