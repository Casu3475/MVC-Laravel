<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="@yield('meta-description','Default meta description')">
        <link rel="icon" type="image/png" href="{{URL::asset('/images/Voodies_favicon.png')}}" />
        <title>Voodies</title>
        @vite('resources/css/app.css')
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        

       
       

    </head>

<body class="">


      {{-- {{dd()}} --}}
        <x-navigation></x-navigation>
        {{$about ?? ''}} 
        {{$enter_ad ?? ''}}
        {{$contact ?? ''}}
        {{$register ?? ''}}
        {{$login ?? ''}}
        {{$add ?? ''}}
        {{$blur ?? ''}}
        {{$dashboard ?? ''}}
        {{$message ?? ''}}
        {{$user_account ?? ''}}
        {{$ads ?? ''}}
        {{-- {{$index_filter ?? ''}} --}}


{{-- ----------------------alert---------------------------------------- --}}
  @if(session('status'))
        <div class="z-10 flex mx-auto shadow:lg mt-32 w-1/2 xl:1/4 lg:1/3">
      <div class="modal fade  w-full h-full outline-none overflow-x-hidden overflow-y-auto"
      id="alert_message" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog relative w-auto pointer-events-none shadow:lg ">
        <div
          class=" bg-gray-100 border shadow:lg border-gray-300 modal-content  shadow-lg relative flex flex-col w-full pointer-events-auto  bg-clip-padding rounded-md  text-current">
          <div
            class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
            <img src="{{URL::asset('/images/Voodies_logo100.png')}}" alt="logo voodies" class="h-8 w-8">
            
         
          </div>
          <div class="modal-body relative p-4">
            {{session('status')}}
          </div>
          <div
            class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
            <button type="button" onclick="close_alert()"
              class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out"
              data-bs-dismiss="modal">Close</button>
    
          </div>
        </div>
      </div>
    </div>
    </div>
          <script>
            //permet de rendre invisible l'alert
              $alert=document.getElementById('alert_message');
              function close_alert(){
                $alert.style.display = 'none';
                document.location.href="/index";
              }
            </script>
  @endif
    
        
{{---------------Appel du filtre + Annonces ------------------- --}}      


<section class="  mx-auto max-w-screen-xl  px-4  py-6 sm:px-4 lg:px-4 ">
 
  <div class="grid grid-cols-1 gap-4 lg:grid-cols-4 lg:items-start">


    {{-- ----- FILTRE ET ANNONCES ------  --}}
    <div class="grid lg:col-1">
      <?php if (request()->routeIs('home') || request()->routeIs('filter_post') || request()->routeIs('search_post')){
        ?>@include('components.filter')<?php
      }
      else{}
      ?>

      {{-- ----- ANNONCES ------  --}}
      <div class="grid lg:col-span-3">        
        <div>
          {{$slot ?? ''}}
        </div>                  
      </div>

    </div>

  </div>

</section>
<div class="flex justify-center ">
  {{$pagination ?? ''}}
 </div>  
{{---------------Ouvrir le filtre en mode mobile------------------- --}}
         
          <script>
            window.addEventListener('resize', () => {
              const desktopScreen = window.innerWidth < 768
              document.querySelector('details').open = !desktopScreen
            })
          </script>


</body>

@include('components.footer')
   
</html>