<div>
    {{-- Be like water. --}}
    <div class="card">
        <div class="card-header border-0">
            <h3>Detail Mahasiswa</h3>
        </div>
        <div class="card-body">


            <fieldset class="border p-3 border-light rounded-3">
                <legend style="float: none; padding: inherit; font-size: 18px" class="w-auto text-secondary">Informasi Mahasiswa</legend>
                <table class="table table-sm table-borderless table-responsive">
                    <tr>
                        <td width="15%">Nama Mahasiswa</td>
                        <td>:</td>
                        <td>{{$student->name}}</td>
                    </tr>
                    <tr>
                        <td width="15%">Nomor Induk</td>
                        <td>:</td>
                        <td>{{$student->nim}}</td>
                    </tr>
                    <tr>
                        <td width="15%">Tanggal</td>
                        <td>:</td>
                        <td>{{$student->schedule ? \Carbon\Carbon::parse($student->schedule->date)->format('d/m/Y') : 'belum ditentukan'}}</td>
                    </tr>
                    <tr>
                        <td width="15%">Jam</td>
                        <td>:</td>
                        <td>{{$student->schedule ? $student->schedule->time : 'belum ditentukan'}}</td>
                    </tr>
                </table>
            </fieldset>

            <div class="border-bottom my-4 border-light"></div>
            <fieldset class="border p-3 border-light rounded-3">
                <legend style="float: none; padding: inherit; font-size: 18px" class="w-auto text-secondary">JUDUL YANG DI AJUKAN</legend>
                <h2>{{$student->proposal->title}}</h2>
                <p>{!! $student->proposal->proposal !!}</p>
            </fieldset>

            <fieldset class="border p-3 border-light rounded-3">
                <legend style="float: none; padding: inherit; font-size: 18px" class="w-auto text-secondary">Pertanyaan yang di Ajukan</legend>
                <p>{{$student->proposal->questions}}</p>

            </fieldset>

        </div>
    </div>
    <div class="d-flex justify-content-between my-3">
        <button class="btn btn-danger btn-border">
            <i class="ri-delete-bin-2-line"></i>
            Hapus
        </button>
        <a href="{{route('students.edit', $student->id)}}">
            <button class="btn btn-light btn-border">
                <i class="ri-edit-2-line"></i>
                Sunting
            </button>
        </a>
    </div>
</div>
