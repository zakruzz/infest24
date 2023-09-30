<div class="row mt-3">
    <div class="col-lg-12">
        <div class="row mb-4">
            <label class="col-lg-2 form-label" for="field-name-subevent">Nama Subevent <span class="text-danger">*</span></label>
            <div class="col-lg-10">
                <input type="text" class="form-control @error('subevent.name') is-invalid @enderror"
                       id="field-name-subevent"
                       wire:model.defer="subevent.name"
                       placeholder="Lorem Ipsum Sit Dolor Amit">
                @error('subevent.name')
                    <span class="invalid-feedback">
                        {{ $message }}
                     </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="row mb-4">
            <label class="col-lg-2 form-label" for="field-sip-event">Event terkait <span class="text-danger">*</span></label>
            <div class="col-lg-10">
                <div class="input-group">
                    <select class="form-select @error('subevent.event_id') is-invalid @enderror"
                            wire:model.defer="subevent.event_id">
                        <option value=""> - Pilih Event yang Terkait -</option>
                        @foreach($events as $event)
                            <option value="{{ $event->id }}">{{ $event->name }}</option>
                        @endforeach
                    </select>
                    @error('subevent.event_id')
                    <span class="invalid-feedback">
                        {{ $message }}
                     </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="row mb-4">
            <label class="col-lg-2 form-label" for="field-desc-subevent">Deskripsi Subevent <span class="text-danger">*</span></label>
            <div class="col-lg-10">
                <div wire:ignore>
                    <textarea id="field-desc-subevent" rows="5">{!! $editMode ? $subevent->desc : '' !!}</textarea>
                    <small class="text-muted"> <i class="fa fa-info-circle"></i> Shift + Enter untuk 1x enter</small>
                </div>

                @push('scripts')
                    <script>
                        ClassicEditor
                            .create(document.querySelector('#field-desc-subevent'))
                            .then(editor => {
                                editor.model.document.on('change:data', () => {
                                @this.set('subevent.desc', editor.getData(), true);
                                })
                            })
                            .catch(error => {
                                console.error(error);
                            });
                    </script>
                @endpush

                @error('subevent.desc')
                    <span class="invalid-feedback">
                        {{ $message }}
                     </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="row mb-4">
            <label class="col-lg-2 form-label" for="field-guideBook-subevent">Guide Book <span class="text-danger">*</span></label>
            <div class="col-lg-10">
                <input class="form-control @error('subeventGuideBook') is-invalid @enderror" type="file" id="field-guideBook-subevent"
                       wire:model="subeventGuideBook" wire:loading.attr="disabled" accept=".pdf">
                <small class="text-muted"> <i class="fa fa-info-circle"></i> Maksimum file 20MB (.pdf)</small>
                @error('subeventGuideBook')
                     <span class="invalid-feedback">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="row mb-4">
            <label class="col-lg-2 form-label" for="field-poster-subevent">Poster <span class="text-danger">*</span></label>
            <div class="col-lg-10">
                <input class="form-control @error('subeventPoster') is-invalid @enderror" type="file" id="field-poster-subevent"
                       wire:model="subeventPoster" wire:loading.attr="disabled" accept=".pdf">
                <small class="text-muted"> <i class="fa fa-info-circle"></i> Maksimum file 20MB (.pdf)</small>
                @error('subeventPoster')
                     <span class="invalid-feedback">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="row mb-4">
            <label class="col-lg-2 form-label" for="field-logo-subevent">Logo <span class="text-danger">*</span></label>
            <div class="col-lg-2">
                <img class="img-preview-upload" src="{{ $this->subeventLogo ? $this->subeventLogo->temporaryUrl() : ($editMode ? $subevent->getImageUrl() : img_default()) }}" alt="">
            </div>
            <div class="col-lg-8">
                <input class="form-control @error('subeventLogo') is-invalid @enderror" type="file" id="field-logo-subevent"
                       wire:model="subeventLogo" wire:loading.attr="disabled" accept="image/*">
                <small class="text-muted"> <i class="fa fa-info-circle"></i> Maksimum gambar 5MB (.jpeg/.jpg/.png)</small>
                @error('subeventLogo')
                     <span class="invalid-feedback">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="row mb-4">
            <label class="col-lg-2 form-label" for="field-background-subevent">Background <span class="text-danger">*</span></label>
            <div class="col-lg-2">
                <img class="img-preview-upload" src="{{ $this->subeventBackground ? $this->subeventBackground->temporaryUrl() : ($editMode ? $subevent->getImageUrl() : img_default()) }}" alt="">
            </div>
            <div class="col-lg-8">
                <input class="form-control @error('subeventBackground') is-invalid @enderror" type="file" id="field-background-subevent"
                       wire:model="subeventBackground" wire:loading.attr="disabled" accept="image/*">
                <small class="text-muted"> <i class="fa fa-info-circle"></i> Maksimum gambar 5MB (.jpeg/.jpg/.png)</small>
                @error('subeventBackground')
                     <span class="invalid-feedback">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="row mb-4">
            <label class="col-lg-4 form-label" for="field-regOpen-event">Open Registrasi <span class="text-danger">*</span></label>
            <div class="col-lg-8">
                <input type="date" class="form-control @error('subevent.regist_open') is-invalid @enderror"
                       id="field-regOpen-subevent"
                       wire:model.defer="subevent.regist_open">
                @error('subevent.regist_open')
                    <span class="invalid-feedback">
                        {{ $message }}
                     </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="row mb-4">
            <label class="col-lg-4 form-label" for="field-regClose-event">Close Registrasi <span class="text-danger">*</span></label>
            <div class="col-lg-8">
                <input type="date" class="form-control @error('subevent.regist_close') is-invalid @enderror"
                       id="field-regClose-subevent"
                       wire:model.defer="subevent.regist_close">
                @error('subevent.regist_close')
                    <span class="invalid-feedback">
                        {{ $message }}
                     </span>
                @enderror
            </div>
        </div>
    </div>
</div>

