@section('title', 'Daftar Slider')
@section('styles')
    @include('packages.css.form-plugins')
@endsection
<div>

    @include('sections.modal.superuser.slider')

    <div class="content-heading pt-0">
        <h3 class="mb-0">Daftar Slider</h3>
        <nav class="breadcrumb push mb-0">
            <a class="breadcrumb-item" href="{{route('superuser.dashboard')}}">Beranda</a>
            <span class="breadcrumb-item active">Slider</span>
        </nav>
    </div>
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                Tabel <small>Daftar Slider</small>
            </h3>
            <div class="block-options">
                <div class="block-options-item">
                    <div class="alert alert-info py-1 mb-0">
                        <small>
                            <i class="fa fa-info-circle opacity-50 me-1"></i> Maksimum 10 slider
                        </small>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-content block-content-full">
            <div class="overflow-auto">
                <table class="table table-bordered table-hover table-striped table-vcenter table-responsive" wire:loading.class="table-mode-loading">
                    <thead>
                    <tr>
                        <th class="text-center w-10">No.</th>
                        <th class="text-center w-15">Gambar</th>
                        <th>URL</th>
                        <th class="text-center w-10">Urutan</th>
                        <th class="text-center w-10">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>

                    @if($sliders->count() == 0)
                        <tr>
                            <td class="text-center" colspan="5">Data Tidak Ditemukan :(</td>
                        </tr>
                    @endif
                    @foreach($sliders as $key => $slider)
                        <tr>
                            <td class="text-center fw-semibold">
                                <span>{{ $key + 1 }}</span>
                            </td>
                            <td class="text-center">
                                <img class="img-preview-table" src="{{ $slider->getImageUrl() }}" alt="">
                            </td>
                            <td>
                                <span>{{ $slider->url }}</span>
                            </td>
                            <td class="text-center">
                                <span class="badge bg-secondary">{{ $slider->order }}</span>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" wire:click="edit({{ $slider->id }})" wire:loading.attr="disabled"
                                            class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="Sunting Slider">
                                        <i class="fa fa-pen"></i>
                                    </button>
                                    <button type="button" wire:click="delete({{ $slider->id }})" wire:loading.attr="disabled"
                                            class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="Hapus Slider">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $sliders->links('components.pagination') }}
            </div>

        </div>
    </div>
    <a wire:click="create" href="javascript:void(0)" class="btn-float">
        <i class="fa fa-plus btn-float-inner"></i>
    </a>
</div>
@section('scripts')
    @include('packages.js.form-plugins')
@endsection
