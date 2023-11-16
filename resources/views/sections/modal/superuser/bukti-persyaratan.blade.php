<div wire:ignore.self class="modal" id="modalBuktiPersyaratan" tabindex="-1" role="dialog" aria-labelledby="modalBuktiPersyaratan" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="block block-rounded shadow-none mb-0">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Bukti Persyaratan</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content fs-sm">
                    @if (@$ss_infest)
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <label class="form-label" for="ss_infest">Bukti Follow IG INFEST</label>
                                <div class="col-lg-12 mb-3" id="ss_infest">
                                    <a href="" target="_blank">{{ @$ss_infest }}</a>
                                </div>
                            </div>
                        </div>    
                    @endif
                    @if (@$ss_instastory)
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <label class="form-label" for="ss_instastory">Bukti Upload Instastory</label>
                                <div class="col-lg-12 mb-3" id="ss_instastory">
                                    <a href="" target="_blank">{{ @$ss_instastory }}</a>
                                </div>
                            </div>
                        </div>    
                    @endif
                    @if (@$ss_poster)
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <label class="form-label" for="ss_poster">Bukti Upload Poster</label>
                                <div class="col-lg-12 mb-3" id="ss_poster">
                                    <a href="" target="_blank">{{ @$ss_poster }}</a>
                                </div>
                            </div>
                        </div>    
                    @endif
                    @if (@$ss_twibbon)
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <label class="form-label" for="ss_twibbon">Bukti Upload Twibbon</label>
                                <div class="col-lg-12 mb-3" id="ss_twibbon">
                                    <a href="" target="_blank">{{ @$ss_twibbon }}</a>
                                </div>
                            </div>
                        </div>    
                    @endif
                    @if (@$link_drive)
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <label class="form-label" for="link_drive">Link Bukti Melalui Google Drive</label>
                                <div class="col-lg-12 mb-3" id="link_drive">
                                    <a href="" target="_blank">{{ @$link_drive }}</a>
                                </div>
                            </div>
                        </div>    
                    @endif
                </div>
                <div class="block-content block-content-full block-content-sm text-end border-top">
                    <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <script>
    window.addEventListener('showModalBuktiPersyaratan', e => {
        console.log({{ @$data->ss_infest }});
    })
</script> --}}
