<?php
namespace App\Http\Controllers;

use App\Models\Gift;
use App\Models\Line;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GiftsController extends Controller
{
    function all() {
        $gifts = Gift::orderBy('order')->get();

        if($gifts->count() > 0) {
            return response()->json(['status' => true, 'data' => $gifts], 200);
        } else {
            return response()->json(['status' => false], 400);
        }
    }
}