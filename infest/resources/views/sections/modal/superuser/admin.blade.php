<div wire:ignore.self class="modal" id="modalAccountAdmin" tabindex="-1" role="dialog" aria-labelledby="modalAccountAdmin" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="block block-rounded shadow-none mb-0">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Akun Admin</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content fs-sm">
                    @include('sections.form.superuser.admin')
                </div>
                <div class="block-content block-content-full block-content-sm text-end border-top">
                    <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">
                        Tutup
                    </button>
                    <button wire:click="{{ $this->editMode ? 'update' : 'store' }}" type="button" class="btn btn-alt-primary">
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
