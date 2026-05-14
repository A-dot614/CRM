<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outreachchannel extends Model
{
    /** @use HasFactory<\Database\Factories\OutreachchannelFactory> */
    use HasFactory;

    protected $guarded = [];

    public function outreaches()
    {
        return $this->hasMany(Outreach::class, 'outreach_channel_id');
    }
}
