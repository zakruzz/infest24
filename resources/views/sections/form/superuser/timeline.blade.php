<div class="row mt-3">
    <div class="col-lg-12">
        <div class="row mb-4">
            <label class="col-lg-2 form-label" for="field-name-timeline">Nama Timeline <span class="text-danger">*</span></label>
            <div class="col-lg-10">
                <input type="text" class="form-control @error('timeline.name') is-invalid @enderror"
                       id="field-name-timeline"
                       wire:model.defer="timeline.name"
                       placeholder="Lorem Ipsum Sit Dolor Amit">
                @error('timeline.name')
                    <span class="invalid-feedback">
                        {{ $message }}
                     </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="row mb-4">
            <label class="col-lg-2 form-label" for="field-sip-subevent">Subevent terkait <span class="text-danger">*</span></label>
            <div class="col-lg-10">
                <div class="input-group">
                    <select class="form-select @error('timeline.subevent_id') is-invalid @enderror"
                            wire:model.defer="timeline.subevent_id">
                        <option value=""> - Pilih Subevent yang Terkait -</option>
                        @foreach($subevents as $subevent)
                            <option value="{{ $subevent->id }}">{{ $subevent->name }}</option>
                        @endforeach
                    </select>
                    @error('timeline.subevent_id')
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
            <label class="col-lg-2 form-label" for="field-desc-timeline">Deskripsi Timeline <span class="text-danger">*</span></label>
            <div class="col-lg-10">
                <div wire:ignore>
                    <textarea id="field-desc-timeline" rows="5">{!! $editMode ? $timeline->desc : '' !!}</textarea>
                    <small class="text-muted"> <i class="fa fa-info-circle"></i> Shift + Enter untuk 1x enter</small>
                </div>

                @push('scripts')
                    <script>
                        ClassicEditor
                            .create(document.querySelector('#field-desc-timeline'))
                            .then(editor => {
                                editor.model.document.on('change:data', () => {
                                @this.set('timeline.desc', editor.getData(), true);
                                })
                            })
                            .catch(error => {
                                console.error(error);
                            });
                    </script>
                @endpush

                @error('timeline.desc')
                    <span class="invalid-feedback">
                        {{ $message }}
                     </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="row mb-4">
            <label class="col-lg-4 form-label" for="field-startDate-event">Start Date <span class="text-danger">*</span></label>
            <div class="col-lg-8">
                <input type="date" class="form-control @error('timeline.regist_open') is-invalid @enderror"
                       id="field-regOpen-timeline"
                       wire:model.defer="timeline.start_date">
                @error('timeline.regist_open')
                    <span class="invalid-feedback">
                        {{ $message }}
                     </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="row mb-4">
            <label class="col-lg-4 form-label" for="field-endDate-event">End Date <span class="text-danger">*</span></label>
            <div class="col-lg-8">
                <input type="date" class="form-control @error('timeline.end_date') is-invalid @enderror"
                       id="field-endDate-timeline"
                       wire:model.defer="timeline.end_date">
                @error('timeline.end_date')
                    <span class="invalid-feedback">
                        {{ $message }}
                     </span>
                @enderror
            </div>
        </div>
    </div>
</div>

