<?php

namespace App\Http\Controllers;

use App\Models\Line;
use Illuminate\Http\Request;

class LineController extends Controller
{
    function all() {
        $lines = Line::orderBy('id')->get();

        if($lines->count()) {
            return response()->json(['status' => true, 'data' => $lines], 200);
        } else {
            return response()->json(['status' => false], 400);
        }
    }
}
