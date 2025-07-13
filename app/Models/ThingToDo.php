<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThingToDo extends Model
{
    use HasFactory;

    protected $fillable = [
        'region_id',
        'activity_1',
        'description_activity_1',
        'activity_2',
        'description_activity_2',
        'activity_3',
        'description_activity_3',
        'activity_4',
        'description_activity_4',
    ];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
