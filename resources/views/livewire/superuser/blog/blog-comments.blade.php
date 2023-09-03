@section('title', 'Daftar Komentar Berita')
@section('styles')
    @include('packages.css.form-plugins')
@endsection
<div>
    <div class="content-heading pt-0">
        <h3 class="mb-0">Daftar Komentar Berita</h3>
        <nav class="breadcrumb push mb-0">
            <a class="breadcrumb-item" href="{{route('superuser.dashboard')}}">Beranda</a>
            <a class="breadcrumb-item" href="{{route('superuser.blog.index')}}">Berita</a>
            <span class="breadcrumb-item active">Komentar</span>
        </nav>
    </div>
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                Tabel <small>Daftar Komentar Berita</small>
            </h3>
        </div>
        <div class="block-content block-content-full">
            <div class="row">
                <div class="col-lg-8 mb-3">
                    <input type="search" class="form-control w-100" wire:model="filterComment.query"
                           placeholder="Cari Data..." required>
                </div>
                <div class="col-lg-4 mb-3">
                    <select class="form-select w-100" wire:model="filterComment.order">
                        <option value="DESC">Urutkan dari Terbaru</option>
                        <option value="ASC">Urutkan dari Terlama</option>
                    </select>
                </div>

                @if($this->filterComment)
                    <div class="col-lg-12 mb-3">
                        <button type="button" class="btn btn-alt-primary w-100" wire:click="resetFilterComment">Reset Filter</button>
                    </div>
                @endif
            </div>
            <div class="overflow-auto">
                <table class="table table-bordered table-hover table-striped table-vcenter table-responsive" wire:loading.class="table-mode-loading">
                    <thead>
                    <tr>
                        <th class="text-center w-10">No.</th>
                        <th>Judul Berita</th>
                        <th>Isi Komentar</th>
                        <th class="text-center w-10">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>

                    @if($comments->count() == 0)
                        <tr>
                            <td class="text-center" colspan="5">Data Tidak Ditemukan :(</td>
                        </tr>
                    @endif
                    @foreach($comments as $key => $comment)
                        <tr>
                            <td class="text-center fw-semibold">
                                <span>{{ $key + 1 }}</span>
                            </td>
                            <td class="text-truncate">
                                <span>{{ $comment->blog->title }}</span>
                            </td>
                            <td>
                                <strong>{{ $comment->name }}</strong>
                                <p class="mb-0">{{ $comment->comment }}</p>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" wire:click="delete({{ $comment->id }})" wire:loading.attr="disabled"
                                            class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="Hapus Komentar">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $comments->links('components.pagination') }}
            </div>

        </div>
    </div>
</div>
@section('scripts')
    @include('packages.js.form-plugins')
@endsection
