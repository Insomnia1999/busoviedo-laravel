<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Line extends Model
{
    protected $table = "lines";
    protected $primaryKey = "id";
    public $timestamps = false;

    protected $maps = [
        "Nombre" => "name",
        "N_paradas" => "stopsNumber",
        "NombreLinea" => "lineName"
    ];


    protected $appends = ["name", "stopsNumber", "lineName"];
    protected $hidden = ["Nombre", "N_paradas", "NombreLinea"];

    public function getNameAttribute()
    {
        return $this->attributes['Nombre'];
    }
    public function getStopsNumberAttribute()
    {
        return $this->attributes['N_paradas'];
    }

    public function getLineNameAttribute()
    {
        return $this->attributes['NombreLinea'];
    }
}
