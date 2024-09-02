<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    protected $primaryKey = 'equipment_id';

    protected $fillable = [
        'venue_id',
        'name',
        'quantity',
        'status',
        'last_maintenance_date',
    ];

    public function venue()
    {
        return $this->belongsTo(Venue::class, 'venue_id');
    }

    public function bookings()
    {
        return $this->hasMany(EquipmentBooking::class, 'equipment_id');
    }
}
