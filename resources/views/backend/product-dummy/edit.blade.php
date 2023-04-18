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
                        Edit Product
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
                
                    <form class="row g-3" action="{{ route('product-dummy.update', $data['product-edit']->id) }}" method="post" enctype="multipart/form-data">
                    {{ method_field('PATCH') }}  
                        {{ csrf_field() }}
                        <div class="col-md-6">
                            <label for="productHeadName" class="form-label">Product Head Name</label>
                            <input name="product_head_name" type="text" class="form-control" value="{{$data['product-edit']->product_head_name}}" id="productHeadName">
                            @if($errors->has('product_head_name'))
							    <div class="text-danger">{{ $errors->first('product_head_name') }}</div>
							@endif
                        </div>
                        <div class="col-md-6">
                            <label for="productName" class="form-label">Product Name</label>
                            <input  name="product_name" type="text" class="form-control" value="{{$data['product-edit']->product_name}}" id="productName">
                            @if($errors->has('product_name'))
							    <div class="text-danger">{{ $errors->first('product_name') }}</div>
							@endif
                        </div>
                        <div class="col-md-6">
                            <label for="productPrice" class="form-label">Product Price</label>
                            <input type="text"  name="product_price" class="form-control" value="{{$data['product-edit']->product_price}}" id="productPrice">
                            @if($errors->has('product_price'))
							    <div class="text-danger">{{ $errors->first('product_price') }}</div>
							@endif
                        </div>
                        <div class="col-md-6">
                            <label for="productUnit" class="form-label">Product Unit</label>
                            <input type="text"  name="product_unit" class="form-control" value="{{$data['product-edit']->product_unit}}" id="productUnit">
                            @if($errors->has('product_unit'))
							    <div class="text-danger">{{ $errors->first('product_unit') }}</div>
							@endif
                        </div>
                        <div class="col-6">
                            <label for="productQty" class="form-label">Product Qty</label>
                            <input type="text"  name="product_qty" class="form-control" value="{{$data['product-edit']->product_qty}}" id="productQty">
                            @if($errors->has('product_qty'))
							    <div class="text-danger">{{ $errors->first('product_qty') }}</div>
							@endif
                        </div>
                        
                        <div class="col-md-3">
                            <label for="productImage" class="form-label">Product Image</label>
                            <input type="file"  name="product_image" class="form-control" id="productImage">
                        
                        </div>
                        <div class="col-md-3">
                            @if (isset($data['product-edit']))
                                @if ($data['product-edit']->product_image)
                                <img id="avatar"  src="{{ asset('images'.DIRECTORY_SEPARATOR.'productImage'.DIRECTORY_SEPARATOR.$data['product-edit']->product_image) }}" class="img-responsive" width="100px">
                                @endif
                                @else
                                <img id="" class="img-responsive" alt="Avatar" src="http://localhost/CollegeManagementSystem/public/assets/images/avatars/profile-pic.jpg" width="100px">
                            @endif
                        </div>
                        <div class="col-md-12">
                            <label for="productDetails" class="form-label">Product Descriptions</label>
                            <textarea name="description"  class="form-control" id="productDetails" placeholder="Product descriptions" rows="3">{{$data['product-edit']->description}}</textarea>
                            @if($errors->has('description'))
							    <div class="text-danger">{{ $errors->first('description') }}</div>
							@endif
                        </div>
                       
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary px-5">Update</button>
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
    <link rel="stylesheet" href="{{asset('backend/plugins/Drag-And-Drop/dist/imageuploadify.min.css')}}">
    <link href="{{asset('backend/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/plugins/select2/css/select2-bootstrap4.css')}}" rel="stylesheet" />
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

