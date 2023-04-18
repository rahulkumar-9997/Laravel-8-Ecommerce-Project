<?php

namespace App\Http\Controllers\Frontend;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\producs_dummy;

class OrderController extends Controller
{
    public function orderSubmit(Request $request){
        $payment_option_name = $request->input('payment_option');
        if($payment_option_name=='razorpayment'){
            request()->session()->flash('razorpay_option','Razor pay Open');
            return back();
        }elseif($payment_option_name=='payu_money'){
            request()->session()->flash('payu_money_option','Payu Money Payment Options');
            return back();
        }elseif($payment_option_name=='strip_pay_option'){
            //return view('frontend.pages.strip-payment');
            return redirect()->route('stripe-payment');
            //request()->session()->flash('strip_payment_option','Strip Payment Options');
            //return back();
        }
    }

    public function stripForm()
    {
        return view('frontend.pages.strip-payment');
    }
}
