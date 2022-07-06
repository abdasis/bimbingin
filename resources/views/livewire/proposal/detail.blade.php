<div>
    {{-- The whole world belongs to you. --}}
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 100px">
            <div class="col-md-7">
                <div class="alert alert-success">
                    Selamat kamu sudah melakukan pengajuan proposal
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="d-flex align-items-center gap-1">
                            <i class="ri-book-2-line"></i>
                            Detail Proposal</h4>
                        <p>Berikut adalah informasi proposal yang kamu ajukan</p>
                        <table class="table table-borderless table-sm my-5">
                            <tr>
                                <th>Nama</th>
                                <th>:</th>
                                <th>{{$proposal->student->name}}</th>
                            </tr>
                            <tr>
                                <th>NIM</th>
                                <th>:</th>
                                <th>{{$proposal->student->nim}}</th>
                            </tr>
                            <tr>
                                <th>Pertanyaan</th>
                                <th>:</th>
                                <th>{{$proposal->questions}}</th>
                            </tr>
                        </table>
                        <h3 class="fw-bolder">{{$proposal->title}}</h3>
                        {!! $proposal->proposal !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
