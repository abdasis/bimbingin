<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <form wire:submit.prevent="store">
        <div class="form-gorup mb-2">
            <x-form-select  wire:model.defer="student_id" name="student_id" label="Mahasiswa">
                <option value="">Pilih Mahasiswa</option>
                @foreach($students as $student)
                    <option value="{{$student->id}}">{{$student->name}}</option>
                @endforeach
            </x-form-select>
        </div>

        <div class="form-group mb-2">
            <x-form-input wire:model.defer="date" type="date" name="date" label="Tanggal" />
        </div>

        <div class="form-group mb-2">
            <x-form-input wire:model.defer="time" type="time" name="time" label="Waktu" />
        </div>

        <div class="form-group mb-2">
            <x-form-input wire:model.defer="lecture_name" type="text" name="lecture_name" label="Dosen Pembimbing" placeholder="Masukan Nama Dosen" />
        </div>

        <div class="form-group mb-2">
            <button class="btn d-flex align-items-center float-end gap-1 btn-primary btn-border rounded">
                <i class="ri-save-line"></i>
                Simpan
            </button>
        </div>

    </form>
</div>
