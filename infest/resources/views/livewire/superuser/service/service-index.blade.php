@section('title', 'Daftar Layanan')
@section('styles')
    @include('packages.css.form-plugins')
@endsection
<div>

    @include('sections.modal.superuser.service')

    <div class="content-heading pt-0">
        <h3 class="mb-0">Daftar Layanan (Poli)</h3>
        <nav class="breadcrumb push mb-0">
            <a class="breadcrumb-item" href="{{route('superuser.dashboard')}}">Beranda</a>
            <span class="breadcrumb-item active">Layanan Kesehatan</span>
        </nav>
    </div>
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                Tabel <small>Layanan</small>
            </h3>
        </div>
        <div class="block-content block-content-full">
            @include('sections.table.superuser.service')
        </div>
    </div>
    <a wire:click="create" href="javascript:void(0)" class="btn-float">
        <i class="fa fa-plus btn-float-inner"></i>
    </a>
</div>
@section('scripts')
    @include('packages.js.form-plugins')
@endsection
