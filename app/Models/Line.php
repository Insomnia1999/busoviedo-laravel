<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Line extends Model
{
    protected $table = "lines";
    protected $primaryKey = "id";
    public $timestamps = false;
}
