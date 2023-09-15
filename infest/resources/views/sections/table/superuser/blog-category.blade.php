<div class="overflow-auto">
    <table class="table table-bordered table-hover table-striped table-vcenter table-responsive" wire:loading.class="table-mode-loading">
        <thead>
        <tr>
            <th class="text-center w-10">No.</th>
            <th>Nama Kategori</th>
            <th class="text-center w-10">Aksi</th>
        </tr>
        </thead>
        <tbody>

        @if($categories->count() == 0)
            <tr>
                <td class="text-center" colspan="4">Data Tidak Ditemukan :(</td>
            </tr>
        @endif
        @foreach($categories as $key => $category)
            <tr>
                <td class="text-center fw-semibold">
                    <span>{{ $key + 1 }}</span>
                </td>
                <td>
                    <span>{{ $category->name }}</span>
                </td>
                <td class="text-center">
                    <div class="btn-group">
                        <button type="button" wire:click="editBlogCategory({{ $category->id }})" wire:loading.attr="disabled"
                                class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="Sunting Kategori Berita">
                            <i class="fa fa-pen"></i>
                        </button>
                        <button type="button" wire:click="deleteBlogCategory({{ $category->id }})" wire:loading.attr="disabled"
                                class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="Hapus Kategori Berita">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </td>
            </tr>
        @endforeach
        @include('sections.form.superuser.blog-category')
        </tbody>
    </table>
</div>
