<div id="customerLoginModal" class="modal-style-1 dark modal">
    <div class="modal-dialog modal-login">
	<div class="modal-content">
	    <div class="modal-header p-0 mb-3 mt-3">				
		<h4 class="modal-title">login</h4>
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    </div>
	    @if($errors->any())
		<div class="alert alert-danger">
		    <p><strong>Opps Something went wrong</strong></p>
		    <ul>
		    @foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		    @endforeach
		    </ul>
		</div>
	    @endif
	    <!--CHECK ANY ERROR IN LARAVEL-->
	    <div class="modal-body">
		@if(session()->has('customer_activate_account'))
		    <div class="alert alert-success">
			{{ session()->get('customer_activate_account') }}
		    </div>
		@endif
		@if(session()->has('customer_login_msg'))
		    <div class="alert alert-danger">
			{{ session()->get('customer_login_msg') }}
		    </div>
		@endif
		<!-- dont forget to add action and action method  -->
		<form action="{{route('login.submit')}}" method="post">
		      @csrf
		    <div class="form-group">
			<div class="input-group">
			    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
			    <input type="email" class="form-control" name="email" placeholder="Enter email address" required="required">
			</div>
		    </div>
		    <div class="form-group">
			<div class="input-group">
			    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
			    <input type="password" class="form-control" name="password" placeholder="Enter password" required="required" autocomplete="on">
			</div>
		    </div>
		    <div class="row pl-1 pr-1 pb-20">
			<!--<div class="col text-left">
			    <label class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option1">
				<span class="custom-control-label">&nbsp;Remember Me</span>
			    </label>
			</div>-->
			<div class="col text-right hint-text pt-0">
				<a class="text-danger" href="#forgotPasswordModal" data-dismiss="modal" data-toggle="modal">Forgot Password ?</a>
			</div>
		    </div>
		    <div class="form-group text-center">
			<button type="submit" class="btn btn-primary btn-signin">login</button>
		    </div>
		    <p class="hint-text mt-3">or login with</p>
		    <!-- social login area -->
		    <div class="social-login text-center">
			<div class="loginIntegration signupScreen_loginIntegration__Mavsl">
			    <div class="loginWith signupScreen_loginWith__3oERQ">
				<div id="signupScreen_customBtnLogin__3nSb1" class="customGPlusSignIn">
					<a href="{{ route('google.login') }}">
						<img src="{{asset('fronted/image/google/Logo-Google.svg')}}" alt="Logo Google.svg">
						<span class="buttonText gp signupScreen_gp__Ot1y3">Google</span>
					</a>
				</div>
			    </div>
			</div>
			<!--<a class=" btn-google  text-uppercase" href="redirect/google"><i class="fab fa-google mr-2 ml-2"></i></a>-->
		    </div>
		</form>
	    </div>
	    <div class="text-center mb-3">
			Don't have an account? 
			<a class="register" href="#customerRegisterModal" data-dismiss="modal" data-toggle="modal">Register</a>
		</div>
	</div>
    </div>
</div>

<!--register-->
<div id="customerRegisterModal" class="modal-style-1 dark modal show">
    <div class="modal-dialog modal-login">
	<div class="modal-content">
	    <div class="modal-header p-0 mb-3 mt-3">				
		<h4 class="modal-title">Register</h4>
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    </div>
	    <!--CHECK ANY ERROR IN LARAVEL-->
	    @if($errors->any())
		<div class="alert alert-danger">
		    <p><strong>Opps Something went wrong</strong></p>
		    <ul>
		    @foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		    @endforeach
		    </ul>
		</div>
	    @endif
	    <!--CHECK ANY ERROR IN LARAVEL-->
	    @if(session()->has('success'))
		<div class="alert alert-success">
		    {{ session()->get('success') }}
		</div>
	    @endif
	    <div class="modal-body">
		<!-- dont forget to add action and action method  -->
		<form action="{{route('register.submit')}}" method="post">
		    @csrf
		    <div class="form-group">
			<div class="input-group">
			    <span class="input-group-addon"><i class="fa fa-user"></i></span>
			    <input type="text" class="form-control" name="name" placeholder="Enter your name" required="required">
			</div>
			@if($errors->has('name'))
			    <div class="text-danger">{{ $errors->first('name') }}</div>
			@endif
		    </div>
		    <div class="form-group">
			<div class="input-group">
			    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
			    <input type="email" class="form-control" name="email" placeholder="Enter email address" required="required">
			</div>
			 @if($errors->has('email'))
			    <div class="text-danger">{{ $errors->first('email') }}</div>
			@endif
		    </div>
		    <div class="form-group">
			<div class="input-group">
			    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
			    <input type="password" class="form-control" name="password" placeholder="Enter password" required="required" autocomplete="on">
			</div>
			@if($errors->has('password'))
			    <div class="text-danger">{{ $errors->first('password') }}</div>
			@endif
		    </div>
		    <div class="form-group">	
			<div class="input-group">
			    <span class="input-group-addon"><i class="fa fa-eye-slash"></i></span>
			    <input type="password" class="form-control" name="confirm-password" placeholder="Retype password" required="required" autocomplete="on">
			</div>
			@if($errors->has('confirm-password'))
			    <div class="text-danger">{{ $errors->first('confirm-password') }}</div>
			@endif
		    </div>
		    <div class="form-group text-center">
			<button type="submit" class="btn btn-primary btn-signin">Register</button>
		    </div>
		</form>
	    </div>
	    <div class="text-center mb-3">Already have an account? 
			<a class="login" href="#customerLoginModal" data-dismiss="modal" data-toggle="modal">Login</a></div>
	</div>
    </div>
</div>
	<!--Forgot Password start-->
	<div id="forgotPasswordModal" class="modal-style-1 dark modal show">
		<div class="modal-dialog modal-login">
			<div class="modal-content">
				<div class="modal-header p-0 mb-3 mt-3">				
					<h4 class="modal-title">Forgot Password</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				@if (Session::has('message'))
					<div class="alert alert-success" role="alert">
						{{ Session::get('message') }}
					</div>
				@endif
				<div class="modal-body">
					<form action="{{ route('forget-password.submit') }}" method="post">
						@csrf
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
								<input type="email" class="form-control" name="email" placeholder="Enter email address" required="required">
							</div>
							@if ($errors->has('email'))
								<span class="text-danger">{{ $errors->first('email') }}</span>
							@endif
						</div>
						<div class="form-group text-center">
							<button type="submit" class="btn btn-primary btn-signin">Send Password Reset Link</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

<!--Forgot Password end-->
@if($errors->has('name') OR $errors->has('email') OR $errors->has('password') OR $errors->has('password_confirmation'))
<script type="text/javascript">
    $(document).ready(function () {
		$("#customerRegisterModal").modal("show");
    });
</script>
@endif

@if(Session::has('customer_activate_account'))
    <script type="text/javascript">
	$(document).ready(function() {
	    $("#customerLoginModal").modal("show");
	});
    </script>
@endif

@if(Session::has('customer_login_msg'))
    <script type="text/javascript">
	$(document).ready(function() {
	    $("#customerLoginModal").modal("show");
	});
    </script>
@endif
