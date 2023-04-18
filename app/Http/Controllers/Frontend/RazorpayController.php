<?php
namespace App\Http\Controllers\Frontend;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Session;
use Redirect;

class RazorpayController extends Controller
{
    public function payment(Request $request)
    {        
        $input = $request->all(); 
        //dd($input);       
        $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));
        $payment = $api->payment->fetch($input['razorpay_payment_id']);
        if(count($input)  && !empty($input['razorpay_payment_id'])) 
        {
            try 
            {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount'])); 
                dd($response);
            } 
            catch (\Exception $e) 
            {
                return  $e->getMessage();
                \Session::put('error',$e->getMessage());
                return redirect()->back();
            }            
        }
        return redirect()->back()->with('success', 'Payment successful, your order will be despatched in the next 48 hours.!');
        //session()->flash('success', 'Payment successful, your order will be despatched in the next 48 hours.');
        //return redirect()->back();
    }
}