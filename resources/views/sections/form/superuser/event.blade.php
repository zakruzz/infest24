<div class="row mt-3">
    <div class="col-lg-12">
        <div class="row mb-4">
            <label class="col-lg-2 form-label" for="field-name-event">Nama Event <span class="text-danger">*</span></label>
            <div class="col-lg-10">
                <input type="text" class="form-control @error('event.name') is-invalid @enderror"
                       id="field-name-event"
                       wire:model.defer="event.name"
                       placeholder="Lorem Ipsum Sit Dolor Amit">
                @error('event.name')
                    <span class="invalid-feedback">
                        {{ $message }}
                     </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="row mb-4">
            <label class="col-lg-2 form-label" for="field-desc-event">Deskripsi Event <span class="text-danger">*</span></label>
            <div class="col-lg-10">
                <div wire:ignore>
                    <textarea id="field-desc-event" rows="5">{!! $editMode ? $event->desc : '' !!}</textarea>
                    <small class="text-muted"> <i class="fa fa-info-circle"></i> Shift + Enter untuk 1x enter</small>
                </div>

                @push('scripts')
                    <script>
                        ClassicEditor
                            .create(document.querySelector('#field-desc-event'))
                            .then(editor => {
                                editor.model.document.on('change:data', () => {
                                @this.set('event.desc', editor.getData(), true);
                                })
                            })
                            .catch(error => {
                                console.error(error);
                            });
                    </script>
                @endpush

                @error('event.desc')
                    <span class="invalid-feedback">
                        {{ $message }}
                     </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="row mb-4">
            <label class="col-lg-2 form-label" for="field-logo-event">Logo <span class="text-danger">*</span></label>
            <div class="col-lg-2">
                <img class="img-preview-upload" src="{{ $this->eventLogo ? $this->eventLogo->temporaryUrl() : ($editMode ? $event->getImageUrl() : img_default()) }}" alt="">
            </div>
            <div class="col-lg-8">
                <input class="form-control @error('eventLogo') is-invalid @enderror" type="file" id="field-logo-event"
                       wire:model="eventLogo" wire:loading.attr="disabled" accept="image/*">
                <small class="text-muted"> <i class="fa fa-info-circle"></i> Maksimum gambar 5MB (.jpeg/.jpg/.png)</small>
                @error('eventLogo')
                     <span class="invalid-feedback">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="row mb-4">
            <label class="col-lg-2 form-label" for="field-background-event">Background <span class="text-danger">*</span></label>
            <div class="col-lg-2">
                <img class="img-preview-upload" src="{{ $this->eventBackground ? $this->eventBackground->temporaryUrl() : ($editMode ? $event->getImageUrl() : img_default()) }}" alt="">
            </div>
            <div class="col-lg-8">
                <input class="form-control @error('eventBackground') is-invalid @enderror" type="file" id="field-background-event"
                       wire:model="eventBackground" wire:loading.attr="disabled" accept="image/*">
                <small class="text-muted"> <i class="fa fa-info-circle"></i> Maksimum gambar 5MB (.jpeg/.jpg/.png)</small>
                @error('eventBackground')
                     <span class="invalid-feedback">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>
    </div>
</div>

