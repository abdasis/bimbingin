<?php

namespace App\Http\Livewire\Schedule;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Index extends Component
{

    public $status_edit = false;

    protected $listeners = ['handleEdit'];

    public function handleEdit($id)
    {
        $this->status_edit = true;
        $this->emit('schduleEdit', $id);
    }

    public function render()
    {
        return view('livewire.schedule.index');
    }
}
