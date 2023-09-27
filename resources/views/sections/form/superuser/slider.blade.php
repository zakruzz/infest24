<div class="row">
    <div class="col-lg-12 mb-2">
        <span>Bidang wajib diisi (<span class="text-danger">*</span>)</span>
    </div>
    <div class="col-lg-12 mb-3">
        <label class="form-label" for="field-image-slider">Gambar <span class="text-danger">*</span></label>
        <img class="img-preview-upload" src="{{ $this->imageSlider ? $this->imageSlider->temporaryUrl() : ($editMode ? $slider->getImageUrl() : img_default()) }}" alt="">
        <input class="form-control @error('imageSlider') is-invalid @enderror" type="file" id="field-image-slider"
               wire:model="imageSlider" wire:loading.attr="disabled" accept="image/*">
        <small class="text-muted"> <i class="fa fa-info-circle"></i> Maksimum gambar 5MB (.jpeg/.jpg/.png)</small>
        @error('imageSlider')
        <span class="invalid-feedback">
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="col-lg-12 mb-3">
        <label class="form-label" for="field-order-slider">Urutan <span class="text-danger">*</span></label>
        <select class="form-select @error('slider.order') is-invalid @enderror" id="field-order-slider"
                wire:model.defer="slider.order">
            <option value="">- Pilih urutan slider -</option>
            @for($i = 1; $i <= 10; $i++)
            <option value="{{ $i }}">Urutan ke-{{ $i }}</option>
            @endfor
        </select>
        @error('slider.order')
        <span class="invalid-feedback">
                {{ $message }}
             </span>
        @enderror
    </div>

    <div class="col-lg-12 mb-3">
        <label class="form-label" for="field-url-slider">URL</label>
        <input type="text" class="form-control @error('slider.url') is-invalid @enderror" id="field-url-slider"
               wire:model.defer="slider.url" placeholder="https://www.google.com">
        <span class="text-muted"><i class="fa fa-info-circle"></i> Isi bidang ini jika slider bisa diklik</span>
        @error('slider.url')
        <span class="invalid-feedback">
            {{ $message }}
         </span>
        @enderror
    </div>
</div>
