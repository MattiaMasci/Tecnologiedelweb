<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function redirectTo()
    {
        if (Session::has('wishlistcall')) {
            Session::put('url.intended', '/wishlist');
            session()->forget('wishlistcall');
            return Redirect::to('/wishlist');
        } else if (Session::has('accountcall')) {
            Session::put('url.intended', '/account');
            session()->forget('accountcall');
            return Redirect::to('/account');
        } else if (Session::has('ordercall')) {
            Session::put('url.intended', '/order');
            session()->forget('ordercall');
            return Redirect::to('/order');
        }
        Session::put('url.intended', URL::previous());
        return Redirect::to(Session::get('url.intended'));
    }

    public function check ()
    {
        if (Auth::check()) {
        // The user is logged in...
        }
    }

    public function logout()
    {
        $session = Session::get('adminSession');
        if (!empty($session)) Session::pull('adminSession');
        Auth::logout();
        return redirect('/home');
    }
}
