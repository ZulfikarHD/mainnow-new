<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    use HasFactory;

    protected $primaryKey = 'venue_id';

    protected $fillable = [
        'owner_id',
        'name',
        'location',
        'description',
        'capacity',
        'amenities',
    ];

    public function owner()
    {
        return $this->belongsTo(VenueOwner::class, 'owner_id');
    }

    public function sports()
    {
        return $this->hasMany(VenueSport::class, 'venue_id');
    }
}
