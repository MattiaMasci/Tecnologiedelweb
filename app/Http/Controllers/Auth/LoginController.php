<?php

namespace App\Http\Controllers\Auth;

use App\Carrello;
use App\Quantita;
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
        if (Auth::check()) {
            $iduser = Auth::id();
            if (Session::has('cart')) {
                //Cancello il coupon
                $session_coupon = Session::get('coupon');
                if (!empty($session_coupon)) {
                    foreach ($session_coupon as $key => $val) {
                        if ($val['id'] == $iduser) {
                            $trovato = 1;
                            $indice = $key;
                        }
                    }
                    if (isset($trovato)) {
                        unset($session_coupon[$indice]); // Unset the index you want
                        Session::put('coupon', $session_coupon); // Set the array again
                    }
                }

                $session = Session::get('cart');
                //echo "<pre>"; print_r($session); die;
                foreach ($session as $item) {
                    $check_exist = Carrello::where('users_id', $iduser)
                        ->where('modello_id', $item[0])
                        ->where('taglia_id', $item[1])
                        ->where('colore_id', $item[2])->first();
                    if (!empty($check_exist)) {
                        $check_quantity = Quantita::where('modello_id', $item[0])
                            ->where('taglia_id', $item[1])
                            ->where('colore_id', $item[2])->first();
                        if ($check_quantity->quantita < ($check_exist->quantita + $item[3])) {
                            Session::put('Carrello_Errore', 'Pezzi non disponibili');
                        } else {
                            $quantita = $check_exist->quantita + $item[3];
                            $check_exist->update(['quantita' => $quantita]);
                        }
                    } else {
                        $carrello = new Carrello;
                        $carrello->users_id = $iduser;
                        $carrello->modello_id = $item[0];
                        $carrello->colore_id = $item[2];
                        $carrello->taglia_id = $item[1];
                        $carrello->quantita = $item[3];
                        $carrello->save();
                    }
                }
                session()->forget('cart');
            }
        }
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
