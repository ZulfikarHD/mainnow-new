<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    protected $primaryKey = 'instructor_id';

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'profile_picture',
        'bio',
        'certifications',
        'specialization',
        'availability',
        'rate_per_hour',
    ];

    public function venues()
    {
        return $this->hasMany(InstructorVenue::class, 'instructor_id');
    }

    public function sports()
    {
        return $this->hasMany(InstructorSport::class, 'instructor_id');
    }
}
