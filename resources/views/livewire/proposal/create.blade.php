<div>
    {{-- Stop trying to control. --}}
    <div class="container-fluid">
        <div class="row justify-content-center" style="margin-top: 150px">
            <div class="col-md-6">
                <div class="box-register-proposal">
                    <div class="card">
                        <div class="card-body">
                            <h4>Pendaftaran</h4>
                            <small>Silahkan isi pendaftaran utnuk memperoleh jadwal bimbingan</small>
                            <form class="mt-5" wire:submit.prevent="store">
                                <div class="form-group mb-3">
                                    <x-form-input wire:model="name" placeholder="Nama Lengkap" class="border-light"
                                        label="Nama Lengkap" name="name" />
                                </div>
                                <div class="form-group mb-3">
                                    <x-form-input wire:model="nim" placeholder="Nomor Induk Mahasiswa"
                                        class="border-light" label="NIM" name="nim" />
                                </div>
                                <div class="form-group mb-3">
                                    <x-form-input wire:model="title" placeholder="Judul Pengajuan" class="border-light"
                                        label="Judul Pengajuan" name="title" />
                                </div>
                                <div class="form-group mb-3">
                                    <x-form-input wire:model="pembimbing.0" placeholder="Masukan Nama Dosen"
                                        class="border-light" label="Pembimbing 1" name="pembimbing.0" />
                                </div>
                                <div class="form-group mb-3">
                                    <x-form-input wire:model="pembimbing.1" placeholder="Masukan Nama Dosen"
                                        class="border-light" label="Pembimbing 2" name="pembimbing.1" />
                                </div>
                                <div class="form-group mb-3">
                                    <div class="inner-form" wire:ignore>
                                        <label for="">Rumusan Masalah</label>
                                        <textarea wire:model="proposal" class="form-control" name="proposal"
                                            id="proposal" cols="30" rows="10">
                                        <p>That Kermit Gif</p>
                                    </textarea>
                                    </div>
                                    @error('proposal')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <x-form-textarea name="questions" wire:model.defer="questions"
                                        placeholder="Ada pertanyaan?" class="border-light" label="Pertanyaan" />
                                </div>
                                <div class="form-group mb-3">
                                    <button
                                        class="btn float-end btn-primary btn-border d-flex gap-1 align-items-center">
                                        <i class="ri-save-line"></i>
                                        Ajukan Sekarang!
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@push('scripts')
<script>
    tinymce.init({
            selector: '#proposal',
            plugins: 'advlist autolink lists link image charmap preview anchor pagebreak',
            toolbar_mode: 'floating',
            menubar: false,
            setup: function (editor) {
                editor.on('init', function (e) {
                    editor.setContent('<h4>Rumusan Masalah 1</h4>' +
                        '....' +
                        '<h4>Rumusan Masalah 2</h4>' +
                        '....' +
                        '<h4>Rumusan Masalah 3</h4>' +
                        '....'
                    );
                });

                editor.on('change', function (e) {
                    @this.set('proposal', editor.getContent())
                });
            }
        });
</script>
@endpush