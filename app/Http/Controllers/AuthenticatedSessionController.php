<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;



//voir video :  https://www.youtube.com/watch?v=4vRk7BZKRT8

class AuthenticatedSessionController extends Controller
{
    public function store(Request $request){

        //$request ne recupere pas le checkbox. Pour le valider on utilise la methode boolean()
        //dd($request->boolean('remember')); Pour tester la function

        $credentials=$request->validate([
            'email'=>['required','string','email'],
            'password'=>['required', 'string'],
            
        ]);
// permet de verifier l'email et le password qui a été envoyer dans le request et qui est stoqué dans $credential
//la méthode attempt return un booleean.  
if (!Auth::attempt($credentials,$request->boolean('remember'))){
throw ValidationException::withMessages(['email'=>'We cannot find an account with that email address']);

}; 

$request->session()->regenerate();

return redirect()->intended()->with('status','You are logged in');    
    
    }


    public function destroy(Request $request){

        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return to_route('login');

    }
}
