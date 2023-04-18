<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserVerify;
use Inertia\Inertia;
use Auth;
use Session;
use DB;
use Hash;
use Illuminate\Support\Str;
use Mail; 
use Carbon\Carbon;
class FrontHomeController extends Controller
{
    public function home(){
	return view('frontend.index');
    }
    
    public function xtremeProWhyProtein(){
	return view('frontend.pages.xtreme-pro-whey-protein');
    }
    
    public function xtremeEnduranceBcaa(){
	return view('frontend.pages.xtreme-endurance-bcaa');
    }
    
    public function xtremeTournament(){
	return view('frontend.pages.xtreme-tournament');
    }
    
    public function contact(){
	return view('frontend.pages.contact-us');
    }
    
    public function registerSubmit(Request $request){
        //return $request->all();
        $this->validate($request,[
            'name'=>'string|required|min:2',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
        ]);
        $data=$request->all();
        //dd($data);
        $check=$this->create($data);
        $customer_name = $request->input('name');
        $token = Str::random(64);
            UserVerify::create([
            'user_id' => $check->id, 
            'token' => $token
        ]);
        Mail::send('frontend.pages.email.emailVerificationEmail', ['token' => $token, 'customer_name' =>$customer_name], function($message) use($request){
            $message->to($request->email);
            $message->from('noreply@mydomain.com', 'My Website');
            $message->subject('Account verification mail');
        });
	    //dd($mail);
        //Session::put('user',$data['email']);
        if($check){
            request()->session()->flash('customer_activate_account','We sent you an activation link. 
	    Check your email and click on the link to verify your email.');
	    //session()->put('customerRegisterModalShow', true);
	    return back();
        }
        else{
            request()->session()->flash('error','Please try again!');
            return back();
        }
    }
    
    public function create(array $data){
        return User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>Hash::make($data['password']),
            'status'=>'inactive'
            ]);
    }
    
    public function verifyAccount($token){
        $verifyUser = UserVerify::where('token', $token)->first();
	    //dd($verifyUser);
        $message = 'Sorry your email cannot be identified.';
        if(!is_null($verifyUser) ){
            $user = $verifyUser->user;
            if(!$user->is_email_verified) {
                $verifyUser->user->is_email_verified = 1;
                $verifyUser->user->status = 'active';
                $verifyUser->user->email_verified_at = Carbon::now();;
                $verifyUser->user->save();
                $message = "Your e-mail is verified. You can now login.";
            } else {
                $message = "Your e-mail is already verified. You can now login.";
            }
        }
	request()->session()->flash('customer_activate_account',$message);
	return back();
	//return redirect()->route('login')->with('message', $message);
    }
    
    public function LoginSubmit(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if(auth()->attempt(array('email' => $request->input('email'), 'password' => $request->input('password'), 'is_email_verified'=>1)))
        {
            if (auth()->user()->role == 'Customer') {
            //return redirect()->route('admin.home');
                return back();
            }else if (auth()->user()->role == 'manager') {
                return redirect()->route('manager.home');
            }else{
                return redirect()->route('home');
            }
            }else{
                $message = "Invalid email and password pleas try again!";
        }
            request()->session()->flash('customer_login_msg',$message);
            return back();
    }

    public function submitForgetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);
  
        $token = Str::random(64);
  
        DB::table('password_resets')->insert([
            'email' => $request->email, 
            'token' => $token, 
            'created_at' => Carbon::now()
        ]);
       
        Mail::send('frontend.pages.email.forgotPasswordLink', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->from('noreply@mydomain.com', 'My Website');
            $message->subject('Reset Password');
        });
  
        return back()->with('message', 'We have e-mailed your password reset link!');
    }

    public function showResetPasswordForm($token) { 
        return view('frontend.pages.forgot-password', ['token' => $token]);
    }

    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);
  
        $updatePassword = DB::table('password_resets')
            ->where([
            'email' => $request->email, 
            'token' => $request->token
            ])
            ->first();
  
        if(!$updatePassword){
            return back()->withInput()->with('error', 'Invalid token!');
        }
        $user = User::where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);
        DB::table('password_resets')->where(['email'=> $request->email])->delete();
        return redirect('frontend.index')->with('message', 'Your password has been changed!');
        //return view('frontend.index');
    }
    
    public function logout(Request $request) {
	    Auth::logout();
	return redirect()->back();
    }
}
