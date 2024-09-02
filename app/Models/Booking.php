<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $primaryKey = 'booking_id';

    protected $fillable = [
        'user_id',
        'venue_id',
        'venue_sport_id',
        'package_id',
        'pricing_rule_id',
        'booking_date',
        'start_time',
        'end_time',
        'total_price',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function venue()
    {
        return $this->belongsTo(Venue::class, 'venue_id');
    }

    public function venueSport()
    {
        return $this->belongsTo(VenueSport::class, 'venue_sport_id');
    }
}
