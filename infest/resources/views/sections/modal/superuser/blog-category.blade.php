<div wire:ignore.self class="modal" id="modalBlogCategory" tabindex="-1" role="dialog" aria-labelledby="modalBlogCategory" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="block block-rounded shadow-none mb-0">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Kategori Berita</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content fs-sm">
                    @include('sections.table.superuser.blog-category')

                    @if(!$editBlogCategory && !$createBlogCategory)
                        <div class="text-center mb-3">
                            <button type="button" wire:click="addBlogCategory" class="btn btn-alt-success ">
                                <i class="fa fa-plus"></i> Tambah Kategori Berita
                            </button>
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
