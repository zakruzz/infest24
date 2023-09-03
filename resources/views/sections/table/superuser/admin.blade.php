<div class="row">
    <div class="col-lg-8 mb-3">
        <input type="search" class="form-control w-100" wire:model="filterAdmin.query"
               placeholder="Cari Data..." required>
    </div>
    <div class="col-lg-4 mb-3">
        <select class="form-select w-100" wire:model="filterAdmin.type">
            <option value="">Semua Tipe Akun</option>
            <option value="superadmin">Superadmin</option>
            <option value="admin">Admin</option>
        </select>
    </div>
    @if($this->filterAdmin)
        <div class="col-lg-12 mb-3">
            <button type="button" class="btn btn-alt-primary w-100" wire:click="resetFilterAdmin">Reset Filter</button>
        </div>
    @endif
</div>
<div class="overflow-auto">
    <table class="table table-bordered table-hover table-striped table-vcenter table-responsive" wire:loading.class="table-mode-loading">
        <thead>
        <tr>
            <th class="text-center">No.</th>
            <th>Nama Lengkap</th>
            <th class="text-center">Email</th>
            <th class="text-center">Tipe Akun</th>
            <th class="text-center">Aksi</th>
        </tr>
        </thead>
        <tbody>
        @if($admins->count() == 0)
            <tr>
                <td class="text-center" colspan="5">Data Tidak Ditemukan :(</td>
            </tr>
        @endif
        @foreach($admins as $key => $admin)
            <tr>
                <td class="text-center fw-semibold">
                    <span>{{ $key + 1 }}</span>
                </td>
                <td>
                    <span>{{ $admin->name }}</span>
                </td>
                <td class="text-center">
                    <span>{{ $admin->email }}</span>
                </td>
                <td class="text-center">
                    <span class="badge bg-secondary">{{ $admin->type }}</span>
                </td>
                <td class="text-center">
                    <div class="btn-group">
                        <button type="button" wire:click="edit({{ $admin->id }})" wire:loading.attr="disabled"
                                class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="Sunting Akun">
                            <i class="fa fa-pen"></i>
                        </button>
                        <button type="button" wire:click="delete({{ $admin->id }})" wire:loading.attr="disabled"
                                class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="Hapus Akun">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $admins->links('components.pagination') }}
</div>
