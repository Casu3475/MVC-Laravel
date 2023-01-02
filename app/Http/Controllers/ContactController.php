<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;



class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // dd($request);
        $user_id = $request->user_id;
        $info_user = User::find($user_id);

        // dd($info_user);
        // dd($user_id);
        $post_id = $request->post_id;
        $info_post = Post::find($post_id);
        // dd($info_post);

        return view('contact', ["info_user" => $info_user, "info_post" => $info_post]);
    }

    public function send_email(Request $request)
    {
        // dd($request);
        // $email = $request->email;
        // $info_email =Post::find($email);

         //validation des données du formulaire
        //  $request->validate(
        //     [   'email' => ['required','email:rfc,dns'],
        //         'phone_customer'=>['numeric','min:10','max:10'],
        //         'name_customer'=>['required','string']
                
        //     ]
        //     );


        return redirect('index')->with('status', 'Your email has been sent!');

    }
}
