<?php

namespace App\Http\Livewire\Schedule;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Index extends Component
{

    public $status_edit = false;

    public function render()
    {
        return view('livewire.schedule.index');
    }
}
