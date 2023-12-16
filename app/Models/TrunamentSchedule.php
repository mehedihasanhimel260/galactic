<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrunamentSchedule extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function round()
    {
        return $this->belongsTo(Round::class, 'round_id');
    }
}
