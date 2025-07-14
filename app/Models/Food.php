<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{

    use HasFactory;

    protected $table = 'foods_';

    protected $fillable = [
        'region_id',
        'food_name',
        'image',
        'description',
    ];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
