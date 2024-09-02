<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventPackage extends Model
{
    use HasFactory;

    protected $primaryKey = 'package_id';

    protected $fillable = [
        'owner_id',
        'name',
        'description',
        'base_price',
    ];

    public function owner()
    {
        return $this->belongsTo(VenueOwner::class, 'owner_id');
    }

    public function items()
    {
        return $this->hasMany(EventPackageItem::class, 'package_id');
    }
}
