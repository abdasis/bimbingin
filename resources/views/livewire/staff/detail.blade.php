<div>
    {{-- Be like water. --}}
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header border-0">
                    <h5>Detail Account</h5>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="updateProfile">
                        <div class="form-group mb-3">
                            <x-form-input name="name" label="Nama" wire:model="name"/>
                        </div>
                        <div class="form-group mb-3">
                            <x-form-input name="email" label="Email" wire:model="email"/>
                        </div>
                        <div class="form-group mb-3">
                            <button class="btn btn-primary btn-border">
                                <i class="ri-save-fill"></i>
                                Perbarui Profile
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header border-0">
                    <h5>Ganti Password</h5>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="updatePassword">
                        <div class="form-group mb-3">
                            <x-form-input name="old_password" label="Password Lama" wire:model="old_password" type="password"/>
                        </div>
                        <div class="form-group mb-3">
                            <x-form-input name="new_password" label="Password Baru" wire:model="new_password" type="password"/>
                        </div>
                        <div class="form-group mb-3">
                            <x-form-input name="new_password_confirmation" label="Konfirmasi Password Baru" wire:model="new_password_confirmation" type="password"/>
                        </div>
                        <div class="form-group mb-3">
                            <button class="btn btn-primary btn-border">
                                <i class="ri-save-fill"></i>
                                Ganti Password
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
