<div class="row mt-3">
    <div class="col-lg-12">
        <div class="row mb-4">
            <label class="col-lg-2 form-label" for="field-sip-subevent">Subevent terkait <span class="text-danger">*</span></label>
            <div class="col-lg-10">
                <div class="input-group">
                    <select class="form-select @error('faq.subevent_id') is-invalid @enderror"
                            wire:model.defer="faq.subevent_id">
                        <option value=""> - Pilih Subevent yang Terkait -</option>
                        @foreach($subevents as $subevent)
                            <option value="{{ $subevent->id }}">{{ $subevent->name }}</option>
                        @endforeach
                    </select>
                    @error('faq.subevent_id')
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
            <label class="col-lg-2 form-label" for="field-question-faq">Question <span class="text-danger">*</span></label>
            <div class="col-lg-10">
                <div wire:ignore>
                    <textarea id="field-question-faq" rows="5">{!! $editMode ? $faq->question : '' !!}</textarea>
                    <small class="text-muted"> <i class="fa fa-info-circle"></i> Shift + Enter untuk 1x enter</small>
                </div>

                @push('scripts')
                    <script>
                        ClassicEditor
                            .create(document.querySelector('#field-question-faq'))
                            .then(editor => {
                                editor.model.document.on('change:data', () => {
                                @this.set('faq.question', editor.getData(), true);
                                })
                            })
                            .catch(error => {
                                console.error(error);
                            });
                    </script>
                @endpush

                @error('faq.question')
                    <span class="invalid-feedback">
                        {{ $message }}
                     </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="row mb-4">
            <label class="col-lg-2 form-label" for="field-answer-faq">Answer <span class="text-danger">*</span></label>
            <div class="col-lg-10">
                <div wire:ignore>
                    <textarea id="field-answer-faq" rows="5">{!! $editMode ? $faq->answer : '' !!}</textarea>
                    <small class="text-muted"> <i class="fa fa-info-circle"></i> Shift + Enter untuk 1x enter</small>
                </div>

                @push('scripts')
                    <script>
                        ClassicEditor
                            .create(document.querySelector('#field-answer-faq'))
                            .then(editor => {
                                editor.model.document.on('change:data', () => {
                                @this.set('faq.answer', editor.getData(), true);
                                })
                            })
                            .catch(error => {
                                console.error(error);
                            });
                    </script>
                @endpush

                @error('faq.answer')
                    <span class="invalid-feedback">
                        {{ $message }}
                     </span>
                @enderror
            </div>
        </div>
    </div>
</div>

