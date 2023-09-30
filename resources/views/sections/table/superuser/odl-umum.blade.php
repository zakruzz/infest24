<div class="row">
    <div class="col-lg-4 mb-3">
        <a href="{{ route('odlUmum.export') }}" class="btn btn-success w-50">Export Excel</a>
    </div>
</div>
<div class="row">
    <div class="col-lg-8 mb-3">
        <input type="search" class="form-control w-100" wire:model="filterUmum.query"
               placeholder="Cari Data..." required>
    </div>
    <div class="col-lg-4 mb-3">
        <select class="form-select w-100" wire:model="filterUmum.order">
            <option value="DESC">Urutkan dari Terbaru</option>
            <option value="ASC">Urutkan dari Terlama</option>
        </select>
    </div>

    @if($this->filterUmum)
        <div class="col-lg-12 mb-3">
            <button type="button" class="btn btn-alt-primary w-100" wire:click="resetFilterUmum">Reset Filter</button>
        </div>
    @endif
</div>
<div class="overflow-auto">
    <table class="table table-bordered table-hover table-striped table-vcenter table-responsive" wire:loading.class="table-mode-loading">
        <thead>
        <tr>
            <th class="text-center w-10">No.</th>
            <th class="text-center w-15">Nama Peserta</th>
            <th class="text-center w-10">No WhatsApp</th>
            <th class="text-center w-15">Asal Sekolah</th>
        </tr>
        </thead>
        <tbody>

        @if($generals->count() == 0)
            <tr>
                <td class="text-center" colspan="4">Data Tidak Ditemukan :(</td>
            </tr>
        @endif
        @foreach($generals as $key => $umum)
            <tr>
                <td class="text-center fw-semibold">
                    <span>{{ $key + 1 }}</span>
                </td>
                <td class="fw-semibold">
                    <span>{!! $umum->nama !!}</span>
                </td>
                <td class="fw-semibold">
                    <span>{!! $umum->no_wa !!}</span>
                </td>
                <td class="fw-semibold">
                    <span>{!! $umum->asal_sekolah !!}</span>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $generals->links('components.pagination') }}
</div>
