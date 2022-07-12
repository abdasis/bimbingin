<x-guest-layout>
    <section class="section pb-0 hero-section text-center" id="hero" >
        <div class="row justify-content-center align-items-center" style="min-height: 75vh">
            <div class="col-md-5">
                <h1 class="display-6 fw-semibold mb-3 lh-base">Selamat Datang Di <span class="text-success">Pendaftaran Unit Layanan Statistik </span></h1>
                <div class="d-flex gap-2 justify-content-center mt-4">
                    <a href="{{route('proposal.create')}}" class="btn btn-primary">Daftar Sekarang <i class="ri-arrow-right-line align-middle ms-1"></i></a>
                    <a href="{{route('schedule-latest')}}" class="btn btn-danger">Lihat Jadwal <i class="ri-eye-line align-middle ms-1"></i></a>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
