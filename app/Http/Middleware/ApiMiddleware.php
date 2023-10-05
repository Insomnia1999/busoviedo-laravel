<?php
namespace App\Http\Middleware;

use App\ApiKey;
use Closure;
use function Psy\debug;

class ApiMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next) {

        $apiToken = 'lSTVvLnPJcIuOniL2U8vj7FwuCUseRVkDjcDXqzAIu8uGfZ91vr5bJuLL4aM14x2JCt8bQUZekImURUOYYlEQ0JsNVwjGfNsPSuX5aS25ajoAyEWFh9Szmnw1McsT5BDmM935CgzsPSHETXeUQt1LdYshom4OKWPUD8jkHjmF9QH0Xbl38ywTA7bPM61rGAv5nI3Cov8w4tkV7cvGCktQEiwKxVrxGuvI8csONGsAk386ZoYk6uZMhhs1TacF6O';
        //$tokenValid = ApiKey::where('api_key', $request->header('Authorization'))->exists();
        $userToken = $request->header('Authorization');

        if ($apiToken !== $userToken) {

            return response()->json(['Status' => 'Unauthorized'], 401);
        }

        return $next($request);
    }
}