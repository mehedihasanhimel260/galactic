<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrunamentRanking extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function round()
    {
        return $this->belongsTo(Round::class, 'round_id');
    }
    public function TeamInfo()
    {
        return $this->belongsTo(TeamInfo::class, 'team_id');
    }
    public function trunament()
    {
        return $this->belongsTo(Blog::class, 'trunament_id');
    }
}
