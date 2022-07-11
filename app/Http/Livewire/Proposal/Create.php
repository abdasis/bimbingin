<?php

namespace App\Http\Livewire\Proposal;

use App\Models\Lecture;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Create extends Component
{
    use LivewireAlert;

    public $name, $nim, $title, $proposal, $questions, $pembimbing;

    public function rules()
    {
        return [
            'name' => 'required',
            'nim' => 'required|numeric|unique:students,nim',
            'title' => 'required|min:10',
            'proposal' => 'required|min:20',
            'pembimbing.0' => 'required',
        ];
    }

    public function store()
    {
        $this->validate();
        try {

            DB::beginTransaction();

            $user = User::create([
                'name' => $this->name,
                'email' => $this->nim . '@bimbingin.apps',
                'password' => bcrypt($this->nim),
            ]);

            $student = $user->student()->create([
                'name' => $this->name,
                'nim' => $this->nim,
            ]);

            $proposal = $student->proposal()->create([
                'title' => $this->title,
                'proposal' => $this->proposal,
                'questions' => $this->questions,
            ]);

            foreach ($this->pembimbing as $key => $pembimbing) {
                $lectures[$key] = new Lecture([
                    'name' => $pembimbing,
                ]);
            }

            $proposal->lectures()->saveMany($lectures);

            $this->flash(
                'success',
                'Proposal Anda Berhasil di Ajukan',
                [],
                route('proposal.detail', $proposal->id)
            );

            DB::commit();
        } catch (\Exception $e) {
            dd($e);
            DB::rollBack();
            throw $e;
        }
    }

    public function render()
    {
        return view('livewire.proposal.create')->layout('layouts.guest');
    }
}
