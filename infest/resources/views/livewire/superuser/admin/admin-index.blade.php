@section('title', 'Daftar Akun Admin')
@section('styles')
    @include('packages.css.form-plugins')
@endsection
<div>

    @include('sections.modal.superuser.admin')

    <div class="content-heading pt-0">
        <h3 class="mb-0">Akun Admin</h3>
        <nav class="breadcrumb push mb-0">
            <a class="breadcrumb-item" href="{{route('superuser.dashboard')}}">Beranda</a>
            <span class="breadcrumb-item active">Akun Admin</span>
        </nav>
    </div>
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                Tabel <small>Akun Admin</small>
            </h3>
        </div>
        <div class="block-content block-content-full">
            @include('sections.table.superuser.admin')
        </div>
    </div>
    <a wire:click="create" href="javascript:void(0)" class="btn-float">
        <i class="fa fa-plus btn-float-inner"></i>
    </a>
</div>
@section('scripts')
    @include('packages.js.form-plugins')
@endsection
