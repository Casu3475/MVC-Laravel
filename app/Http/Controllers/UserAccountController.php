<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Validation\Rules;

class UserAccountController extends Controller
{
    
    public function __construct()
{
  $this->middleware('auth',['except'=>['index','show','search','filtre']]);
}
    
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
   
    {  
       $user_data=Auth::user();
       $posts= DB::select('select * from post where user_id = ?', [$user_data->id]);
       return view('user_account',['user_data'=>$user_data, 'user_posts'=>count($posts)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {   
        $user=User::find($request->user_id);
        $user->email=$request->email;
        $user->first_name=$request->first_name;
        $user->last_name=$request->last_name;
        $user->login=$request->login;
        $user->phone_number=$request->phone_number;
        $user->password=Hash::make($request->password);
        $user->save();

        return redirect('index')->with('status', "Your account have been modified succesfully.");
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    
    /* ------ Suppression du USER et de ses posts (en cascade avec clé étrangères) ------*/
    public function destroy(Request $request){
        // https://codeanddeploy.com/blog/laravel/laravel-8-eloquent-query-find-and-findorfail-example
        // Utiliser findOrFail pour trouver l'id de l'user ou à défaut return abort(404) si non trouvé
      

        $id=$request->user_id;
        $user = User::findOrFail($id);
        $posts= DB::select('select * from post where user_id = ?', [$id]);
        foreach($posts as $post){
            echo $post->id;
            DB::delete('delete from post where id=?',[$post->id]);
        }       

        $user->delete();
        return redirect('index')->with('status', "You have been deleted. See you soon !");
       
      
        
        // Dans la view où tu auras le bouton pour delete le User. Mettre : 
        // <form action="{{route('delete_user",$user->id}}" method="post">
        // @csrf
        // <input type="text" name="userid" placeholder="Enter user id">
        // <button type="submit">Delete User</button>
        // adapter si besoin le $user et la variable si tu veux supprimer avec autre que l'id (mail, nom user)

        // la route est construite (ligne 63 dans web.blade.php). Il faut adapter l'URI.
        // Un lien qui permet de voir 3 façons différentes de "supprimer" : 
        // 1/ Empêcher l'utilisateur de se connecter mais les données sont tjrs présentes
        // 2/ Cacher le User mais données encore présentes
        // 3/ Supprimer réellement le User et ses données associées
        // J'ai fait le 3ème cas avec la clé étrangère (cf. Model Post) 
        // et suppression en cascade (dans la database : cd. Database Post)
        // https://blog.quickadminpanel.com/3-ways-to-delete-user-in-laravel-block-hide-or-hard-delete/



    }
}
