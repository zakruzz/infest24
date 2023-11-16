<div class="row">
    <div class="col-lg-12 mb-2">
        <span><strong>INFO</strong></span>
        <br>
        <p class="pt-0">
            File abstrak menggunakan format .pdf
            <br>
            Rename file menggunakan judul ilmiah anda <br>
            <br>
            CP INSPECTION (LO) 
            <br>
            Gisty 0878-4608-6778
            <br>
            Tian 0881-5090-130

            
        </p>
    </div>
    <div class="col-lg-12 mb-3">
        <label class="form-label" for="field-file-abstrak">Abstrak <span class="text-danger">*</span></label>
        <input class="form-control @error('fileAbstrak') is-invalid @enderror" type="file" id="field-file-abstrak"
               wire:model="fileAbstrak" wire:loading.attr="disabled" accept=".pdf">
        <small class="text-muted"> <i class="fa fa-info-circle"></i> Maksimum size 5MB (.pdf)</small>
        @error('fileAbstrak')
        <span class="invalid-feedback">
            {{ $message }}
        </span>
        @enderror
    </div>
    <div class="col-lg-12 mb-3">
        <a href="{{ asset('storage/abstrak/' . $abstraks)  }}" target="_blank">{{ $abstraks }}</a>
    </div>
</div>
