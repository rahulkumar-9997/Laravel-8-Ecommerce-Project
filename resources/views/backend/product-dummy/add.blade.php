@extends('backend.layouts.master')

@section('main-content')
<div class="page-wrapper">
   <div class="page-content">
      <!--breadcrumb-->
      <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        
         <div class="ps-3">
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;">Manage Product</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Product
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Add Product
                    </li>
               </ol>
            </nav>
         </div>
      </div>
      <!--end breadcrumb-->
      <div class="row">
        <div class="col-12">
            
            <div class="card">
                <div class="card-body">
                    <form class="row g-3" action="{{ route('product-dummy.store') }}" method="POST" enctype="multipart/form-data">
                        <div class="col-md-6">
                            <label for="productHeadName" class="form-label">Product Head Name</label>
                            <input name="product_head_name" type="text" class="form-control" id="productHeadName">
                            @if($errors->has('product_head_name'))
							    <div class="text-danger">{{ $errors->first('product_head_name') }}</div>
							@endif
                        </div>
                        <div class="col-md-6">
                            <label for="productName" class="form-label">Product Name</label>
                            <input  name="product_name" type="text" class="form-control" id="productName">
                            @if($errors->has('product_name'))
							    <div class="text-danger">{{ $errors->first('product_name') }}</div>
							@endif
                        </div>
                        <div class="col-md-6">
                            <label for="productPrice" class="form-label">Product Price</label>
                            <input type="text"  name="product_price" class="form-control" id="productPrice">
                            @if($errors->has('product_price'))
							    <div class="text-danger">{{ $errors->first('product_price') }}</div>
							@endif
                        </div>
                        <div class="col-md-6">
                            <label for="productUnit" class="form-label">Product Unit</label>
                            <input type="text"  name="product_unit" class="form-control" id="productUnit">
                            @if($errors->has('product_unit'))
							    <div class="text-danger">{{ $errors->first('product_unit') }}</div>
							@endif
                        </div>
                        <div class="col-6">
                            <label for="productQty" class="form-label">Product Qty</label>
                            <input type="text"  name="product_qty" class="form-control" id="productQty">
                            @if($errors->has('product_qty'))
							    <div class="text-danger">{{ $errors->first('product_qty') }}</div>
							@endif
                        </div>
                        
                        <div class="col-md-6">
                            <label for="productImage" class="form-label">Product Image</label>
                            <input type="file"  name="product_image" class="form-control" id="productImage">
                        
                        </div>
                        <div class="col-md-12">
                            <label for="productDetails" class="form-label">Product Descriptions</label>
                            <textarea name="product_details"  class="form-control" id="productDetails" placeholder="Product descriptions" rows="3"></textarea>
                        </div>
                        @csrf
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary px-5">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
      
   </div>
</div>
@endsection
@push('styles')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
@endpush
@push('scripts')
<script src="{{asset('backend/plugins/Drag-And-Drop/dist/imageuploadify.min.js')}}"></script>
<script src="{{asset('backend/plugins/select2/js/select2.min.js')}}"></script>
<script>
    $('.single-select').select2({
	theme: 'bootstrap4',
	width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
	placeholder: $(this).data('placeholder'),
	allowClear: Boolean($(this).data('allow-clear')),
    });
    $('.multiple-select').select2({
	theme: 'bootstrap4',
	width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
	placeholder: $(this).data('placeholder'),
	allowClear: Boolean($(this).data('allow-clear')),
    });
</script>
<script>
    $(document).ready(function () {
	$('#image-uploadify').imageuploadify();
    })
</script>
@endpush

