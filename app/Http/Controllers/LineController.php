<?php

namespace App\Http\Controllers;

use App\Models\Line;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LineController extends Controller
{
    function all() {
        $lines = Line::orderBy('id')->get();

        if($lines->count() > 0) {
            return response()->json(['status' => true, 'data' => $lines], 200);
        } else {
            return response()->json(['status' => false], 400);
        }
    }
}
