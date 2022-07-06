<?php

namespace App\Http\Livewire\Schedule;

use App\Models\Schedule;
use Livewire\Component;
use Livewire\WithPagination;

class LatestSchedule extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.schedule.latest-schedule',[
            'schedules' => Schedule::latest()->paginate(15)
        ])->layout('layouts.guest');
    }
}
