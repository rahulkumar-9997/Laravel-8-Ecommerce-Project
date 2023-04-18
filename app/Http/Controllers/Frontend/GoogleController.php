<?php

namespace App\Http\Controllers\Frontend;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function loginWithGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackFromGoogle()
    {
        try {
            $user = Socialite::driver('google')->stateless()->user();
            // Check Users Email If Already There
            $is_user = User::where('email', $user->getEmail())->first();
            if(!$is_user){
                $saveUser = User::updateOrCreate([
                    'social_id' => $user->getId(),
                ],[
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'password' => Hash::make($user->getName().'@'.$user->getId()),
                    'role' => 'Customer',
                ]);
            }else{
                $saveUser = User::where('email',  $user->getEmail())->update([
                    'social_id' => $user->getId(),
                    'role' => 'Customer',
                ]);
                $saveUser = User::where('email', $user->getEmail())->first();
            }
            //dd('else bellow');
            //Auth::loginUsingId($saveUser->id);
           
            Auth::login($saveUser);

            return view('frontend.index');
            //return return redirect('/home');
            //return view('frontend.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
