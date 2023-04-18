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
                        <h1>CART</h1>
			
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
                @if(!is_null(session('cart')) AND !empty(session('cart')))
                    <table id="cart" class="table table-condensed">
                        <thead>
                            <tr>
                                <th style="width:50%">Product</th>
                                <th style="width:10%">Price</th>
                                <th style="width:10%">Discount</th>
                                <th style="width:8%">Quantity</th>
                                <th style="width:22%" class="text-center">Subtotal</th>
                                <th style="width:10%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $total = 0 @endphp
                            @if(session('cart'))
                                @foreach(session('cart') as $id => $details)
                                    @php $dicount_price = $details['product_price'] * $details['product_qty']*($details['discount'] / 100) @endphp
                                    @php $price = $details['product_price'] * $details['product_qty'] @endphp
                                    @php $total += $details['product_price'] * $details['product_qty'] @endphp
                                    <tr data-id="{{ $id }}">
                                        <td data-th="Product">
                                            <div class="row">
                                                <div class="col-sm-3 hidden-xs">
                                                    <img src="{{ asset('images/productImage/' . $details['product_image']) }}" width="100" height="100" class="img-responsive"/>
                                                </div>
                                                <div class="col-sm-9">
                                                    <h5 class="nomargin">{{ $details['product_name'] }}</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td data-th="Price">Rs. {{ $details['product_price'] }}</td>
                                        <td data-th="Price">{{ $details['discount'] }} %</td>
                                        <td data-th="Quantity">
                                            <input type="number" value="{{ $details['product_qty'] }}" class="form-control quantity update-cart" />
                                        </td>
                                        <td data-th="Subtotal" class="text-center">Rs. {{ $price }}-{{$dicount_price}} = Rs. {{ $price-$dicount_price }}</td>
                                        <td class="actions" data-th="">
                                            <button class="btn btn-danger btn-sm remove-from-cart">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="6" class="text-right"><h3><strong>Total Rs. {{ $total }}</strong></h3></td>
                            </tr>
                            <tr>
                                <td colspan="6" class="text-right">
                                    <a href="{{ url('/') }}" class="btn btn-4 btn btn-info form-submit">
                                        <i class="fa fa-angle-left"></i> Continue Shopping
                                    </a>
                                    @if(Auth::check() && Auth::user()->role === 'Customer')
                                        <a href="{{route('checkout')}}" class="btn btn-4 btn btn-info form-submit">
                                            Checkout <i class="fa fa-angle-right"></i> 
                                        </a>
                                    @else
                                        <a  href="#customerLoginModal" target="customerLoginModal" class="btn btn-4 btn btn-info form-submit" data-toggle="modal">
                                            Sign In
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    @else
                    <h3 class="text-center" style="font-style: normal;">Cart Empty</h2>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Contact <<================================ -->
@endsection
@push('scripts')
<script type="text/javascript">
    $(".update-cart").change(function (e) {
        e.preventDefault();
        var ele = $(this);
        $.ajax({
            url: '{{ route('update.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                product_qty: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
                window.location.reload();
            }
        });
    });

    $(".remove-from-cart").click(function (e) {
        e.preventDefault();
        var ele = $(this);
        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.from.cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    
                    window.location.reload();
                }
            });
        }
    });
</script>
@endpush