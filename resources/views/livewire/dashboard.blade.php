<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="row">
        <div class="col-xl-4">
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-soft-primary text-primary rounded-2 fs-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase text-primary"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                                                    </span>
                        </div>
                        <div class="flex-grow-1 overflow-hidden ms-3">
                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Total Jadwal</p>
                            <div class="d-flex align-items-center mb-3">
                                <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="{{count($schedules)}}">{{count($schedules)}}</span></h4>
                            </div>
                            <p class="text-muted text-truncate mb-0">Jadwal yang dibuat saat ini</p>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div>
        </div><!-- end col -->

        <div class="col-xl-4">
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-soft-warning text-warning rounded-2 fs-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award text-warning"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
                                                    </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="text-uppercase fw-medium text-muted mb-3">Total Mahasiswa</p>
                            <div class="d-flex align-items-center mb-3">
                                <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="{{count($students)}}">{{count($students)}}</span></h4>
                            </div>
                            <p class="text-muted mb-0">Mahasiswa yang daftar bimbingan</p>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div>
        </div><!-- end col -->

        <div class="col-xl-4">
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-soft-info text-info rounded-2 fs-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock text-info"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                                                    </span>
                        </div>
                        <div class="flex-grow-1 overflow-hidden ms-3">
                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Total Admin </p>
                            <div class="d-flex align-items-center mb-3">
                                <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="1">1</span></h4>
                            </div>
                            <p class="text-muted text-truncate mb-0">Admin active saat ini</p>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div>
        </div><!-- end col -->
    </div>

    <div class="row">
        <div class="col-xl-7">
            <div class="card card-height-100">
                <div class="card-header d-flex align-items-center">
                    <h4 class="card-title flex-grow-1 mb-0 py-1">Jadwal Bimbingan Terbaru</h4>
                </div><!-- end cardheader -->
                <div class="card-body">
                    <div class="table-responsive table-card">
                        <table class="table table-nowrap table-centered align-middle">
                            <thead class="bg-light text-muted">
                            <tr>
                                <th scope="col">NIM</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Pembimbing</th>
                            </tr><!-- end tr -->
                            </thead><!-- thead -->

                            <tbody>
                            @foreach($schedules->take(7) as $key => $schedule)
                                <tr>
                                    <td class="fw-medium">{{$schedule->student->nim}}</td>
                                    <td>
                                        <a href="{{route('schedules.detail', $schedule->id)}}" class="fw-medium">{{$schedule->student->name}}</a>
                                    </td>
                                    <td>
                                        {{\Carbon\Carbon::parse($schedule->date)->format('d M Y')}}
                                    </td>
                                    <td>
                                        {{\Carbon\Carbon::parse($schedule->time)->format('H:i')}}

                                    </td>
                                    <td><span class="badge badge-soft-success">{{$schedule->lecture_name}}</span></td>
                                </tr><!-- end tr -->
                            @endforeach
                            </tbody><!-- end tbody -->
                        </table><!-- end table -->
                    </div>

                    <div class="mt-3 text-center">
                        <a href="{{route('schedules.index')}}" class="text-muted text-decoration-underline">Selengkapnya</a>
                    </div>

                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-5">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1 py-1">Mahasiswa Bimbingan Terbaru</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="table-responsive table-card">
                        <table class="table table-borderless table-nowrap table-centered align-middle mb-0">
                            <thead class="table-light text-muted">
                            <tr>
                                <th scope="col">NIM</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Tanggal Daftar</th>
                            </tr>
                            </thead><!-- end thead -->
                            <tbody>
                            @foreach($students->take(8) as $key => $student)
                                <tr>
                                    <td>
                                        {{$student->nim}}
                                    </td>
                                    <td class="text-muted">{{$student->name}}</td>
                                    <td><span class="badge badge-soft-success">{{\Carbon\Carbon::parse($student->created_at)->format('d F Y')}}</span></td>
                                </tr><!-- end -->
                            @endforeach
                            </tbody><!-- end tbody -->
                        </table><!-- end table -->
                    </div>
                    <div class="mt-3 text-center">
                        <a href="{{route('students.index')}}" class="text-muted text-decoration-underline">Selengkapnya</a>
                    </div>
                </div><!-- end cardbody -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div>
</div>
