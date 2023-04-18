<!DOCTYPE html>
<html lang="en">
@include('backend.layouts.head')

<body id="body" class="auth-page" style="background-image:url('backend/images/login-images/bg-login-img.jpg'); background-size: cover; background-position: center center;">
   <!-- Log In page -->
    <div class="container-md">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 auth-header-box">
                                    <div class="text-center p-3">
                                        <a href="{{URL::to('/')}}/admin" class="logo logo-admin">
                                            <img src="{{asset('backend/images/logo-img.png')}}" height="50" alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 fw-semibold text-white font-18">Admin Login</h4>   
                                    </div>
                                </div>
                                <div class="card-body pt-0">   
                                    @if($errors->any())
                                    <br><div class="alert alert-danger">
                                        <p><strong>Opps Something went wrong</strong></p>
                                        <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    @if(session()->has('error'))
                                    <br><div class="alert alert-danger">
                                        {{ session()->get('error') }}
                                    </div>
                                    @endif
                                    <form class="my-4" action="{{route('login')}}" method="post">   
					                @csrf
                                        <div class="form-group mb-2">
                                            <label class="form-label" for="username">Username/Email ID</label>
                                            <input type="email" class="form-control" id="username" name="email" placeholder="Enter username">                               
                                        </div><!--end form-group--> 
            
                                        <div class="form-group">
                                            <label class="form-label" for="userpassword">Password</label>                                            
                                            <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">                            
                                        </div><!--end form-group--> 
            
                                        <div class="form-group row mt-3">
                                            <div class="col-sm-12 text-end">
                                                <a href="{{URL::to('/')}}/admin/forgotpassword" class="text-muted font-13"><i class="dripicons-lock"></i> Forgot password?</a>                                    
                                            </div><!--end col--> 
                                        </div><!--end form-group--> 
            
                                        <div class="form-group mb-0 row">
                                            <div class="col-12">
                                                <div class="d-grid mt-3">
                                                    <button class="btn btn-primary" type="submit">Log In <i class="fas fa-sign-in-alt ms-1"></i></button>
                                                </div>
                                            </div><!--end col--> 
                                        </div> <!--end form-group-->                           
                                    </form><!--end form-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end card-body-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <!-- App js -->
    @include('backend.layouts.footer-js')
</body>
</html>