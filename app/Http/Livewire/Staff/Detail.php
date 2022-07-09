<?php

namespace App\Http\Livewire\Staff;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Detail extends Component
{
    use LivewireAlert;

    public $name, $email;

    public $old_password, $new_password, $new_password_confirmation;
    public function mount()
    {
        $user = auth()->user();
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function rules()
    {
        return[
            'old_password' => 'required',
            'new_password' => 'required|confirmed|different:old_password',
            'new_password_confirmation' => 'required',
        ];
    }

    public function updateProfile()
    {
        $user = auth()->user()->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        $this->alert('success', 'Profil berhasil diubah');
    }

    public function updatePassword()
    {
        $this->validate();
        if(Hash::check($this->old_password, auth()->user()->password)) {
            auth()->user()->update([
                'password' => Hash::make($this->new_password),
            ]);

            $this->alert('success', 'Password berhasil diubah');
        } else {
            $this->alert('error', 'Password lama tidak sesuai');
        }
    }
    public function render()
    {
        return view('livewire.staff.detail');
    }
}
