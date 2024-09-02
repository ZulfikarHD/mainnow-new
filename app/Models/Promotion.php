<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

    protected $primaryKey = 'promotion_id';

    protected $fillable = [
        'code',
        'discount_percentage',
        'start_date',
        'end_date',
        'usage_limit',
    ];

    public function users()
    {
        return $this->hasMany(UserPromotion::class, 'promotion_id');
    }
}
