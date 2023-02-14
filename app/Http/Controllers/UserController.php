<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function register(){
        return view('register');
    }
    public function login(){
        return view('login');
    }
    public function registerUser(Request $request){
        $FormFields= $request->validate([
            'username'=>['required','min:4', 'max:16',Rule::unique('users','username')],
            'email'=>['email','required',Rule::unique('users','email')],
            'password'=>['required','confirmed','min:8']
            
        ]);
        
        $FormFields['password']=bcrypt($FormFields['password']);
        $user=User::create($FormFields);
        $stripeCustomer = $user->createAsStripeCustomer();
        auth()->login($user);
        return redirect('/');
    }
    public function loginUser(Request $request){
        $FormFields= $request->validate([
            'loginusername'=>'required',
            'loginpassword'=>'required'
        ]);
        if(auth()->attempt(['username'=>$FormFields['loginusername'],'password'=>$FormFields['loginpassword']])){
            $request->session()->regenerate();
            return redirect('/');
        }else{
            return redirect('/login');
        }
    }
    public function logout(){
        auth()->logout();
        return redirect('/');
    }
    public function collectionsPage(){
        return view('collections');
    }


}
