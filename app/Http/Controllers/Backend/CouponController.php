<?php

namespace App\Http\Controllers\Backend;

use App\Coupon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class CouponController extends Controller
{
    public function addCoupon (Request $request) {
        if (Session::has('adminSession')){
            //Ok
        }
        else {
            return redirect('/admin')->with('flash_message_error', 'Please login to access');
        }
        if ($request->isMethod('post')) {
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;

            $exist = Coupon::where('codice', $data['coupon_code'])->first();
            if (!empty($exist)) return redirect()->back()->with('flash_message_error', 'A Coupon Code like the one you entered already exists');

            $coupon = new Coupon;
            $coupon->codice = strtoupper($data['coupon_code']);
            $coupon->importo = $data['amount'];
            $coupon->tipoimporto = $data['amount_type'];

            $newDate = date("Y-m-d", strtotime($data['mask_date']));
            $data['mask_date'] = $newDate;

            $coupon->scadenza = $data['mask_date'];
            if ($data['enable'] == 'On') $coupon->stato = 1;
            else $coupon->stato = 0;
            $coupon->save();

            return redirect('/admin/view-coupons')->with('flash_message_success', 'Coupon Added Successfully!');
        }

        $bodyclass = '';

        return view('Backend.Coupon.add-coupon')->with(compact('bodyclass'));
    }

    public function viewCoupons(){
        if (Session::has('adminSession')){
            //Ok
        }
        else {
            return redirect('/admin')->with('flash_message_error', 'Please login to access');
        }

        $coupons = Coupon::all();
        foreach($coupons as $key => $val){
            $newDate = date("m-d-Y", strtotime($val->scadenza));
            $val->scadenza = $newDate;
            if ($val->tipoimporto == 'Percentage') $val->importo .= ' %';
            else $val->importo .= ' $';
            if ($val->stato == 1) $val->stato = 'Active';
            else $val->stato = 'Inactive';
        }

        $bodyclass = '';

        return view('Backend.Coupon.view-coupons')->with(compact('bodyclass'))->with(compact('coupons'));
    }

    public function editCoupon(Request $request, $id = null){
        if (Session::has('adminSession')){
            //Ok
        }
        else {
            return redirect('/admin')->with('flash_message_error', 'Please login to access');
        }
        if ($request->isMethod('post')) {
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;

            $coupon = Coupon::find($id);

            $exist = Coupon::where('codice', $data['coupon_code'])->first();
            if (!empty($exist) && ($exist->codice != $coupon->codice)) return redirect()->back()->with('flash_message_error', 'A Coupon Code like the one you entered already exists');

            $coupon->codice = strtoupper($data['coupon_code']);
            $coupon->importo = $data['amount'];
            $coupon->tipoimporto = $data['amount_type'];

            $newDate = date("Y-m-d", strtotime($data['mask_date']));
            $data['mask_date'] = $newDate;

            $coupon->scadenza = $data['mask_date'];
            if ($data['enable'] == 'On') $coupon->stato = 1;
            else $coupon->stato = 0;
            $coupon->save();

            return redirect('/admin/view-coupons')->with('flash_message_success', 'Coupon Updated Successfully!');
        }
        $couponDetails = Coupon::find($id);

        $newDate = date("m-d-Y", strtotime($couponDetails->scadenza));
        $couponDetails->scadenza = $newDate;


        $bodyclass = '';

        return view('Backend.Coupon.edit-coupon')
            ->with(compact('bodyclass'))
            ->with(compact('couponDetails'));
    }

    public function deleteCoupon ($id = null) {
        if (Session::has('adminSession')){
            //Ok
        }
        else {
            return redirect('/admin')->with('flash_message_error', 'Please login to access');
        }

        Coupon::where(['id' => $id])->delete();

        return redirect()->back()->with('flash_message_success', 'Coupon Deleted Successfully!');
    }

}
