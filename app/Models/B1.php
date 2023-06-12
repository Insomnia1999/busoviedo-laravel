<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class B1 extends Model
{
    protected $table = "B1";
    protected $primaryKey = "Id";
    public $timestamps = false;

    protected $maps = [
        "Id" => "id",
        "Nombre" => "name",
        "Lineas" => "lines",
        "Orden" => "order"
    ];

    protected $appends = ["id", "name", "lines", "order"];
    protected $hidden = ['Id', 'Nombre', "Lineas", "Orden"];

    public function getIdAttribute()
    {
        return $this->attributes['Id'];
    }
    public function getNameAttribute()
    {
        return $this->attributes['Nombre'];
    }

    public function getLinesAttribute()
    {
        return $this->attributes['Lineas'];
    }

    public function getOrderAttribute()
    {
        return $this->attributes['Orden'];
    }
}
