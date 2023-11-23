<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $table = "routes";
    protected $primaryKey = "id";
    public $timestamps = false;

    protected $maps = [
        "nParadas" => "stopsNumber"
    ];


    protected $appends = ["stopsNumber"];
    protected $hidden = ["nParadas"];


    public function getStopsNumberAttribute()
    {
        return $this->attributes['nParadas'];
    }
}
