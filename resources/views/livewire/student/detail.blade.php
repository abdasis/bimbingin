<div>
    {{-- Be like water. --}}
    <div class="card">
        <div class="card-header border-light">
            <h3 class="card-title">Detail Mahasiswa</h3>
        </div>
        <div class="card-body">
            <h4>{{$student->name}}</h4>
            <p>{{$student->nim}}</p>
            <h5 class="my-4 text-black">Judul Proposal yang Diajukan</h5>
            <p>{{$student->proposal->title}}</p>
            <p>{{$student->proposal->proposal}}</p>
            <h5 class="my-4 text-black">Pertanyaan yang di Ajukan</h5>
            <p>{{$student->proposal->questions}}</p>
            @if($student->has('schedule'))
                <h5 class="my-4 text-black">Jadwal yang Sudah Ditentukan</h5>
                <table class="table table-sm table-responsive">
                    <tr>
                        <td>Tanggal</td>
                        <td>:</td>
                        <td>{{\Carbon\Carbon::parse($student->schedule->date)->format('d/m/Y')}}</td>
                    </tr>
                    <tr>
                        <td>Jam</td>
                        <td>:</td>
                        <td>{{$student->schedule->time}}</td>
                    </tr>
                </table>
            @endif
        </div>
    </div>
    <div class="d-flex justify-content-between my-3">
        <button class="btn btn-danger btn-border">
            <i class="ri-delete-bin-2-line"></i>
            Hapus
        </button>
        <button class="btn btn-light btn-border">
            <i class="ri-edit-2-line"></i>
            Sunting
        </button>
    </div>
</div>
