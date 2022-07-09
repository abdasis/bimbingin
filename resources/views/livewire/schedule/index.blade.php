<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="card">
        <div class="card-header border-0 d-flex align-items-center justify-content-between">
            <h4>Data Semua Jadwal</h4>
            <button class="btn btn-light btn-rounded btn-border waves-effect d-flex align-items-center gap-1"
                    data-bs-toggle="modal"
                    data-bs-target="#modalSchedule">
                <i class="ri-add-line"></i>
                Buat Jadwal
            </button>
        </div>
        <div class="card-body">
            <livewire:schedule.table/>
        </div>
    </div>

    <div class="modal fade" id="modalSchedule" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Jadwal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if($status_edit)
                        <livewire:schedule.edit/>
                    @else
                        <livewire:schedule.create/>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        Livewire.on('schduleEdit', (schedule) => {
            alert(schedule)
        })
    </script>
@endpush
