@section('title', 'Daftar Undangan')
@section('styles')
    @include('packages.css.form-plugins')
@endsection
<div>
    <div class="content-heading pt-0">
        <h3 class="mb-0">Daftar Undangan</h3>
        <nav class="breadcrumb push mb-0">
            <a class="breadcrumb-item" href="{{route('superuser.dashboard')}}">Beranda</a>
            <span class="breadcrumb-item active">Undangan</span>
        </nav>
    </div>
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                Tabel <small>Daftar Undangan</small>
            </h3>
        </div>
        <div class="block-content block-content-full">
            @include('sections.table.superuser.odl-undangan')
        </div>
    </div>
</div>
@section('scripts')
    @include('packages.js.form-plugins')
@endsection
