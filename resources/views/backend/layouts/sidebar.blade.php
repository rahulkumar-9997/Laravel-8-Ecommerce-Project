<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
	<div>
	    <img src="{{asset('backend/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
	</div>
	<div>
	    <h4 class="logo-text">Rocker</h4>
	</div>
	<div class="toggle-icon ms-auto">
	    <i class='bx bx-arrow-to-left'></i>
	</div>
    </div>
  <!--navigation-->
  <ul class="metismenu" id="menu">
    <li>
	<a href="#">
	    <div class="parent-icon">
	      <i class='bx bx-home-circle'></i>
	    </div>
	    <div class="menu-title">Dashboard</div>
	</a>
    </li>
    <li>
	<a href="javascript:;" class="has-arrow">
	    <div class="parent-icon">
		<i class="bx bx-category"></i>
	    </div>
	    <div class="menu-title">Manage Product</div>
	</a>
	<ul>
	    <li>
	      <a href="">
		<i class="bx bx-right-arrow-alt"></i> Product </a>
	    </li>
	    <li>
	      	<a href="{{route('product.create')}}">
				<i class="bx bx-right-arrow-alt"></i> 
				Add Product
			</a>
	    </li>
		<li>
	      	<a href="{{route('product-dummy.index')}}">
				<i class="bx bx-right-arrow-alt"></i> 
				Add Product Dummy
			</a>
	    </li>
	</ul>
    </li>
    
  </ul>
  <!--end navigation-->
</div>