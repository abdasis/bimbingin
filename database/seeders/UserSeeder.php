<?php

namespace Database\Seeders;

use App\Models\Proposal;
use App\Models\Schedule;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(50)->create()->each(function ($user) {
            $student = $user->student()->save(Student::factory()->create(['user_id' => $user->id]));
            $student->proposal()->save(Proposal::factory()->create(['student_id' => $student->id]));
            $student->schedule()->save(Schedule::factory()->create(['student_id' => $student->id]));
        });
    }
}
