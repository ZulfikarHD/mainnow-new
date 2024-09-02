<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;

    protected $primaryKey = 'tournament_id';

    protected $fillable = [
        'event_id',
        'name',
        'description',
        'start_date',
        'end_date',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }

    public function matches()
    {
        return $this->hasMany(Matches::class, 'tournament_id');
    }

}
