<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function proposal()
    {
        return $this->hasOne(Proposal::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function schedule()
    {
        return $this->hasOne(Schedule::class);
    }
}
