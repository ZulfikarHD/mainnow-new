<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipmentBooking extends Model
{
    use HasFactory;

    protected $primaryKey = 'equipment_booking_id';

    protected $fillable = [
        'booking_id',
        'equipment_id',
        'quantity',
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id');
    }

    public function equipment()
    {
        return $this->belongsTo(Equipment::class, 'equipment_id');
    }
}
