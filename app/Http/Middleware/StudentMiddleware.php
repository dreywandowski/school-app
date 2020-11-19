<?php

namespace App\Http\Middleware;

use Closure;

class StudentMiddleware
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
         $student = '/school/student';
         $teacher = '/school/teacher';
         $home = 'login';

        if (\Auth::guard($guard)->check()) {
            if(\Auth::guard($guard)->user()->role != 'student' && \Auth::guard($guard)->user()->role = 'teacher'){

                echo "<script>alert('You do not have authorization to access this page')</script>";

                return redirect($teacher);
            }


          
          else if (\Auth::guard($guard)->user()->role != 'student'){

        echo "<script>alert('You do not have authorization to access this page')</script>";
                return redirect($home); 
          }


          else{
            return $next($request);
          }

            
            }
        }
        


    
}
