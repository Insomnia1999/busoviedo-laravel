<?php

namespace App\Http\Controllers;

use App\Models\A1;
use App\Models\A2;
use App\Models\B1;
use App\Models\B2;
use App\Models\C1;
use App\Models\C2;
use App\Models\D1;
use App\Models\D2;
use App\Models\E1;
use App\Models\E2;
use App\Models\F1;
use App\Models\F2;
use App\Models\G1;
use App\Models\G2;
use App\Models\H1;
use App\Models\H2;
use App\Models\J1;
use App\Models\J2;
use App\Models\K1;
use App\Models\K2;
use App\Models\L1;
use App\Models\L2;
use App\Models\M;
use App\Models\N1;
use App\Models\N2;
use App\Models\O1;
use App\Models\O2;
use App\Models\U1;
use App\Models\U2;
use App\Models\V1;
use App\Models\V2;
use Illuminate\Http\Request;
use App\Models\Stop;

class StopController extends Controller
{
    //

    function all() {
        $stops = Stop::orderBy('id')->get();

        if($stops->count()) {
            return response()->json(['status' => true, 'data' => $stops], 200);
        } else {
            return response()->json(['status' => false], 400);
        }
    }

    function a1() {
        $stops = A1::orderBy('Orden')->get();

        if($stops->count()) {
            return response()->json(['status' => true, 'data' => $stops], 200);
        } else {
            return response()->json(['status' => false], 400);
        }
    }

    function a2() {
        $stops = A2::orderBy('Orden')->get();

        if($stops->count()) {
            return response()->json(['status' => true, 'data' => $stops], 200);
        } else {
            return response()->json(['status' => false], 400);
        }
    }

    function b1() {
        $stops = B1::orderBy('Orden')->get();

        if($stops->count()) {
            return response()->json(['status' => true, 'data' => $stops], 200);
        } else {
            return response()->json(['status' => false], 400);
        }
    }

    function b2() {
        $stops = B2::orderBy('Orden')->get();

        if($stops->count()) {
            return response()->json(['status' => true, 'data' => $stops], 200);
        } else {
            return response()->json(['status' => false], 400);
        }
    }

    function c1() {
        $stops = C1::orderBy('Orden')->get();

        if($stops->count()) {
            return response()->json(['status' => true, 'data' => $stops], 200);
        } else {
            return response()->json(['status' => false], 400);
        }
    }

    function c2() {
        $stops = C2::orderBy('Orden')->get();

        if($stops->count()) {
            return response()->json(['status' => true, 'data' => $stops], 200);
        } else {
            return response()->json(['status' => false], 400);
        }
    }

    function d1() {
        $stops = D1::orderBy('Orden')->get();

        if($stops->count()) {
            return response()->json(['status' => true, 'data' => $stops], 200);
        } else {
            return response()->json(['status' => false], 400);
        }
    }

    function d2() {
        $stops = D2::orderBy('Orden')->get();

        if($stops->count()) {
            return response()->json(['status' => true, 'data' => $stops], 200);
        } else {
            return response()->json(['status' => false], 400);
        }
    }

    function e1() {
        $stops = E1::orderBy('Orden')->get();

        if($stops->count()) {
            return response()->json(['status' => true, 'data' => $stops], 200);
        } else {
            return response()->json(['status' => false], 400);
        }
    }

    function e2() {
        $stops = E2::orderBy('Orden')->get();

        if($stops->count()) {
            return response()->json(['status' => true, 'data' => $stops], 200);
        } else {
            return response()->json(['status' => false], 400);
        }
    }

    function f1() {
        $stops = F1::orderBy('Orden')->get();

        if($stops->count()) {
            return response()->json(['status' => true, 'data' => $stops], 200);
        } else {
            return response()->json(['status' => false], 400);
        }
    }

    function f2() {
        $stops = F2::orderBy('Orden')->get();

        if($stops->count()) {
            return response()->json(['status' => true, 'data' => $stops], 200);
        } else {
            return response()->json(['status' => false], 400);
        }
    }

    function g1() {
        $stops = G1::orderBy('Orden')->get();

        if($stops->count()) {
            return response()->json(['status' => true, 'data' => $stops], 200);
        } else {
            return response()->json(['status' => false], 400);
        }
    }

    function g2() {
        $stops = G2::orderBy('Orden')->get();

        if($stops->count()) {
            return response()->json(['status' => true, 'data' => $stops], 200);
        } else {
            return response()->json(['status' => false], 400);
        }
    }

    function h1() {
        $stops = H1::orderBy('Orden')->get();

        if($stops->count()) {
            return response()->json(['status' => true, 'data' => $stops], 200);
        } else {
            return response()->json(['status' => false], 400);
        }
    }

    function h2() {
        $stops = H2::orderBy('Orden')->get();

        if($stops->count()) {
            return response()->json(['status' => true, 'data' => $stops], 200);
        } else {
            return response()->json(['status' => false], 400);
        }
    }

    function j1() {
        $stops = J1::orderBy('Orden')->get();

        if($stops->count()) {
            return response()->json(['status' => true, 'data' => $stops], 200);
        } else {
            return response()->json(['status' => false], 400);
        }
    }

    function j2() {
        $stops = J2::orderBy('Orden')->get();

        if($stops->count()) {
            return response()->json(['status' => true, 'data' => $stops], 200);
        } else {
            return response()->json(['status' => false], 400);
        }
    }

    function k1() {
        $stops = K1::orderBy('Orden')->get();

        if($stops->count()) {
            return response()->json(['status' => true, 'data' => $stops], 200);
        } else {
            return response()->json(['status' => false], 400);
        }
    }

    function k2() {
        $stops = K2::orderBy('Orden')->get();

        if($stops->count()) {
            return response()->json(['status' => true, 'data' => $stops], 200);
        } else {
            return response()->json(['status' => false], 400);
        }
    }

    function L1() {
        $stops = L1::orderBy('Orden')->get();

        if($stops->count()) {
            return response()->json(['status' => true, 'data' => $stops], 200);
        } else {
            return response()->json(['status' => false], 400);
        }
    }

    function L2() {
        $stops = L2::orderBy('Orden')->get();

        if($stops->count()) {
            return response()->json(['status' => true, 'data' => $stops], 200);
        } else {
            return response()->json(['status' => false], 400);
        }
    }

    function m() {
        $stops = M::orderBy('Orden')->get();

        if($stops->count()) {
            return response()->json(['status' => true, 'data' => $stops], 200);
        } else {
            return response()->json(['status' => false], 400);
        }
    }

    function n1() {
        $stops = N1::orderBy('Orden')->get();

        if($stops->count()) {
            return response()->json(['status' => true, 'data' => $stops], 200);
        } else {
            return response()->json(['status' => false], 400);
        }
    }

    function n2() {
        $stops = N2::orderBy('Orden')->get();

        if($stops->count()) {
            return response()->json(['status' => true, 'data' => $stops], 200);
        } else {
            return response()->json(['status' => false], 400);
        }
    }

    function o1() {
        $stops = O1::orderBy('Orden')->get();

        if($stops->count()) {
            return response()->json(['status' => true, 'data' => $stops], 200);
        } else {
            return response()->json(['status' => false], 400);
        }
    }

    function o2() {
        $stops = O2::orderBy('Orden')->get();

        if($stops->count()) {
            return response()->json(['status' => true, 'data' => $stops], 200);
        } else {
            return response()->json(['status' => false], 400);
        }
    }

    function u1() {
        $stops = U1::orderBy('Orden')->get();

        if($stops->count()) {
            return response()->json(['status' => true, 'data' => $stops], 200);
        } else {
            return response()->json(['status' => false], 400);
        }
    }

    function u2() {
        $stops = U2::orderBy('Orden')->get();

        if($stops->count()) {
            return response()->json(['status' => true, 'data' => $stops], 200);
        } else {
            return response()->json(['status' => false], 400);
        }
    }

    function v1() {
        $stops = V1::orderBy('Orden')->get();

        if($stops->count()) {
            return response()->json(['status' => true, 'data' => $stops], 200);
        } else {
            return response()->json(['status' => false], 400);
        }
    }

    function v2() {
        $stops = V2::orderBy('Orden')->get();

        if($stops->count()) {
            return response()->json(['status' => true, 'data' => $stops], 200);
        } else {
            return response()->json(['status' => false], 400);
        }
    }
}
