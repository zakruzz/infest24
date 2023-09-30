<div class="row">
    <div class="col-lg-4 mb-3">
        <a href="{{ route('odlUndangan.export') }}" class="btn btn-success w-50">Export Excel</a>
    </div>
</div>
<div class="row">
    <div class="col-lg-8 mb-3">
        <input type="search" class="form-control w-100" wire:model="filterUndangan.query"
               placeholder="Cari Data..." required>
    </div>
    <div class="col-lg-4 mb-3">
        <select class="form-select w-100" wire:model="filterUndangan.order">
            <option value="DESC">Urutkan dari Terbaru</option>
            <option value="ASC">Urutkan dari Terlama</option>
        </select>
    </div>

    @if($this->filterUndangan)
        <div class="col-lg-12 mb-3">
            <button type="button" class="btn btn-alt-primary w-100" wire:click="resetFilterUndangan">Reset Filter</button>
        </div>
    @endif
</div>
<div class="overflow-auto">
    <table class="table table-bordered table-hover table-striped table-vcenter table-responsive" wire:loading.class="table-mode-loading">
        <thead>
        <tr>
            <th class="text-center w-10">No.</th>
            <th class="text-center w-15">Nama Peserta</th>
            <th class="text-center w-15">Asal Sekolah</th>
            <th class="text-center w-15">Nama Guru</th>
            <th class="text-center w-15">WA Guru</th>
        </tr>
        </thead>
        <tbody>

        @if($invites->count() == 0)
            <tr>
                <td class="text-center" colspan="5">Data Tidak Ditemukan :(</td>
            </tr>
        @endif
        @foreach($invites as $key => $undangan)
            <tr>
                <td class="text-center fw-semibold">
                    <span>{{ $key + 1 }}</span>
                </td>
                <td class="fw-semibold">
                    @foreach (json_decode($undangan->nama) as $key => $item)
                        <span>{{ ++$key }}. {!! $item !!}</span> <br>
                    @endforeach
                </td>
                <td class="fw-semibold">
                    <span>{!! $undangan->asal_sekolah !!}</span>
                </td>
                <td class="fw-semibold">
                    <span>{!! $undangan->nama_guru !!}</span>
                </td>
                <td class="fw-semibold">
                    <span>{!! $undangan->wa_guru !!}</span>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $invites->links('components.pagination') }}
</div>
