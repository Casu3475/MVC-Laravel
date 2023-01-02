<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    public function store(Request $request){

        $request->validate([
            'first_name'=>['required','string','min:3','max:255'],
            'last_name'=>['required','string','min:3','max:255'],
            'email'=>['required','string','email','max:255','unique:users'],
            'password'=>['required', 'confirmed',Rules\Password::defaults()],
            'phone_number'=>['required','digits:10'],
            'login'=>['required','string', 'min:8','unique:users']


        ]);
        
        $user=User::create(
            [
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,
                'password'=>bcrypt($request->password),
                'phone_number'=>$request->phone_number,
                'login'=>$request->login,
            ]);
        event(new Registered($user));
            //Auth::login($user); loger directement l'utilisateur après création puis il faut le rediriger vers le dashboard.
            session()->flash('ad_created', 'Congratulations you have created a new account! Confirm your email to active it!'); // creation du meesgae d'alert qui se verra dans la page index
        //    return to_route('login')->with('status','Account created!');
        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    
    }
    
}
