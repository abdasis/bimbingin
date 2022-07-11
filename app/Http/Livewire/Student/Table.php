<?php

namespace App\Http\Livewire\Student;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Student;

class Table extends DataTableComponent
{
    protected $model = Student::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function ($row) {
                return route('students.detail', $row);
            });
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make('Nama Lengkap', 'name')
                ->searchable()
                ->sortable(),
            Column::make('NIM', 'nim')
                ->sortable()
                ->searchable(),
            Column::make('Judul Proposal', 'proposal.title')
                ->sortable()
                ->searchable(),
            Column::make("Mengajukan Pada", "created_at")
                ->format(function ($value) {
                    return $value->format('d/m/Y');
                })
                ->sortable(),
        ];
    }
}
