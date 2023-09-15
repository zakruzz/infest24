<div class="row">
    <div class="col-lg-6 mb-3">
        <input type="search" class="form-control w-100" wire:model="filterBlog.query"
               placeholder="Cari Data..." required>
    </div>
    <div class="col-lg-3 mb-3">
        <select class="form-select w-100" wire:model="filterBlog.category">
            <option value="">Semua Kategori</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-lg-3 mb-3">
        <select class="form-select w-100" wire:model="filterBlog.order">
            <option value="DESC">Urutkan dari Terbaru</option>
            <option value="ASC">Urutkan dari Terlama</option>
        </select>
    </div>

    @if($this->filterBlog)
        <div class="col-lg-12 mb-3">
            <button type="button" class="btn btn-alt-primary w-100" wire:click="resetFilterBlog">Reset Filter</button>
        </div>
    @endif
</div>
<div class="overflow-auto">
    <table class="table table-bordered table-hover table-striped table-vcenter table-responsive" wire:loading.class="table-mode-loading">
        <thead>
        <tr>
            <th class="text-center w-10">No.</th>
            <th class="text-center w-15">Gambar</th>
            <th>Judul</th>
            <th class="text-center">Kategori</th>
            <th class="text-center w-10">Aksi</th>
        </tr>
        </thead>
        <tbody>

        @if($blogs->count() == 0)
            <tr>
                <td class="text-center" colspan="5">Data Tidak Ditemukan :(</td>
            </tr>
        @endif
        @foreach($blogs as $key => $blog)
            <tr>
                <td class="text-center fw-semibold">
                    <span>{{ $key + 1 }}</span>
                </td>
                <td class="text-center">
                    <img class="img-preview-table" src="{{ $blog->getImageUrl() }}" alt="">
                </td>
                <td class="fw-semibold">
                    <span>{{ $blog->title }}</span>
                </td>
                <td class="text-center">
                    <span class="badge bg-secondary">{{ @$blog->category->name }}</span>
                </td>
                <td class="text-center">
                    <div class="btn-group">
                        <a href="{{ route('superuser.blog.edit', $blog->id) }}" wire:loading.attr="disabled"
                           class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="Sunting Berita">
                            <i class="fa fa-pen"></i>
                        </a>
                        <button type="button" wire:click="delete({{ $blog->id }})" wire:loading.attr="disabled"
                                class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="Hapus Berita">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $blogs->links('components.pagination') }}
</div>
