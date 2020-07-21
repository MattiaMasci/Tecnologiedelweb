<?php

namespace App\Http\Controllers\Backend;

use App\Gruppo;
use App\Http\Controllers\Controller;
use App\Userhasgruppo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\User;
use Illuminate\Support\Facades\Hash;

class BackController extends Controller
{
    public function dashboard(){
        if (Session::has('adminSession')){
            //Ok
        }
        else {
            return redirect('/admin')->with('flash_message_error', 'Please login to access');
        }

        $bodyclass = '';

        return view('Backend.dashboard')->with(compact('bodyclass'));
    }

    public function logout(){
        Session::flush();
        return redirect('/admin')->with('flash_message_success', 'Logged out Successfully!');
    }

    public function settings(){
        if (Session::has('adminSession')){
            //Ok
        }
        else {
            return redirect('/admin')->with('flash_message_error', 'Please login to access');
        }
        $bodyclass = '';
        return view('Backend.settings')->with(compact('bodyclass'));
    }

    public function updPassword(Request $request){
        if (Session::has('adminSession')){
            //Ok
        }
        else {
            return redirect('/admin')->with('flash_message_error', 'Please login to access');
        }
        if ($request->isMethod('post')) {
            $data = $request->all();
            $check_password = User::where(['email' => Auth::User()->email])->first();
            $current_password = $data['current_pwd'];
            if (Hash::check($current_password, $check_password->password)){
                $password = bcrypt($data['new_pwd']);
                User::where(['email' => Auth::User()->email])->update(['password' => $password]);
                return redirect('/admin/settings')->with('flash_message_success', 'Password Updated Successfully!');
            } else {
                return redirect('/admin/settings')->with('flash_message_error', 'Incorrect Current Password!');
            }
        }
    }

    public function chkPassword(Request $request){
        if (Session::has('adminSession')){
            //Ok
        }
        else {
            return redirect('/admin')->with('flash_message_error', 'Please login to access');
        }
        $data = $request->all();
        $current_password = $data['current_pwd'];
        $gruppo = Gruppo::where('nome', 'Admin')->first();
        $userhasgruppo = Userhasgruppo::where('gruppo_id', $gruppo->id)->first();
        $check_password = User::find($userhasgruppo->users_id);
        if (Hash::check($current_password, $check_password->password)){
            echo "true";
            die;
        } else {
            echo "false";
            die;
        }
    }

    public function login(Request $request){
        if ($request->isMethod('post')){
            $data = $request->input();
            //echo "<pre>"; print_r($data); die;

            if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
                $user = User::where('email', $data['email'])->first();
                $admin = Gruppo::where('nome', 'Admin')->first();
                $userhasgruppo = Userhasgruppo::where('users_id', $user->id)->where('gruppo_id', $admin->id)->get();
                $count = count($userhasgruppo);
                if ($count == 1) {
                    Session::put('adminSession', $data['email']);
                    return redirect('/admin/dashboard');
                } else {
                    return redirect('/admin')->with('flash_message_error', 'You haven\'t Admin Privileges!');
                }
            } else {
                return redirect('/admin')->with('flash_message_error', 'Invalid Email or Password');
            }
        }
        if (Session::has('adminSession')){
            return redirect()->back();
        }
        else {
            return view('Backend.admin_login');
        }
    }
}
