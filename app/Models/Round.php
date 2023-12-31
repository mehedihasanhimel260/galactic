<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Round extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function season()
    {
        return $this->belongsTo(Season::class, 'seasons_id');
    }
}
