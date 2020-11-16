<?php

namespace App\Http\Controllers\Auth;
//namespace App\Listeners;

//use Illuminate\Auth\Events\Login;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;






class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

  use AuthenticatesUsers;





    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    public function redirectTo(){
        
    // User role
    $role = Auth::user()->role; 
    
    // Check user role
    switch ($role) {
        case 'student':
                return '/school/student';
            break;
        case 'teacher':
                return '/school/teacher';
            break; 
        default:
                return '/login'; 
            break;
    }
}








// to use username as login parameter
public function username(){
  return 'username';
}


 // protected $redirectTo = RouteServiceProvider::LOG;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }



// function to redirect users after signing out
 protected function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect('/school');
    }
    
}

/**
class setUserSession{
public function handle (Login $event){
  session(
['user => $event->user->username']
  );
}

}
**/