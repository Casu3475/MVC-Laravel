<?php

namespace App\Http\Controllers;

use App\Models\City;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
// use Illuminate\Support\Facades\DB;
use PharIo\Manifest\Url;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\UserPostController;
use Illuminate\Console\View\Components\Alert;

 


class PostController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     
     */
public function __construct()
{
  $this->middleware('auth',['except'=>['index','show','search','filtre']]);
}

        public function index()
        { 

         
          $posts = Post::paginate(6);
          $cities=City::get();
          // $posts=Post::get();
          $categories=Category::get();
          return view('index',["ads"=>$posts ,'categories'=>$categories,'cities'=>$cities]);
        }






        public function show(Post $ad)
        {  
            // $login = DB::select('select login from users where id = ?', [$ad->user_id]); Non utilisé mais fonctinonnel
            // $location= DB::select('select * from cities where name = ?', [$ad->location]);
            // return view('ad',['ad'=>$ad,'login'=>$login,'location'=>$location]);
            // $ad=Post::findOrFail($ad); Pour utilser la fonction de cette façon enlever Post des arguments 
            
            
            $login = DB::select('select login from users where id = ?', [$ad->user_id]);
            return view('ad',['ad'=>$ad,'login'=>$login]);
            }
  
        public function create(Request $request)
            { 
         
              //validation des données du formulaire
              $request->validate(
                [    // 'email' => ['email:rfc,dns'],
                    'title'=>['required','min:4'],
                    'description' =>['required', 'min:10'],
                    'img1' => 'required|mimes:png,jpg,jpeg|max:2048',
                    'price'=> 'required',
                    'location'=>'required',
                    'category'=>'required'
                ]
                );
              
              /* Dans l'objet $request, il y a l'ensemble des propriétés contenues dans le 
                constructeur de la class Request de Symfony ! c’est à dire : $query, $request, $attributes, $cookies, $files, $server .
                L'objet $request permet non seulement de récupérer les inputs du formulaire envoyé ($_POST) ainsi que d’autres données tel que les cookies ($_COOKIE), les données de $_SERVER etc… mais aussi appliquer diverses méthodes à cet objet.
                https://walkerspider.com/cours/laravel/request/ */
        
                /* Validation des données envoyées dans le formulaire 
                https://laravel.sillo.org/cours-laravel-8-les-bases-la-validation/ */
           
                $Annonce = new Post();
                $Annonce -> title = $request -> title;
                $Annonce -> category_id = $request -> category;
                $Annonce -> type_ad = $request -> type_ad;
                $Annonce -> description = $request -> description;
                $Annonce -> user_id=Auth::user()->id;
                $Annonce -> price = $request -> price;
                $Annonce -> condition_id=$request->condition;
                $Annonce -> location = $request -> location;
        
                /* ----- traitement de l'image ---- */
      
                // Générer un nom de fichier unique "dynamique" avec time + extension de l'image //
                $filename = Str::uuid().'.'.$request -> img1 -> extension();
        
                /* Récupérer l'image (file) saisie dans le formulaire et la stocker (store) dans le dossier images dans storage app public en spécifiant son nom grace à "As"*/
                // $image_path = $request->file('img')->storeAs('images',$filename,'public');
                $Annonce -> image1 = $request->file('img1')->storeAs('images',$filename,'public');
                
                if (isset($request -> img2)){
                    $filename2 = Str::uuid().'.'.$request -> img2 -> extension();
                    $Annonce -> image2 = $request->file('img2')->storeAs('images',$filename2,'public'); 
                }
                if (isset($request -> img3)){

                $filename3 = Str::uuid().'.'.$request -> img3 -> extension();
                $Annonce -> image3 = $request->file('img3')->storeAs('images',$filename3,'public');

                }
                if (isset($request -> img4)){
                  $filename4 = Str::uuid().'.'.$request -> img4 -> extension();
                  $Annonce -> image4 = $request->file('img4')->storeAs('images',$filename4,'public');
                }
                if (isset($request -> img5)){
                    $filename5 = Str::uuid().'.'.$request -> img5 -> extension();
                $Annonce -> image5 = $request->file('img5')->storeAs('images',$filename5,'public');
                
                }

                /* ----- envoyer dans la BDD = requête SQL INSERT INTO ads() VALUES() ---- */ 
                $Annonce -> save();
                //session()->flash('status', 'YEees yo have created a new ad!'); // creation du message d'alert qui se verra dans la page index
                /* Renvoyer ensuite sur la page index par le biais de la route
                pour afficher les données Route::get('/ads', [AdsController::class, 'index']); */
                return Redirect('/index')->with('status', "Your ad has been created!");
            }

            
        public function update (Request $request){
         
        
          $post_id=$request->id;
          $post=Post::findOrFail($post_id);
          $post->category_id=$request->category;
          $post->title=$request->title;
          $post->type_ad=$request->type_ad;
          $post->price=$request->price;
          $post->description=$request->description;
          $post->location=$request->location;
          $post->condition_id=$request->condition;
          
          
         $image1_to_delete='C:\laragon\www\VOodies\public'.Storage::url($post->image1);

        
         $image2_to_delete='C:\laragon\www\VOodies\public'.Storage::url($post->image2);
         $image3_to_delete='C:\laragon\www\VOodies\public'.Storage::url($post->image3);
         $image4_to_delete='C:\laragon\www\VOodies\public'.Storage::url($post->image4);
         $image5_to_delete='C:\laragon\www\VOodies\public'.Storage::url($post->image5);
         
        

          
          if (isset($request->img1)){
          $filename = Str::uuid().'.'.$request -> img1->extension();
          $post -> image1 = $request->file('img1')->storeAs('images',$filename,'public');
         
          
          if(File::exists($image1_to_delete)){
            unlink($image1_to_delete);
            
            }
    
         }
          
          if (isset($request -> img2)){
            if(File::exists($image2_to_delete) && $post->image2 !=null){
              unlink($image2_to_delete);
            }
            
            $filename2 = Str::uuid().'.'.$request -> img2 -> extension();
              $post -> image2 = $request->file('img2')->storeAs('images',$filename2,'public'); 
              
          }
          if (isset($request -> img3)){

            if(File::exists($image3_to_delete) && $post->image3 !=null){
              unlink($image3_to_delete);
            }
            
            $filename3 = Str::uuid().'.'.$request -> img3 -> extension();
              $post -> image3 = $request->file('img3')->storeAs('images',$filename3,'public');
              

          }
          if (isset($request -> img4)){
            if(File::exists($image4_to_delete) && $post->image4 !=null){
              unlink($image4_to_delete);
            }
            
            $filename4 = Str::uuid().'.'.$request -> img4 -> extension();
            $post -> image4 = $request->file('img4')->storeAs('images',$filename4,'public');
            
          }

          if (isset($request -> img5)){


            if(File::exists($image5_to_delete) && $post->image5 !=null){
              unlink($image5_to_delete);
            }
            $filename5 = Str::uuid().'.'.$request -> img5 -> extension();
            $post -> image5 = $request->file('img5')->storeAs('images',$filename5,'public');
            
          }

          $post->save();

          // $userID = Auth::user()->id; 
          // $posts = DB::select('select * from post where user_id = ?', [$userID]);
          // $categories=Category::all();
          // return view('dashboard',compact('posts','categories'));
          $dashboard=new UserPostController;
          return $dashboard->index();
           
         
            
          
       
       

          
        }    
            
        
            
            
            
            /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
  
       $id=Post::find($id);
        $title=$id->title;
        $id->delete();
        return redirect('index')->with('status', "Yor ad: $title has been delete!");
    }
  
  
    
  /* ---------------------------------------------------------------------------*/
  /* --- AFFICHE LA PAGE INDEX DES ANNONCES FILTRÉES SELON LES CATÉGORIES ------*/
  /* ---------------------------------------------------------------------------*/

  public function filtre(Request $request){
    
    // dd($request);

    if ($request->cat==null && $request->category==null && $request->number_max==null && $request->number_min==null && $request->location==null && empty($request->etat))
    {
      return Redirect(route('home'));
    }

    if($request->reset!=null){
      return Redirect(route('home'));
    }


    if(isset($request->number_min) && isset($request->number_max)){
      if(($request->number_min) >= ($request->number_max)){
        $x = $request->number_max;
        $request->number_max = $request->number_min;
        $request->number_min = $x;
      }
      elseif(($request->number_max) <= ($request->number_min)){
        $x = $request->number_min;
        $request->number_min = $request->number_max;
        $request->number_max = $x;
      }
    };


    /* -- --- VERIFIER SI LES VARIABLES SONT VIDES OU PAS -- ---
    /  ET préparer la requête pour chacun des filtres  */

      // Ce sont les mêmes écritures : 
      // ->where('location', $request->location)
      // ->whereRaw("location  = ?",[$request->location])

      $compteur = 0; // variable piur gérer les AND entre les différentes requêtes
      echo "<br><br><br>";
      // echo "compteur avant catégorie : ".$compteur ."<br>";

      if (!empty ($request->category)){
        $query_cat = "category_id = '$request->category'";
        $compteur += 1;
      }
      else
      {
        $query_cat = "";
      }

      // echo "compteur après catégorie et avant état : ".$compteur ."<br>";

      if (($request->etat)!=null){
        // récupérer les clés dans la variable $request->etat qui correspondent
        // à l'état du produit : used=0 good=1 new=2 
        // implode = transformer les clés du tableau dans une chaîne de caractère
        $keys=implode("','",array_keys($request['etat']));
        // dd($keys);
        if ($compteur>0){
          $query_etat = "AND condition_id  IN ('$keys')";
          $compteur+=1;
        }
        else {
          $query_etat = "condition_id  IN ('$keys')";
          $compteur+=1;
        } 
      }
      else
      {
        $query_etat = "";
      }

      // echo "compteur après état et avant prix_min : ".$compteur ."<br>";

      if (!empty ($request->number_min)){
        if ($compteur>0){
          $query_price_min = "AND price >= '$request->number_min'";
          $compteur+=1;
        }
        else {
          $query_price_min = "price >= '$request->number_min'";
          $compteur+=1;
        }
      }
      else
      {
        $query_price_min = "";
      }

      // echo "compteur après prix_min et avant prix_max : ".$compteur ."<br>";

      if (!empty ($request->number_max)){
        if ($compteur>0){
          $query_price_max = "AND price <= '$request->number_max'";
          $compteur+=1;
        }
        else{
          $query_price_max = "price <= '$request->number_max'";
          $compteur+=1;
        }
      }
      else
      {
        $query_price_max = "";
      }

      // echo "compteur après prix_max et avant location : ".$compteur ."<br>";

      if (!empty ($request->location)){
        if($compteur==0){
          $query_lieu = "location = '$request->location'";
          $compteur+=1;
        }
        else{
          $query_lieu = "AND location = '$request->location'";
          $compteur+=1;
        }
      }
      else
      {
        $query_lieu = "";
      }

      // echo "compteur après location : ".$compteur ."<br>";

    /* --------------------- REQUÊTE GLOBALE ----------------------
    /  AVEC CONCATENATION DES DIFFERENTES REQUÊTES DE CHAQUE FILTRE */

        $query= DB::table('post')
        // ->whereRaw($query_cat)
        ->whereRaw($query_cat .$query_etat .$query_price_min .$query_price_max .$query_lieu)
        ->orderBy('title')
        ->get();
        // return view('index',compact ('ads')); 
        $cities=City::get();
        $categories=Category::get();
        return view('index',["ads"=>$query ,'categories'=>$categories,'cities'=>$cities]);
  }


/* ---------------------------------------------------------------------------*/
/* ------------ AFFICHE LA PAGE DES ANNONCES FILTRÉES SELON LE ---------------*/
/* ----------------------- MOTEUR DE RECHERCHE -------------------------------*/
/* ---------------------------------------------------------------------------*/

public function search (Request $request){
  $keywords=$request->key;
  // dd($keywords);

  /* ----- RECHERCHE SELON TOUS LES MOTS SAISIS PAR L'UTILISATEUR ----- */
  /* ---------------- RECHERCHE DANS TITRE + DESCRIPTION -------------- */    
      // Mettre tous les mots saisis par l'utilisateur dans un array
      $words_envoyes = explode(" ", trim($keywords));
      $words_retenus=array();
      $compteur = count($words_envoyes);
      // echo ($compteur); echo"<br>";

      // boucle permettant de ne pas retenir les mots inférieurs à 2 caractères
      for ($i=0; $i<$compteur;$i++){
        $x = strlen($words_envoyes[$i]);     
        if ($x<=2){
          unset ($words_retenus[$i]);
        }
        else {
          array_push($words_retenus,$words_envoyes[$i]);
        };
      }
      
      $words=$words_retenus;

      for ($i=0; $i<count($words);$i++)
      {
        /* tableau $kw contenant les expressions des mots saisis par l'utilisateur */
        $kw_title[$i] = "title like '%".$words[$i]."%'";
        $kw_description[$i] = "description like '%".$words[$i]."%'";
        // dd($kw[$i]);
        /* réaliser la requête en associant les mots du tableau $kw grâce la fonction implode qui convertit le tableau $kw en 1 chaine de caractère séparée par des OR */
        $query_title = implode(" OR ", $kw_title);
        $query_description = implode(" OR ", $kw_description);
      }

      $query= DB::table('post')
      ->whereRaw($query_title .'OR ' .$query_description)
      ->orderBy('title')
      ->get();

      $cities=City::get();
      $categories=Category::get();
      return view('index',["ads"=>$query ,'categories'=>$categories,'cities'=>$cities])
      ->with('status', 'sans annonce');

  }


}
