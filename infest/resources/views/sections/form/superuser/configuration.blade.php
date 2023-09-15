<div class="row items-push">
    <div class="col-lg-3">
        <p class="text-muted">
            Informasi dasar / identitas mengenai website ini.
        </p>
    </div>
    <div class="col-lg-7 offset-lg-1">
        <div class="mb-4">
            (<span class="text-danger">*</span>) Bidang wajib diisi
        </div>
        <div class="mb-4">
            <label class="form-label" for="config-name">Nama Website <span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('configuration.name_website') is-invalid @enderror form-control-lg" id="config-name"
                   wire:model.defer="configuration.name_website" placeholder="Tech Corp" wire:loading.attr="disabled" required>
            @error('configuration.name_website')
            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
            @enderror
        </div>
        <div class="mb-4">
            <label class="form-label" for="config-email">Email <span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('configuration.email') is-invalid @enderror form-control-lg" id="config-email"
                   wire:model.defer="configuration.email" placeholder="info@techcorp.com" wire:loading.attr="disabled" required>
            @error('configuration.email')
            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
            @enderror
        </div>
        <div class="mb-4">
            <label class="form-label" for="config-phone">Nomor Telepon (Whatsapp) <span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('configuration.phone_number') is-invalid @enderror form-control-lg" id="config-phone"
                   wire:model.defer="configuration.phone_number" placeholder="6282134******" wire:loading.attr="disabled" required>
            @error('configuration.phone_number')
            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
            @enderror
        </div>
        <div class="mb-4">
            <label class="form-label" for="config-fax">Fax</label>
            <input type="number" class="form-control @error('configuration.fax_number') is-invalid @enderror form-control-lg" id="config-fax"
                   wire:model.defer="configuration.fax_number" placeholder="138***" wire:loading.attr="disabled">
            @error('configuration.fax_number')
            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
            @enderror
        </div>
        <div class="mb-4">
            <label class="form-label" for="config-address">Alamat <span class="text-danger">*</span></label>
            <textarea class="form-control @error('configuration.address') is-invalid @enderror form-control-lg" id="config-address"
                      wire:model.defer="configuration.address" cols="30" rows="6" wire:loading.attr="disabled"></textarea>
            @error('configuration.address')
            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
            @enderror
        </div>
        <div class="mb-4">
            <label class="form-label" for="config-address-city">Kota <span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('configuration.address_city') is-invalid @enderror form-control-lg" id="config-address-city"
                   wire:model.defer="configuration.address_city" placeholder="138***" wire:loading.attr="disabled">
            @error('configuration.address_city')
            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
            @enderror
        </div>
    </div>
</div>
<div class="row items-push">
    <div class="col-lg-3">
        <p class="text-muted">
            Logo dan icon branding pada website ini.
        </p>
    </div>
    <div class="col-lg-7 offset-lg-1">
        <div class="mb-4 row">
            <div class="col-lg-3">
                <img class="img-preview-upload" src="{{ $this->fileLogo ? $this->fileLogo->temporaryUrl() : logo_website() }}" alt="">
            </div>
            <div class="col-lg-9">
                <label class="form-label" for="config-logo">Ubah Logo <span class="text-danger">*</span></label>
                <input class="form-control @error('fileLogo') is-invalid @enderror" type="file" id="config-logo"
                       wire:model="fileLogo" wire:loading.attr="disabled" accept="image/*" required>
                <small class="text-muted"> <i class="fa fa-info-circle"></i> Maksimum gambar 5MB (.jpeg/.jpg/.png)</small>
                @error('fileLogo')
                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                @enderror
            </div>
        </div>
        <div class="mb-4 row">
            <div class="col-lg-3">
                <img class="img-preview-upload" src="{{ $this->fileIcon ? $this->fileIcon->temporaryUrl() : icon_website() }}" alt="">
            </div>
            <div class="col-lg-9">
                <label class="form-label" for="config-icon">Ubah Icon <span class="text-danger">*</span></label>
                <input class="form-control @error('fileIcon') is-invalid @enderror" type="file" id="config-icon"
                       wire:model="fileIcon" wire:loading.attr="disabled" accept="image/*" required>
                <small class="text-muted"> <i class="fa fa-info-circle"></i> Maksimum gambar 5MB (.jpeg/.jpg/.png)</small>
                @error('fileIcon')
                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                @enderror
            </div>
        </div>
    </div>
</div>
<div class="row items-push">
    <div class="col-lg-3">
        <p class="text-muted">
            Meta data digunakan pada <strong>Google SEO</strong>.
        </p>
    </div>
    <div class="col-lg-7 offset-lg-1">
        <div class="mb-4">
            <label class="form-label" for="config-meta-keywords">Meta Keywords <span class="text-danger">*</span></label>
            <textarea class="form-control @error('configuration.meta_keywords') is-invalid @enderror form-control-lg" id="config-meta-keywords"
                      wire:model.defer="configuration.meta_keywords" cols="30" rows="4"
                      placeholder="Website Tech Corp, Tech Corp, Perusahaan Teknologi Indonesia" wire:loading.attr="disabled"></textarea>
            <small class="text-muted"> <i class="fa fa-info-circle"></i> Memudahkan pengunjung untuk dapat mencari website ini</small>
            @error('configuration.meta_keywords')
            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
            @enderror
        </div>
        <div class="mb-4">
            <label class="form-label" for="config-meta-desc">Meta Descriptions <span class="text-danger">*</span></label>
            <textarea class="form-control @error('configuration.meta_description') is-invalid @enderror form-control-lg" id="config-meta-desc"
                      wire:model.defer="configuration.meta_description" cols="30" rows="6" wire:loading.attr="disabled"></textarea>
            <small class="text-muted"> <i class="fa fa-info-circle"></i> Sekilas informasi pada pengunjung tentang website ini</small>
            @error('configuration.meta_description')
            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
            @enderror
        </div>
    </div>
</div>
<div class="row items-push">
    <div class="col-lg-3">
        <p class="text-muted">
            Status aktif website.
        </p>
    </div>
    <div class="col-lg-7 offset-lg-1">
        <div class="mb-4">
            <label class="form-label" for="config-address-city">Status Website <span class="text-danger">*</span></label>
            <select class="form-select @error('configuration.status') is-invalid @enderror form-select-lg" id="config-address-city"
                    wire:model.defer="configuration.status" wire:loading.attr="disabled">
                <option value="ACTIVE">Aktif</option>
                <option value="MAINTENANCE">Dalam Perbaikan</option>
            </select>
            @error('configuration.status')
            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
            @enderror
        </div>
        <div class="mb-4">
            <button type="button" wire:click="save" class="btn btn-alt-primary">
                Simpan Perubahan
            </button>
        </div>
    </div>
</div>
