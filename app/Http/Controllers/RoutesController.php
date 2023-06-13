<?php

namespace App\Http\Controllers;

use App\Models\Route;
use Illuminate\Http\Request;

class RoutesController extends Controller
{
    function index(String $id) {
        $lines = Route::orderBy('id')->get();

        if($lines->count()) {
            return response()->json(['status' => true, 'data' => $lines], 200);
        } else {
            return response()->json(['status' => false], 400);
        }
    }
}
