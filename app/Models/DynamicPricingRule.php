<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DynamicPricingRule extends Model
{
    use HasFactory;

    protected $primaryKey = 'pricing_rule_id';

    protected $fillable = [
        'venue_id',
        'sport_id',
        'start_date',
        'end_date',
        'start_time',
        'end_time',
        'price_modifier',
        'is_recurring',
        'recurrence_pattern',
    ];

    public function venue()
    {
        return $this->belongsTo(Venue::class, 'venue_id');
    }

    public function sport()
    {
        return $this->belongsTo(Sport::class, 'sport_id');
    }
}
