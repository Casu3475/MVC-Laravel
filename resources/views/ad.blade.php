{{-- @extends('layouts.app')

@section('title')
post
@endsection
@section('meta-description','Meta-description page post')
@section('content')
  <h1>Page Post</h1>  
@endsection --}}

{{-- "ICI ON FIT LE DISPLAY D'UN SEUL ANNONCE" --}}



{{-- <x-layouts.app > --}}

  <x-app-layout >
  <x-slot name="title">{{$ad->title}}</x-slot>
  <x-slot name="meta-Description">We are Epitech's student</x-slot>
  

  <x-slot name="about">
 
    <div class="mx-auto max-w-screen-xl px-4  sm:px-6 lg:px-8 ">
      <div class=" mx-auto max-w-lg  ">
        <section class="shadow-2xl ">
          
        <div class="relative mx-auto max-w-screen-xl px-4 py-8">
        <!-- -----photos MD et LG------ -->
          <div class="grid grid-cols-1 items-start gap-8 md:grid-cols-2  ">
            <div class=" hidden  md:grid md:grid-cols-2 md:gap-4  md:grid-cols-1">
               
                {{-- ------------img1------------------------- --}}
                    <?php 
                    $image1='/images/camera.png';
                    if(isset($ad->image1)){
                      $image1=$ad->image1;
                      $image1=Storage::url($ad->image1);
                      
                    }
                    
                    ?>
    
                    <img
                    alt="image1 ad"
                    src='{{$image1}}'
                    class="   aspect-squarew-full rounded-xl object-cover"
                  />
          
                  <div class="grid grid-cols-2 gap-4 lg:mt-4">
                    
                    {{-- ------------img2------------------------- --}}
                    <?php 

                    $image2=URL::asset('/images/camera.png');
                    if(isset($ad->image2)){
                      $image2=$ad->image2;
                      $image2=Storage::url($ad->image2);
                    }
                     
                    ?>
                    
                    
                    <img
                      alt='image2 ad'
                      src='{{$image2}}'
                      class="aspect-square w-full rounded-xl object-cover"
                    />

                  {{-- ------------img3------------------------- --}}

                    <?php 
                    $image3=URL::asset('/images/camera.png');
                    if(isset($ad->image3)){
                      $image3=$ad->image3;
                      $image3=Storage::url($ad->image3);
                    }
                     
                    ?>
                  
                    <img
                      alt='image3 ad'
                      src='{{$image3}}'
                      class="aspect-square w-full rounded-xl object-cover"
                    />

                 {{-- ------------img4------------------------- --}}
                    <?php 
                    $image4=URL::asset('/images/camera.png');
                    if(isset($ad->image4)){
                      $image4=$ad->image4;
                      $image4=Storage::url($ad->image4);
                    }
                    
                    ?>
                    <img
                      alt='image4 ad'
                      src='{{$image4}}'
                      class="aspect-square w-full rounded-xl object-cover"
                    />
                   
                   {{-- ------------img5------------------------- --}}
                    <?php 
                    $image5=URL::asset('/images/camera.png');
                    if(isset($ad->image5)){
                      $image5=$ad->image5;
                      $image5=Storage::url($ad->image5);
                    }
                    ?>
                    
                    <img
                      alt="imgage5 ad"
                      src='{{$image5}}'
                      class="aspect-square w-full rounded-xl object-cover"
                    />
                 {{-- ------------ end images------------------------- --}}
                  </div>
                </div>

                <div class="">
                  <strong
                    class="rounded-full border border-blue-600 bg-gray-100 px-3 py-0.5 text-xs font-medium tracking-wide text-blue-600"
                  >
                  
                  {{$ad->category_id}}
                  
                  </strong>
          
                  <div class="mt-8 flex justify-between">
                    <div class="max-w-[35ch] ">
                      <h1 class="text-2xl font-bold">
                        {{$ad->title}}
                      </h1>

                      <fieldset class="mt-4 space-x-6">
                        <?php  
                            $offer="";
                            $request="";
                            
  
                            switch ($ad->type_ad) {
                                case 'offer':
                                    $offer="checked";
                                    break;
                                case 'request':
                                    $request="checked";
                                    break;
                                default:
                                    $offer="";
                                    $request="checked";
              
                            }
                     ?>
  
  
                        <div class="flow-root ">
                          <div class="-m-0.5 flex flex-wrap ">
                            <label for="new" class="cursor-pointer p-0.5 ">
                              <input disabled
                                {{$request}}  
                                
                                type="radio"
                                name="new"
                                id="new"
                                class="peer sr-only "
                              />
            
                              <span
                                class="group inline-flex h-6 w-16  items-center justify-center rounded-full border text-xs font-medium peer-checked:bg-lime-500 peer-checked:text-white"
                              >
                                Request
                              </span>
                            </label>
            
                            <label for="good" class="cursor-pointer p-0.5 ">
                              <input
                                disabled
                                {{$offer}}
                                type="radio"
                                name="offer"
                                id="offer"
                                class="peer sr-only "
                              />
            
                              <span
                                class="group inline-flex h-6 w-16 items-center justify-center rounded-full border text-xs font-medium peer-checked:bg-amber-500 peer-checked:text-white"
                              >
                                Offer
                              </span>
                            </label>
                          </fieldset>
{{-- Retrouve le login de la personne qui a posté l'annonce s'il n'existe pas affiche une valeur ar defaut --}}
                      {{-- @if(isset($login[0]->login)==true)     
                      {{ $login=$login[0]->login;}}     
                      @else
                        {{$login='voodies user';}}  
                      @endif --}}

                      <?php
                      if(isset($login[0]->login)==true)     
                      {{ $login=$login[0]->login;}}     
                      else
                        {{$login='voodies user';}}  
                      ?>
                      
                      <p class="mt-2 text-base text-blue-700 font-medium">{{ucfirst(strtolower($login))}}</p>
                      

                      <div class="mt-2 -ml-0.5 flex">
                       <p class="font-medium mb-2 text-slate-600">Description</p>
                       
                      </div>
                    </div>
          
                    <p class="text-lg w-20 text-right font-bold  ">{{$ad->price}} €</p>
                  </div>
                  <!-- ---------Description---------------- -->
                      <div class="grid">
                        <div class="prose max-w-none group-open:hidden">
                          <p>
                            {{$ad->description}}
                          </p>
                        </div>
          
                      </div>
                    <!-- ---END DESCRIPTION----- -->
    
                    <fieldset class="mt-2 space-x-6">
                      <legend class=" py-2 text font-medium text-slate-600">Condition</legend>
                        
                      <?php  
                          $newcondition="";
                          $goodcondition="";
                          $usedcondition="";

                          switch ($ad->condition_id) {
                              case 2:
                                  $newcondition="checked";
                                  break;
                              case 1:
                                  $goodcondition="checked";
                                  break;
                              case 0:
                                  $usedcondition="checked";
                                  break;
                              default:
                                  $newcondition="";
                                  $goodcondition="checked";
                                  $usedcondition="";
                          }
                   ?>


                      <div class="flow-root ">
                        <div class="-m-0.5 flex flex-wrap ">
                          <label for="new" class="cursor-pointer p-0.5 ">
                            <input disabled
                              {{$newcondition}} 
                              type="radio"
                              name="new"
                              id="new"
                              class="peer sr-only "
                            />
          
                            <span
                              class="group inline-flex h-6 w-12 items-center justify-center rounded-full border text-xs font-medium peer-checked:bg-lime-500 peer-checked:text-white"
                            >
                              New
                            </span>
                          </label>
          
                          <label for="good" class="cursor-pointer p-0.5">
                            <input
                            {{$goodcondition}}
                              disabled
                              type="radio"
                              name="good"
                              id="good"
                              class="peer sr-only"
                            />
          
                            <span
                              class="group inline-flex h-6 w-12 items-center justify-center rounded-full border text-xs font-medium peer-checked:bg-amber-500 peer-checked:text-white"
                            >
                              Good
                            </span>
                          </label>
          
                          <label for="used" class="cursor-pointer p-0.5">
                            <input
                            {{$usedcondition}}
                              disabled
                              type="radio"
                              name="used"
                              id="usded"
                              class="peer sr-only"
                            />
          
                            <span
                              class="group inline-flex h-6 w-12 items-center justify-center rounded-full border text-xs font-medium peer-checked:bg-red-700 peer-checked:text-white"
                            >
                              Used
                            </span>
                          </label>
    
                          <!-- ----Bouton contact ----- -->
                          
                        <form method="POST" action="{{route('contact')}}" class="mt-8 ml-10 md:-ml-4">
                          @csrf
                      <button type="submit" class="md:w-48 w-52 h-8  rounded-md text-red-600 font-medium border-2 border-red-600 hover:border-white hover:bg-gradient-to-r from-red-900 via-red-600 to-red-500 hover:text-white " name="user_id" value="{{$ad->user_id}}">Contact</button>
                      <input type="text" class="hidden" value="{{$ad->id}}" name="post_id">
                  </form>

                </div>
                        </div> 
                      </div>
                    </fieldset>
{{-- ----------------------image MOBILE------------------------ --}}
<div class="grid grid-cols-2 mt-4 gap-4 md:hidden">
<div class="grid grid-cols-1 gap-4 mt-4">
                    
  {{-- ------------img1------------------------- --}}
  <img
    alt='image2 ad'
    src='{{$image1}}'
    class="aspect-square w-full rounded-xl object-cover"
  />
{{-- ------------img2------------------------- --}}
  <img
    alt='image3 ad'
    src='{{$image2}}'
    class="aspect-square w-full rounded-xl object-cover"
  />
</div>
<div class="grid grid-cols-1 gap-4 mt-4" >
{{-- ------------img3------------------------- --}}
  <img
    alt='image4 ad'
    src='{{$image3}}'
    class="aspect-square w-full rounded-xl object-cover"
  />
 
 {{-- ------------img4------------------------- --}}

  <img
    alt="imgage5 ad"
    src='{{$image4}}'
    class="aspect-square w-full rounded-xl object-cover"
  />

</div>
</div>
 {{-- -------------------------fin images mobile--------------------}}
                
  </div>
  {{-- ------------MAP ----------------- --}}
  

             <div class=" grid col-span-2 p-2 mt-2">
              <label for="map" class="mt-4 font-medium text-slate-500">City: {{$ad->location}}</label>
              <div class="gmap_canvas"><iframe class="h-72 w-full" id="gmap_canvas" src="https://maps.google.com/maps?q={{$ad->location}}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>

</div>



        </section>
         
      </div>
    </div>
      
  </x-slot>
  
 
 
  
{{-- </x-layouts.app> --}}

</x-app-layout >