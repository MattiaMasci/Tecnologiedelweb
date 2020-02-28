<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
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
        return view('Backend.dashboard');
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
        return view('Backend.settings');
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
        $check_password = User::where(['admin' =>'1'])->first();
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
            if (Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'admin' => '1'])) {
                Session::put('adminSession', $data['email']);
                return redirect('/admin/dashboard');
            }
                else {
                    return redirect('/admin')->with('flash_message_error', 'Invalid Email or Password');
                }
        }
        return view('Backend.admin_login');
    }
}
