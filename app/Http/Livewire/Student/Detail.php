<?php

namespace App\Http\Livewire\Student;

use App\Models\Student;
use Livewire\Component;

class Detail extends Component
{
    public $student;
    public function mount( $student)
    {
        $this->student = Student::find($student);
    }
    public function render()
    {
        return view('livewire.student.detail');
    }
}
