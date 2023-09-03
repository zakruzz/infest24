@if($editBlogCategory || $createBlogCategory)
    <tr>
        <td class="text-center fw-semibold">
            <span>#</span>
        </td>
        <td>
            <input type="text" class="form-control w-100 @error('blogCategory.name') is-invalid @enderror"
                   wire:model.defer="blogCategory.name"
                   placeholder="Lorem Ipsum">
            @error('blogCategory.name')
                <span class="invalid-feedback">
                    {{ $message }}
                 </span>
            @enderror
        </td>
        <td class="text-center">
            <div class="btn-group">
                <button type="button" wire:click="saveBlogCategory()" wire:loading.attr="disabled"
                        class="btn btn-sm btn-success" data-bs-toggle="tooltip" title="Simpan Kategori Berita">
                    <i class="fa fa-check"></i>
                </button>
                <button type="button" wire:click="resetBlogFormCategory()" wire:loading.attr="disabled"
                        class="btn btn-sm btn-danger" data-bs-toggle="tooltip" title="Simpan Kategori Berita">
                    <i class="fa fa-times"></i>
                </button>
            </div>
        </td>
    </tr>
@endif
