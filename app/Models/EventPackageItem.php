<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventPackageItem extends Model
{
    use HasFactory;

    protected $primaryKey = 'item_id';

    protected $fillable = [
        'package_id',
        'item_type',
        'item_reference_id',
        'quantity',
    ];

    public function package()
    {
        return $this->belongsTo(EventPackage::class, 'package_id');
    }
}
