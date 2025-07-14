<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
       use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
        'tags',
    ];

    public function attractions()
    {
        return $this->hasMany(Attraction::class);
    }

    public function thingsToDo()
    {
        return $this->hasMany(thingsToDo::class);
    }

    public function foods()
    {
        return $this->hasMany(Food::class);
    }
}
