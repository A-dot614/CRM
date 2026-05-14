<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    /** @use HasFactory<\Database\Factories\LeadFactory> */
    use HasFactory;
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function outreachchannel()
    {
        return $this->hasMany(Outreachchannel::class);
    }

    public function outreach()
    {
        return $this->hasMany(Outreach::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
