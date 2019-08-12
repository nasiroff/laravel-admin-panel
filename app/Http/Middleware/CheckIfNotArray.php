<?php

namespace App\Http\Middleware;

use Closure;
use http\Env\Request;

class CheckIfNotArray
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $this->notArray($request->all()) ? $next($request): back();
    }

    private function notArray(array $input){
        foreach ($input as $item) {
            if (is_array($item)) {
                return false;
            }
        }
        return true;
    }
}
