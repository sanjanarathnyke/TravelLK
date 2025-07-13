<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
       use HasFactory;

    protected $fillable = [
        'region_id',
        'attraction_no1',
        'description_attraction_no1',
        'attraction_no2',
        'description_attraction_no2',
        'attraction_no3',
        'description_attraction_no3',
        'attraction_no4',
        'description_attraction_no4',
    ];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
