<?php

namespace App\Http\Livewire;

use App\Models\Schedule;
use App\Models\Student;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard',[
            'schedules' => Schedule::latest()->get(),
            'students' => Student::latest()->get(),
        ]);
    }
}
