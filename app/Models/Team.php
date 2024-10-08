<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $primaryKey = 'team_id';

    protected $fillable = [
        'name',
    ];

    public function members()
    {
        return $this->hasMany(UserTeam::class, 'team_id');
    }
}
