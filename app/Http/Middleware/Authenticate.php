<?php

namespace App\Http\Middleware;

use Closure;
use function foo\func;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param \Illuminate\Http\Request $request
     * @return string
     */


    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            return route('login');
        }
    }

    public function handle($request, Closure $next, ...$guards)
    {
        $routeArray = $request->route()->getAction();
        list($controller, $action) = explode('@', $routeArray['controller']);
        if (!is_object(Auth::user())) return redirect('/login');
        if (is_object(Auth::user()) && Auth::user()->role->action->where('action_controller', $controller)->where('action_method', $action)->isNotEmpty()) {
            return $next($request);
        }
          abort(403, 'sfsdfsdf');
        return;
    }



}
