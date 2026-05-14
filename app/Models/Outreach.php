<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outreach extends Model
{
    /** @use HasFactory<\Database\Factories\OutreachFactory> */
    use HasFactory;

    protected $guarded = [];

    public function lead()
    {
        return $this->belongsTo(Lead::class);
    }

    public function outreachChannel()
    {
        return $this->belongsTo(Outreachchannel::class, 'outreach_channel_id');
    }

    protected $casts = [
    'created_at' => 'datetime',
    'updated_at' => 'datetime',
];
}
