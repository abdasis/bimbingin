<?php

namespace App\Http\Livewire\Student;

use App\Models\Student;
use App\Traits\ConfirmDelete;
use Livewire\Component;

class Detail extends Component
{
    use ConfirmDelete;

    public $student;

    protected $listeners = ['confirmed' => 'deleteStudent'];

    public function deleteStudent()
    {
        if ($this->model_id) {
            $student = Student::find($this->model_id);
            $student->delete();
            $this->flash('success', 'Data berhasil dihapus', [],
                route('students.index')
            );
        } else {
            $this->alert('error', 'Data gagal dihapus');
        }
    }

    public function mount($student)
    {
        $this->student = Student::find($student);
    }

    public function render()
    {
        return view('livewire.student.detail');
    }
}
