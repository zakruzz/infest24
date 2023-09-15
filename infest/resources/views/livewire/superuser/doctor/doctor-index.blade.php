@section('title', 'Daftar Dokter')
@section('styles')
    @include('packages.css.form-plugins')
@endsection
<div>
    <div class="content-heading pt-0">
        <h3 class="mb-0">Daftar Dokter</h3>
        <nav class="breadcrumb push mb-0">
            <a class="breadcrumb-item" href="{{route('superuser.dashboard')}}">Beranda</a>
            <span class="breadcrumb-item active">Dokter</span>
        </nav>
    </div>
    <div class="block block-rounded">
        <div class="block-content block-content-full">
            <div class="row">
                <div class="col-lg-8 mb-1">
                    <input type="search" class="form-control w-100" wire:model="filterDoctor.query"
                           placeholder="Cari Data..." required>
                </div>
                <div class="col-lg-4 mb-1">
                    <select class="form-select w-100" wire:model="filterDoctor.service">
                        <option value="">Semua Poli</option>
                        @foreach($services as $service)
                            <option value="{{ $service->id }}">{{ $service->name }}</option>
                        @endforeach
                    </select>
                </div>
                @if($this->filterDoctor)
                    <div class="col-lg-12 mt-3">
                        <button type="button" class="btn btn-alt-primary w-100" wire:click="resetFilterDoctor">Reset Filter</button>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        @if($doctors->count() == 0)
            <div class="col-lg-12">
                @include('components.svg.not-found')
            </div>
        @endif
        @foreach($doctors as $key => $doctor)
            <div class="col-lg-6 col-xl-4">
                <div class="block block-rounded text-center overflow-hidden">
                    <a class="d-block bg-light fw-semibold text-uppercase py-2" href="javascript:void(0)">
                        <span class="text-secondary">{{$doctor->medicalService->name}}</span>
                    </a>
                    <div class="block-content">
                        <img class="img-avatar img-avatar96" src="{{$doctor->getImageUrl()}}" alt="">
                    </div>
                    <div class="block-content block-content-full">
                        <div class="fs-lg fw-semibold text-truncate mb-0">{{$doctor->name}}</div>
                        <div class="fw-medium text-muted">{{$doctor->email}}</div>
                        <div class="fs-xs fw-semibold text-uppercase text-muted mb-3">SIP.{{$doctor->sip}}</div>
                        <a class="btn btn-sm btn-alt-primary" href="{{ route('superuser.doctor.edit', $doctor->id) }}">
                            <i class="fa fa-pen opacity-50 me-1"></i> Sunting
                        </a>
                        <a class="btn btn-sm btn-alt-danger" href="javascript:void(0)"
                            wire:click="delete({{ $doctor->id }})">
                            <i class="fa fa-times opacity-50 me-1"></i> Hapus
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <a href="{{ route('superuser.doctor.create') }}" class="btn-float">
        <i class="fa fa-plus btn-float-inner"></i>
    </a>
</div>
@section('scripts')
    @include('packages.js.form-plugins')
@endsection
