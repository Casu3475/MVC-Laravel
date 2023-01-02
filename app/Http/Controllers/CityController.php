<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
    public function __invoke(Request $request)
    {
      //   //validation des données du formulaire
        $request->validate(
         [    
             'zip_code'=>['required','min:5'],
            
         ]
         );
       
       
        
       $cities=DB::select('select name from cities where zip_code = ?', [$request->zip_code]); 
      
         if(empty($cities)){
            return view('zip')->with('message', 'Zip code invalid' );
         }
       return view('zip',['cities'=>$cities]);
      
    }

    public function show(Request $request){

      return view("create_post",['city'=>$request->city]);
    }

}
