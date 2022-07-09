<?php

namespace App\Http\Livewire\Schedule;

use App\Models\Schedule;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Edit extends Component
{
    use LivewireAlert;
    public $student_id, $date, $time, $lecture_name;

    protected $listeners = ['schduleEdit' => 'handleScheduleEdit'];

    public function handleScheduleEdit($schedule)
    {
        $schedule = Schedule::find($schedule);
        $this->student_id = $schedule->student_id;
        $this->date = $schedule->date;
        $this->time = Carbon::parse($schedule->time)->format('H:i');
        $this->lecture_name = $schedule->lecture_name;
    }

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
            $schedule = $student->schedule()->update([
                'date' => $this->date,
                'time' => $this->time,
                'lecture_name' => $this->lecture_name,
            ]);

            $this->emit('scheduleUpdated', $student);

            DB::commit();
        }catch (\Exception $exception){
            DB::rollBack();
        }
    }
    public function render()
    {
        return view('livewire.schedule.edit',[
            'students' => Student::all(),
        ]);
    }
}
