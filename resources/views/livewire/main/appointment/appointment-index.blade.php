@section('title', 'Buat Janji Temu Dokter -')

@section('meta_keywords', 'Buat janji temu dokter surabaya, booking klinik surabaya, klinik surabaya')

@section('styles')
    @livewireStyles
@endsection

@section('off_page')
@endsection

<div>
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="{{ route('home') }}">Beranda</a>
                    <span>Buat Janji Temu Dokter</span>
                </div>
            </div>
        </div>
    </div>

    <div class="section page-content-first mb-8">
        <div class="container">
            <div class="text-center mb-2  mb-md-3 mb-lg-4">
                <h1>Buat Janji Temu Dokter</h1>
                <div class="h-decor"></div>
            </div>
        </div>
        <div class="container mt-3 mt-lg-5">
            <div class="row">
                <div class="col-md-4 col-lg-3 column-filters">
                    <div class="column-filters-inside">
                        <div class="side-block">
                            <h3 class="side-block-title">Poli</h3>
                            <ul class="category-list">

                                @foreach($medicalServices as $service)
                                    <li>
                                        <a href="javascript:void(0)" wire:click="filterMedicalService({{ $service->id }})">
                                            {{ $service->name }}
                                        </a>
                                    </li>
                                @endforeach

                            </ul>

                            @if($medicalService)
                                <a href="javascript:void(0)" wire:click="resetFilterDoctor" class="btn btn-outline-primary mt-3 w-100">Reset Filter</a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-9">
                    <div class="filters-row align-items-center">
                        <div class="filters-row-left">
                            <span>Menampilkan {{ $doctors->count() }} hasil</span>
                        </div>
                        <div class="filters-row-right d-flex align-items-center">
                            <span>Pages:</span>
                            {{ $doctors->links() }}
                        </div>
                    </div>
                    <div class="prd-grid">

                        @if($doctors->count() == 0)
                            <div class="text-center">
                                @include('components.svg.not-found')
                            </div>
                        @endif

                        @foreach($doctors as $doctor)
                            <div class="prd">
                                <div class="prd-img">
                                    <a href="{{ route('appointment.content', $doctor->slug) }}">
                                        <img src="{{ $doctor->getImageUrl() }}" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="prd-info">
                                    <h3>
                                        <a href="{{ route('appointment.content', $doctor->slug) }}">
                                            <strong>{{ $doctor->name }}</strong>
                                        </a>
                                    </h3>
                                    <div class="text-primary"><strong>{{ @$doctor->medicalService->name }}</strong></div>
                                    <a href="{{ route('appointment.content', $doctor->slug) }}" class="btn">
                                        <i class="icon-right-arrow"></i>Buat Janji<i class="icon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@section('scripts')
    @livewireScripts
    @include('packages.js.livewire-alert')
@endsection
