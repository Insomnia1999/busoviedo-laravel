<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
    protected $table = "gifts";
    protected $primaryKey = "id";
    public $timestamps = false;

}