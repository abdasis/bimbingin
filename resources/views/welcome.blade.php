<x-guest-layout>
    <section class="section pb-0 hero-section" id="hero" style="min-height: 100vh">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-sm-10">
                    <div class="text-center mt-lg-5 pt-5">
                        <h1 class="display-6 fw-semibold mb-3 lh-base">Selamat Datang Di <span class="text-success">Bimbingin </span></h1>
                        <p class="lead text-muted lh-base">Dengan Bimbingin pendaftaran bimbingan dengan dosen pembimbing favoritmu akan lebih mudah</p>

                        <div class="d-flex gap-2 justify-content-center mt-4">
                            <a href="{{route('proposal.create')}}" class="btn btn-primary">Daftar Sekarang <i class="ri-arrow-right-line align-middle ms-1"></i></a>
                            <a href="{{route('schedule-latest')}}" class="btn btn-danger">Lihat Jadwal <i class="ri-eye-line align-middle ms-1"></i></a>
                        </div>
                    </div>

                </div>
            </div>
            <!-- end row -->
        </div>
    </section>
</x-guest-layout>
