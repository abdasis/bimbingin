<?php

namespace App\Http\Livewire\Student;

use App\Models\Student;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Edit extends Component
{

    use LivewireAlert;

    public $name, $nim;

    public $student;

    public function mount(Student $student)
    {
        $this->name = $student->name;
        $this->nim = $student->nim;
        $this->student = $student;
    }

    public function rules()
    {
        return[
            'name' => 'required',
            'nim' => 'numeric|unique:students,nim,'.$this->student->id
        ];
    }

    public function update()
    {
        $this->validate();
        $this->student->update([
            'name' => $this->name,
            'nim' => $this->nim
        ]);

        $this->alert('success', 'Berhasil', [
            'text' => 'Data Mahasiswa Berhasil Diperbarui',
        ]);
    }

    public function render()
    {
        return view('livewire.student.edit');
    }
}
