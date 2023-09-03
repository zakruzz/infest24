<div class="row">
    <div class="col-lg-12 mb-2">
        <span>Bidang wajib diisi (<span class="text-danger">*</span>)</span>
    </div>
    <div class="col-lg-12 mb-3">
        <label class="form-label" for="field-name-admin">Nama <span class="text-danger">*</span></label>
        <input type="text" class="form-control @error('admin.name') is-invalid @enderror" id="field-name-admin"
               wire:model="admin.name" placeholder="Andrew Rhodes" required>
        @error('admin.name')
            <span class="invalid-feedback">
                {{ $message }}
             </span>
        @enderror
    </div>
    <div class="col-lg-12 mb-3">
        <label class="form-label" for="field-email-admin">Email <span class="text-danger">*</span></label>
        <input type="text" class="form-control @error('admin.email') is-invalid @enderror" id="field-email-admin"
               wire:model="admin.email" placeholder="andrew@mail.com" required>
        @error('admin.email')
            <span class="invalid-feedback">
                {{ $message }}
             </span>
        @enderror
    </div>
    <div class="col-lg-12 mb-3">
        <label class="form-label" for="field-type-admin">Tipe Akun <span class="text-danger">*</span></label>
        <select wire:model="admin.type" class="form-select @error('admin.type') is-invalid @enderror"
                id="field-type-admin">
            <option value="">- Pilih Tipe Akun Admin -</option>
            <option value="superadmin">Superadmin</option>
            <option value="admin">Admin</option>
        </select>
        @error('admin.type')
        <span class="invalid-feedback">
                {{ $message }}
             </span>
        @enderror
    </div>
    <div class="col-lg-12 mb-3">
        <label class="form-label" for="field-password-admin">Password <span class="text-danger">*</span></label>
        <input type="text" class="form-control @error('password') is-invalid @enderror" id="field-password-admin"
               wire:model="password" placeholder="********" required>
        <span class="text-muted"><i class="fa fa-info-circle"></i> Minimum 8 karakter</span>
        @error('password')
        <span class="invalid-feedback">
                {{ $message }}
             </span>
        @enderror
    </div>
    <div class="col-lg-12 mb-3">
        <label class="form-label" for="field-confirmation_password-admin">Konfirmasi Password <span class="text-danger">*</span></label>
        <input type="text" class="form-control @error('password_confirmation') is-invalid @enderror" id="field-confirmation_password-admin"
               wire:model="password_confirmation" placeholder="********" required>
        @error('password_confirmation')
        <span class="invalid-feedback">
                {{ $message }}
             </span>
        @enderror
    </div>
</div>
