<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="card">
        <div class="card-header border-0">
            <h4 class="d-flex align-items-center">
                <i class="ri-edit-line"></i>
                Sunting Mahasiswa
            </h4>
        </div>
        <div class="card-body">

           <div class="row">
               <div class="col-md-4">
                   <form wire:submit.prevent="update">
                       <div class="form-group mb-2">
                           <x-form-input wire:model="name" name="name" placeholder="Nama Lengkap" label="Nama Lengkap"/>
                       </div>

                       <div class="form-group mb-2">
                           <x-form-input wire:model="nim" name="nim" placeholder="Nomor Induk Mahasiswa" label="NIM"/>
                       </div>

                       <div class="form-group mt-4 float-end">
                           <button class="btn btn-primary btn-border">
                               <i class="ri-save-2-line me-1"></i>
                               Simpan
                           </button>
                       </div>

                   </form>
               </div>
           </div>
        </div>
    </div>
</div>
