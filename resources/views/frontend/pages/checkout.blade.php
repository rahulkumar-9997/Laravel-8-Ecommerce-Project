@extends('frontend.layouts.master')
@section('title','Xeina Xtreme - Xtreme Contact Us')
@section('main-content')
<!-- =====>> End Top Menu <<================================ -->
    <!-- ================================>> Page Hero <<===== -->
    <section id="page-hero" class="about-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title text-center">
                        <h1>Checkout</h1>
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
                <div class="col-lg-6 mb-5 mb-md-0">
                    <div class="p-3 p-lg-4 border">
                    
                        <form action="{{ route('checkout.submit') }}" method="post" id="checkout-form-submit">
                            <div class="shipping-address-section">
                                <h2 class="h3 mb-3 text-black checkout-h">Shipping Details</h2>
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-6 form-group">
                                        <label for="name">Name *</label>
                                        <input type="text" name="ship-customer-name" value="{{ Auth::user()->name }}" class="form-control">
                                        @if ($errors->has('ship-customer-name'))
                                            <div class="text-danger">{{ $errors->first('ship-customer-name') }}</div>
                                        @endif
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="email">Email *</label>
                                        <input type="text" name="ship-customer-email" class="form-control" value="{{ Auth::user()->email }}">
                                        @if ($errors->has('ship-customer-email'))
                                            <div class="text-danger">{{ $errors->first('ship-customer-email') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mobile-no">Mobile No. *</label>
                                    <div class="input-group">
                                        <input type="text" name="ship-mobile-number" class="form-control" value="{{ Auth::user()->phone }}">
                                       
                                    </div>
                                    @if ($errors->has('ship-mobile-number'))
                                        <div class="text-danger">{{ $errors->first('ship-mobile-number') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <h6 class="mb-1">Country *</h6>
                                    <div class="form-check">
                                        <input type="radio" value="India" class="form-check-input" name="ship-country" checked>
                                        <label for="country" class="form-check-label">India</label>
                                        @if ($errors->has('ship-country'))
                                            <div class="text-danger">{{ $errors->first('ship-country') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="state">State *</label>
                                    <input type="text" class="form-control" name="ship-state">
                                    @if ($errors->has('ship-state'))
                                        <div class="text-danger">{{ $errors->first('ship-state') }}</div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="city">City *</label>
                                    <input type="text" class="form-control" name="ship-city">
                                    @if ($errors->has('ship-city'))
                                        <div class="text-danger">{{ $errors->first('ship-city') }}</div>
                                    @endif
                                </div>
                            </div>
                            
                           
                            <div class="form-item form-item-samebilling form-type-checkbox checkbox">
                                <label class="control-label" for="edit-samebilling">
                                <input class="validation shipval form-checkbox" id="billToDifferentBtn" type="checkbox" name="samebilling" value="shame_billing">Bill to a different address</label>
                            </div>
                            <div class="d-none" id="bill_diffrent">
                                <h2 class="h3 mb-3 text-black checkout-h">Billing Details</h2>
                                <div class="form-row">
                                    <div class="col-md-6 form-group">
                                        <label for="name">Name *</label>
                                        <input type="text" name="bill-customer-name" class="form-control">
                                        @if ($errors->has('bill-customer-name'))
                                            <div class="text-danger">{{ $errors->first('bill-customer-name') }}</div>
                                        @endif
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="email">Email *</label>
                                        <input type="text" name="bill-customer-email" class="form-control">
                                        @if ($errors->has('bill-customer-email'))
                                            <div class="text-danger">{{ $errors->first('bill-customer-email') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mobile-no">Mobile No. *</label>
                                    <div class="input-group">
                                        <input type="text" name="bill-customer-mobile" class="form-control">
                                    </div>
                                    @if ($errors->has('bill-customer-mobile'))
                                        <div class="text-danger">{{ $errors->first('bill-customer-mobile') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <h6 class="mb-1">Country *</h6>
                                    <div class="form-check">
                                        <input type="radio" value="India" class="form-check-input" name="bill-customer-country" checked/>
                                        <label for="country" class="form-check-label">India</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="state">State *</label>
                                    <input type="text" class="form-control" name="bill-customer-state">
                                    @if ($errors->has('bill-customer-state'))
                                        <div class="text-danger">{{ $errors->first('bill-customer-state') }}</div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="city">City *</label>
                                    <input type="text" class="form-control" name="bill-customer-city">
                                    @if ($errors->has('bill-customer-city'))
                                        <div class="text-danger">{{ $errors->first('bill-customer-city') }}</div>
                                    @endif
                                </div>
                            </div>
                        </form>
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
                                    @php $total += $details['product_price'] * $details['product_qty'] @endphp
                                    <tr>
                                        <td>{{ $details['product_name'] }}</td>
                                        <td>{{ $details['product_qty'] }}</td>
                                        <td>Rs {{$price}}</td>
                                    </tr>
                                @endforeach
                            @endif
                                <tr>
                                    <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                                    <td class="text-black font-weight-bold"></td>
                                    <td class="text-black font-weight-bold" align="right">
                                        <strong id="order-total">Rs.{{$total}}</strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <button id="reviewCheckoutBtn" class="btn btn-4 btn btn-info btn-lg btn-block">Review Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Contact <<================================ -->
@endsection