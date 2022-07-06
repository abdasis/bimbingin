<?php

namespace App\Http\Livewire\Schedule;

use App\Models\Schedule;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Create extends Component
{
    use LivewireAlert;
    public $student_id, $date, $time, $lecture_name;

    public function rules()
    {
        return [
            'student_id' => 'required',
            'date' => 'required',
            'time' => 'required',
            'lecture_name' => 'required',
        ];
    }

    public function store()
    {
        $this->validate();

        try {
            DB::beginTransaction();
            $student = Student::find($this->student_id);
            $schedule = $student->schedule()->create([
                'date' => $this->date,
                'time' => $this->time,
                'lecture_name' => $this->lecture_name,
            ]);

            $this->emit('scheduleCreated', $student);

            $this->reset();

            DB::commit();
        }catch (\Exception $exception){
            DB::rollBack();
        }
    }
    public function render()
    {
        return view('livewire.schedule.create',[
            'students' => Student::all(),
        ]);
    }
}
