@extends('frontend.layouts.master')
@section('title','Xeina Xtreme - Xtreme Checkout Review')
@section('main-content')
<!-- =====>> End Top Menu <<================================ -->
    <!-- ================================>> Page Hero <<===== -->
    <section id="page-hero" class="about-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title text-center">
                        <h1>Payment Method</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Page Hero <<================================ -->
    <!-- ================================>> Contact <<===== -->
    <section id="contact-area" class="pt-30 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                </div>
                <div class="col-lg-6 mb-5 mb-md-0">
                    <div class="p-3 p-lg-4 border">
                        <div class="shipping-address-section">
                            <h2 class="h3 mb-3 text-black checkout-h">Address Details</h2>
                            <div class="row invoice ">
                                @if(!is_null(session('shipping_address')) AND !empty(session('shipping_address')))
                                    <div class="col checkout-review">
                                        @php
                                            $shipping_address = session('shipping_address');
                                        
                                        @endphp
                                        <p class="mb-1 text-dark">
                                            <strong>Shipping Address</strong><hr>
                                        </p>
                                        <p class="preview-cart">
                                            <strong>Name :</strong>
                                            {{Session::get('shipping_address')['ship_customer_name']}}
                                        </p>
                                        <p class="preview-cart">
                                            <strong>Mobile :</strong>
                                            {{Session::get('shipping_address')['ship_customer_mo_no']}}
                                        </p>
                                        <p class="preview-cart">
                                            <strong>Email :</strong>
                                            {{Session::get('shipping_address')['ship_customer_email']}}
                                        </p>
                                        <p class="preview-cart">
                                            <strong>Address :</strong> 
                                            {{Session::get('shipping_address')['ship_customer_city']}}, 
                                            {{Session::get('shipping_address')['ship_customer_state']}},
                                            {{Session::get('shipping_address')['ship_customer_country']}}, 
                                        </p>
                                    </div>
                                @endif
                                @if(!is_null(session('billing_address')) AND !empty(session('billing_address')))
                                    <br>
                                    <div class="col checkout-review" style="margin-top: 20px;">
                                        @php
                                            $billing_address = session('billing_address');
                                        
                                        @endphp
                                        <p class="mb-1 text-dark">
                                            <strong>Billing Address</strong><hr>
                                        </p>
                                        <p class="preview-cart">
                                            <strong>Name :</strong>
                                            {{Session::get('billing_address')['bill_customer_name']}}
                                        </p>
                                        <p class="preview-cart">
                                            <strong>Mobile :</strong>
                                            {{Session::get('billing_address')['bill_customer_mo_no']}}
                                        </p>
                                        <p class="preview-cart">
                                            <strong>Email :</strong>
                                            {{Session::get('billing_address')['bill_customer_email']}}
                                        </p>
                                        <p class="preview-cart">
                                            <strong>Address :</strong> 
                                            {{Session::get('billing_address')['bill_customer_city']}}, 
                                            {{Session::get('billing_address')['bill_customer_state']}},
                                            {{Session::get('billing_address')['bill_customer_country']}}, 
                                        </p>
                                    </div>
                                @else
                                    <div class="col checkout-review">
                                        @php
                                            $shipping_address = session('shipping_address');
                                        
                                        @endphp
                                        <p class="mb-1 text-dark"><br>
                                            <strong>Billing Address</strong><hr>
                                        </p>
                                        <p class="preview-cart">
                                            <strong>Name :</strong>
                                            {{Session::get('shipping_address')['ship_customer_name']}}
                                        </p>
                                        <p class="preview-cart">
                                            <strong>Mobile :</strong>
                                            {{Session::get('shipping_address')['ship_customer_mo_no']}}
                                        </p>
                                        <p class="preview-cart">
                                            <strong>Email :</strong>
                                            {{Session::get('shipping_address')['ship_customer_email']}}
                                        </p>
                                        <p class="preview-cart">
                                            <strong>Address :</strong> 
                                            {{Session::get('shipping_address')['ship_customer_city']}}, 
                                            {{Session::get('shipping_address')['ship_customer_state']}},
                                            {{Session::get('shipping_address')['ship_customer_country']}}, 
                                        </p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5 mb-md-0">
                    <div class="p-3 p-lg-4 border">
                        <h2 class="h3 mb-3 text-black checkout-h">Your Order</h2>
                        <table class="table site-block-order-table mb-5">
                            <thead>
                                <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>	  
                            @php $total = 0 @endphp
                            @if(session('cart'))
                                @foreach(session('cart') as $id => $details)
                                    @php $price = $details['product_price'] * $details['product_qty'] @endphp
                                    @php 
                                        $total += $details['product_price'] * $details['product_qty']
                                       
                                    @endphp
                                    <tr>
                                        <td>{{ $details['product_name'] }}</td>
                                        <td>{{ $details['product_qty'] }}</td>
                                        <td>Rs {{$price}}</td>
                                    </tr>
                                @endforeach
                                @php
                                    
                                    $total_amount = session()->put('total_amount', $total);
                                    //dd(Session::get($total_amount)['total_amount']);
                                    
                                @endphp
                            @endif
                                <tr>
                                    <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                                    <td class="text-black font-weight-bold"></td>
                                    <td class="text-black font-weight-bold" align="right">
                                        <strong id="order-total">Rs.{{$total}}</strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table><br><hr>
                        
                        <form  action="{{ route('order.submit') }}" method="post">
                        @csrf
                            <div class="form-check payment-option">
                                <input type="radio" value="cash_payment" name="payment_option" class="form-check-input payment-radio" name="payment_method">
                                <label for="country" class="form-check-label payment-label">Cash Payment</label>
                            </div>
                            <div class="form-check payment-option">
                                <input type="radio" value="razorpayment" name="payment_option" class="form-check-input payment-radio" name="payment_method">
                                <label for="country" class="form-check-label payment-label">Razorpayment</label>
                            </div>
                            <div class="form-check payment-option">
                                <input type="radio" value="payu_money" name="payment_option" class="form-check-input payment-radio" name="payment_method">
                                <label for="country" class="form-check-label payment-label">Payu Money</label>
                            </div>
                            <div class="form-check payment-option">
                                <input type="radio" value="strip_pay_option" name="payment_option" class="form-check-input payment-radio" name="payment_method">
                                <label for="country" class="form-check-label payment-label">Strip Payment</label>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="site-btn">Place oder</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- =====>> End Contact <<================================ -->
@endsection
@push('scripts')
@if(Session::has('razorpay_option'))
    <form action="{!!route('payment')!!}" method="POST" >                        
        <script src="https://checkout.razorpay.com/v1/checkout.js"
            data-key="{{ env('RAZOR_KEY') }}"
            data-amount="{{Session::get($total_amount)['total_amount']*100}}"
            data-buttontext="Pay {{Session::get($total_amount)['total_amount']*100}} INR"
            data-name="Xeina Xtreme Pro"
            data-description="Payment"                                
            data-prefill.name=" {{Session::get('shipping_address')['ship_customer_name']}}"
            data-prefill.email="{{Session::get('shipping_address')['ship_customer_email']}}"
            data-theme.color="#ff7529">
        </script>
        <input type="hidden" name="_token" value="{!!csrf_token()!!}">
    </form>
    <script type="text/javascript">
	$(document).ready(function() {
        $('.razorpay-payment-button').click();
	});
    </script>
@endif

@if(Session::has('payu_money_option'))
    <script type="text/javascript">
        $(document).ready(function() {
            alert('payumoney');
        });
    </script>
@endif

@if(Session::has('strip_payment_option'))
    <script type="text/javascript">
        $(document).ready(function() {
            alert('strip_payment_option');
        });
    </script>
@endif
@endpush