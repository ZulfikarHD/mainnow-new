<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $primaryKey = 'event_id';

    protected $fillable = [
        'venue_id',
        'owner_id',
        'name',
        'description',
        'event_date',
        'start_time',
        'end_time',
        'max_participants',
        'fee',
    ];

    public function venue()
    {
        return $this->belongsTo(Venue::class, 'venue_id');
    }

    public function owner()
    {
        return $this->belongsTo(VenueOwner::class, 'owner_id');
    }

    public function participations()
    {
        return $this->hasMany(EventParticipation::class, 'event_id');
    }
}
