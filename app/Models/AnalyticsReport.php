<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnalyticsReport extends Model
{
    use HasFactory;

    protected $primaryKey = 'report_id';

    protected $fillable = [
        'venue_id',
        'report_type',
        'generated_at',
        'data',
    ];

    public function venue()
    {
        return $this->belongsTo(Venue::class, 'venue_id');
    }

}
