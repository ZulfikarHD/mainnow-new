<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstructorVenue extends Model
{
    use HasFactory;

    protected $primaryKey = 'instructor_venue_id';

    protected $fillable = [
        'instructor_id',
        'venue_id',
    ];

    public function instructor()
    {
        return $this->belongsTo(Instructor::class, 'instructor_id');
    }

    public function venue()
    {
        return $this->belongsTo(Venue::class, 'venue_id');
    }
}
