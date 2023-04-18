@extends('backend.layouts.master')

@section('main-content')
<div class="page-wrapper">
   <div class="page-content">
      <!--breadcrumb-->
      <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
         <div class="breadcrumb-title pe-3">eCommerce</div>
         <div class="ps-3">
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb mb-0 p-0">
                  <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Orders</li>
               </ol>
            </nav>
         </div>
      </div>
      <!--end breadcrumb-->
    <div id="app"> 
	    <product-create/>
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

