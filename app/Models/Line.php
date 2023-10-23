<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Line extends Model
{
    protected $table = "bus_lines";
    protected $primaryKey = "id";
    public $timestamps = false;

    protected $maps = [
        "line_name" => "lineName",
        "color_hex" => "colorHex"
    ];


    protected $appends = ["colorHex", "lineName"];
    protected $hidden = ["color_hex", "line_name"];

    public function getLineNameAttribute()
    {
        return $this->attributes['line_name'];
    }
    public function getColorHexAttribute()
    {
        return $this->attributes['color_hex'];
    }
}
