<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe;
use Session;
use Illuminate\Support\Facades\Validator;
use Stripe\Exception\CardException;
use Stripe\StripeClient;
class StripeController extends Controller
{
    /**
     * payment view
     */
    public function handleGet()
    {
        return view('frontend.pages.strip-payment');
    }
  
    public function handlePost(Request $request)
    {
        
        \Stripe\Stripe::setApiKey('sk_test_51MQofDSG0ZWXrJEr2ZuBxVt2DFKzCIAhB4xrP5KztKMzavBn9F0yXNAEDdKIH5hh5D7X6kfAOZdJH16H5CGyiuBg008r3gTQe0');
        $customer = \Stripe\Customer::create(array(
          'name' => 'test',
          'description' => 'test description',
          'email' => 'email@gmail.com',
          'source' => $request->input('stripeToken'),
           "address" => ["city" => "San Francisco", "country" => "US", "line1" => "510 Townsend St", "postal_code" => "98140", "state" => "CA"]

      ));
     
        try {
            \Stripe\Charge::create ( array (
                    "amount" => 300 * 100,
                    "currency" => "usd",
                    "customer" =>  $customer["id"],
                    "description" => "Test payment."
            ) );
            Session::flash ( 'success-message', 'Payment done successfully !' );
            return view ( 'stripe-payment' );
        } catch ( \Stripe\Error\Card $e ) {
            Session::flash ( 'fail-message', $e->get_message() );
            return view ( 'stripe-payment' );
        }
        // $payment_intent = \Stripe\PaymentIntent::create([
		// 	'description' => 'Stripe Test Payment',
		// 	'amount' => $amount,
		// 	'currency' => 'USD',
		// 	'description' => 'Xeina Xtreme Pro',
		// 	'payment_method_types' => ['card'],
		// ]);
        // $paymenyResponse = $payment_intent->jsonSerialize();
		// $intent = $payment_intent->client_secret;
        // $intents = $payment_intent->status ;
        // dd($paymenyResponse);
        
        
       
        return redirect('stripe-payment')->with('success', 'Payment Successful!');
    }
}