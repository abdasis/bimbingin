<div>
    {{-- Be like water. --}}
    <div class="card">
        <div class="card-header border-0">
            <h3>Detail Mahasiswa</h3>
        </div>
        <div class="card-body">
            <table class="table table-sm table-borderless table-responsive">
                <tr>
                    <td>Nama Mahasiswa</td>
                    <td>:</td>
                    <td>{{$student->name}}</td>
                </tr>
                <tr>
                    <td>Nomor Induk</td>
                    <td>:</td>
                    <td>{{$student->nim}}</td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td>{{$student->has('schedule') ? \Carbon\Carbon::parse($student->schedule->date)->format('d/m/Y') : 'belum ditentukan'}}</td>
                </tr>
                <tr>
                    <td>Jam</td>
                    <td>:</td>
                    <td>{{$student->has('schedule') ? $student->schedule->time : 'belum ditentukan'}}</td>
                </tr>
            </table>
            <div class="border-bottom my-4 border-light"></div>
            <h5 class="my-4 text-black">Judul Proposal yang Diajukan</h5>
            <p>{{$student->proposal->title}}</p>
            <p>{!! $student->proposal->proposal !!}</p>
            <h5 class="my-4 text-black">Pertanyaan yang di Ajukan</h5>
            <p>{{$student->proposal->questions}}</p>

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
