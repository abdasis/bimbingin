<?php

namespace App\Http\Livewire\Schedule;

use App\Traits\ConfirmDelete;
use Carbon\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Schedule;

class Table extends DataTableComponent
{
    use ConfirmDelete;

    protected $model = Schedule::class;


    protected $listeners = [
        'scheduleCreated' => 'handleScheduleCreated',
        'scheduleUpdated' => 'handleScheduleUpdated',
        'confirmed' => 'deleteSchedule',
    ];

    public function handleScheduleUpdated()
    {
        $this->alert('success', 'Jadwal berhasil diubah');
    }

    public function handleScheduleCreated($schedule)
    {
        $this->alert('success', 'Jadwal untuk ' . $schedule['name'] . ' berhasil ditambahkan');
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function ($row) {
            return route('students.detail', $row);
        });
    }

    public function deleteSchedule()
    {
        if ($this->model_id) {
            Schedule::find($this->model_id)->delete();
            $this->alert('success', 'Jadwal berhasil dihapus');
        } else {
            $this->alert('danger', 'Jadwal gagal dihapus');
        }
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
            Column::make('Dibuat Pada', 'created_at')->format(function ($query) {
                return $query->format('d/m/Y');
            }),
            Column::make('Aksi', 'id')->format(function ($id) {
                return view('partials.btn-actions', [
                    'editModal' => $id,
                    'delete' => $id,
                ]);
            })->unclickable()
        ];
    }
}
