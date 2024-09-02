<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificationSetting extends Model
{
    use HasFactory;

    protected $primaryKey = 'setting_id';

    protected $fillable = [
        'user_id',
        'notification_type',
        'enabled',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
