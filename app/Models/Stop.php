<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stop extends Model
{
    protected $table = "stops";
    protected $primaryKey = "id";
    public $timestamps = false;
}
