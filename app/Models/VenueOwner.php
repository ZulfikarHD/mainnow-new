<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VenueOwner extends Model
{
    use HasFactory;

    protected $primaryKey = 'owner_id';

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone_number',
        'profile_picture',
        'business_name',
    ];

    protected $hidden = [
        'password',
    ];

    public function venues()
    {
        return $this->hasMany(Venue::class, 'owner_id');
    }
}
