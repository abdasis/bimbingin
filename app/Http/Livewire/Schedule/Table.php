<?php

namespace App\Http\Livewire\Schedule;

use Carbon\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Schedule;

class Table extends DataTableComponent
{
    use LivewireAlert;

    protected $model = Schedule::class;


    protected $listeners = ['scheduleCreated' => 'handleScheduleCreated'];

    public function handleScheduleCreated($schedule)
    {
        $this->alert('success', 'Jadwal untuk ' . $schedule['name'] . ' berhasil ditambahkan');
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function modalEdit($id)
    {
        $this->emit('handleEdit', $id);
    }

    public function columns(): array
    {
        return [
            Column::make("NIM", "student.nim")
                ->sortable(),
            Column::make("Nama Lengkap", "student.name")
                ->sortable(),
            Column::make("Tanggal", "date")->format(fn($tanggal) => Carbon::parse($tanggal)->format('d/m/Y'))
                ->sortable(),
            Column::make('Waktu', 'time')->sortable(),
            Column::make('Dosen Pembimbing', 'lecture_name')->sortable(),
            Column::make('Dibuat Pada', 'created_at')->format(function ($query){
                return $query->format('d/m/Y');
            }),
            Column::make('Aksi', 'id')->format(function ($id){
                return view('partials.btn-actions', [
                    'editModal' => $id
                ]);
            })
        ];
    }
}
