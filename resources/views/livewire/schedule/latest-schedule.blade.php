<div>
    {{-- Stop trying to control. --}}
    <div class="container" style="margin-top: 150px">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title my-2 text-center">JADWAL KONSULTASI UNIT LAYANAN STATISTIK</h4>
                        <table class="table table-sm table-hover">
                            <thead class="bg-light">
                            <tr>
                                <th class="align-middle" rowspan="2">No</th>
                                <th class="align-middle" rowspan="2">Nama</th>
                                <th class="align-middle" rowspan="2">NIM</th>
                                <th class="align-middle text-center" colspan="2">Jadwal</th>
                                <th class="align-middle" rowspan="2">Dosen Pembimbing</th>
                            </tr>
                            <tr>
                                <th>Tanggal</th>
                                <th>Waktu</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($schedules as $key => $schedule)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$schedule->student->name}}</td>
                                    <td>{{$schedule->student->nim}}</td>
                                    <td>{{\Carbon\Carbon::parse($schedule->date)->format('d/m/Y')}}</td>
                                    <td>{{$schedule->time}}</td>
                                    <td>{{$schedule->lecture_name}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="my-2">
                            {{$schedules->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
