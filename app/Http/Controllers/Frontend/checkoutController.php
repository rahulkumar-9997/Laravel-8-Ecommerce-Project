<?php

namespace App\Http\Controllers\Frontend;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\producs_dummy;

class checkoutController extends Controller
{
    public function checkout(){
        return view('frontend.pages.checkout');
    }

    public function checkoutFormSubmit(Request $request){
        $request->validate([
            'ship-customer-name' => 'required',
            'ship-customer-email' => 'required',
            'ship-mobile-number' => 'required',
            'ship-country' => 'required',
            'ship-state' => 'required',
            'ship-city' => 'required',
        ]);
        //$shipping_address = session()->get('shipping_address', []);
        $customer_name = $request->input('ship-customer-name');
        $customer_email = $request->input('ship-customer-email');
        $mobile_no = $request->input('ship-mobile-number');
        $country = $request->input('ship-country');
        $state = $request->input('ship-state');
        $city = $request->input('ship-city');
        $shipping_address = array(
            "ship_customer_name" => $customer_name,
            "ship_customer_email" => $customer_email,
            "ship_customer_mo_no" => $mobile_no,
            "ship_customer_country" => $country,
            "ship_customer_state" => $state,
            "ship_customer_city" => $city,
        );
        session()->put('shipping_address', $shipping_address);
        //dd($shipping_address);
        $shame_billing = $request->input('samebilling');
        if($shame_billing=='shame_billing'){
            /*Billing Address if filled*/
            $request->validate([
                'bill-customer-name' => 'required',
                'bill-customer-email' => 'required',
                'bill-customer-mobile' => 'required',
                'bill-customer-country' => 'required',
                'bill-customer-state' => 'required',
                'bill-customer-city' => 'required',
            ]);
            
            $bill_customer_name = $request->input('bill-customer-name');
            $bill_customer_email = $request->input('bill-customer-email');
            $bill_customer_mobile = $request->input('bill-customer-mobile');
            $bill_customer_country = $request->input('bill-customer-country');
            $bill_customer_state = $request->input('bill-customer-state');
            $bill_customer_city = $request->input('bill-customer-city');
            /**Store in session */
            //$billing_address = session()->get('billing_address', []);
            $billing_address['billing_address'] = [
                "bill_customer_name" => $bill_customer_name,
                "bill_customer_email" => $bill_customer_email,
                "bill_customer_mo_no" => $bill_customer_mobile,
                "bill_customer_country" => $bill_customer_country,
                "bill_customer_state" => $bill_customer_state,
                "bill_customer_city" => $bill_customer_city,
            ];
            session()->put('billing_address', $shipping_address);
        }
        return redirect()->route('preview-checkout')->with('success','redirect to success!');
    }

    public function previewCheckout(){
        return view('frontend.pages.preview-checkout');
    }
}
