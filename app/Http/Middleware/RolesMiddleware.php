<?php

namespace App\Http\Middleware;

use Closure;

class RolesMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
       
       if (\Auth::guard($guard)->check()) { 
    // User role
    $role = \Auth::user()->role; 
    $student = '/school/student';
    $teacher = '/school/teacher';
    $home = 'login';

    // Check user role
    switch ($role) {
        case 'student':
                return redirect($student);
            break;
        case 'teacher':
                return redirect($teacher);
            break; 
        default:
                return redirect($home); 
            break;
    }
}


        return $next($request);
    }
}
