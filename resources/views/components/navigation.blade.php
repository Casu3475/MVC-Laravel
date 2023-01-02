@auth
<x-menu_user_account></x-menu_user_account>
@endauth
<header aria-label="Site Header" class="shadow-lg ">
    <div
      class="mx-auto flex h-16 max-w-screen-xl items-center justify-between px-4 "
    >
    <a href="{{route('home')}}"><img src="{{URL::asset('/images/Voodies_logo100.png')}}" alt="Voodies Logo" class="w-10 shadow-lg "></a>
      <div class="flex w-0 flex-1 lg:hidden ml-4 md:hidden">
        <button href="{{route('login')}}"  onclick="open_menu()" class=" rounded-full bg-gray-100  text-gray-600" type="button">
          <span class="sr-only">Account</span>
        
          <svg class="h-8 w-8 bg-gray-100 p-1 -mt-1 rounded-full stroke-blue-700 hover:stroke-white hover:bg-gradient-to-r from-blue-900 via-blue-600 to-blue-500" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
        </button>
      </div>
  
      <div class="flex items-center gap-4">
        <a href="{{route('login')}}">
          <span class="sr-only">Logo</span>
          <span class="h-10 w-20 rounded-lg bg-gray-200"></span>
        </a>
     
        {{-- <form class="mb-0 hidden md:flex" action="{{route('search_post',['keywords'=>"chat"])}}" method="GET" > --}}

        <form class="mb-0 hidden md:flex" action="{{route('search_post')}}" method="POST" >  
          @method('put')
          @csrf
          <div class="relative ml-4">
            <input
              class="h-10 rounded-lg  border-2 w-60 border-gray-400 pr-10 pl-4 text-base placeholder-gray-300 focus:z-10"
              placeholder="Search..."
              type="text"
              name="key"
            />
  
            <button
              type="submit"
              class="absolute inset-y-0 right-0 mr-px rounded-r-lg p-2 text-gray-600"
            >
              <span class="sr-only">Submit Search</span>
              <svg
                class="h-5 w-5 "
                fill="currentColor"
                viewbox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  clip-rule="evenodd"
                  d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                  fill-rule="evenodd"
                ></path>
              </svg>
            </button>
          </div>
        </form>
      </div>
  {{-- --------bouton loupe------ md et sm ----------- --}}
      <div class="flex w-0 flex-1 justify-end md:hidden lg:hidden">
        <button class="rounded-full bg-gray-100 p-2 text-gray-500" type="button">
          <span class="sr-only">Menu</span>
          <svg
            class="h-5 w-5"
            fill="currentColor"
            viewbox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              clip-rule="evenodd"
              d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
              fill-rule="evenodd"
            ></path>
          </svg>
        </button>
      </div>
  
      <nav
        aria-label="Site Nav"
        class="hidden items-center justify-center gap-8 text-sm font-medium md:flex lg:flex lg:w-0 lg:flex-1 mt-6"
      >
      

      <div class="flex border-gray-300 -mt-4">
        <a href="{{route('home')}}" class="flex items-center rounded-lg  px-4 p-1 text-gray-600 hover:bg-gradient-to-r from-red-900 via-red-600 to-red-500 hover:text-white">
          <svg class="md:w-6 h-6 lg:w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
        </a>
      </div>
        @auth
        <div class="flex rounded-lg border-gray-300 -mt-4">
        <a href="{{route('zip')}}" class="flex items-center rounded-lg  px-4 p-1 text-gray-600 hover:bg-gradient-to-r from-red-900 via-red-600 to-red-500 hover:text-white">
          <svg class="md:w-6 h-6 lg:w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
          <span class="flex  ml-3 text-sm font-medium">Post</span>
        </a></div>
        @endauth

        <div class="flex border-gray-300 -mt-4">
          <a href="{{route('contact_us')}}" class="flex items-center rounded-lg  px-4 p-1 text-gray-600 hover:bg-gradient-to-r from-red-900 via-red-600 to-red-500 hover:text-white">
            <svg class="md:w-6 h-6 lg:w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
          </a>
        </div>
       
        <div class="flex border-gray-300 -mt-4">
          
          <a href="{{route('about')}}" class="flex items-center rounded-lg  px-4 p-1 text-gray-600 hover:bg-gradient-to-r from-red-900 via-red-600 to-red-500 hover:text-white">
            <svg class=" md:w-6 h-6 lg:w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
          </a>
        </div>
        
 {{-- @guest permet de ne pas affiche les links vers login et register lorsque on est authentifiés        --}}
@guest
        <div class=" gap-8 -mt-2  mr-2 md:flex lg:hidden">
          <a href="{{route('register')}}" class="flex items-center rounded-lg -mt-2 px-4 p-1 text-gray-600 hover:bg-gradient-to-r from-red-900 via-red-600 to-red-500 hover:text-white">
          <svg class="w-6 h-6 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
          </a>
          <a href="{{route('login')}}" class="-mt-2">
          <svg class="h-8 w-8 bg-gray-100 p-1  rounded-full stroke-blue-700 hover:stroke-white hover:bg-gradient-to-r from-blue-900 via-blue-600 to-blue-500" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
          </a>
        </div>

        

      </nav>
  
      <div class="hidden items-center gap-4 lg:flex">
        <a
          href="{{route('login')}}"
          class="rounded-lg bg-gray-100 hover:text-white hover:bg-gradient-to-r from-blue-900 via-blue-600 to-blue-500 px-5 py-2 text-sm font-medium text-gray-600"
        >
         <p> Log in</p>
        </a>
  
        <a
          href="{{route('register')}}"
          class="rounded-lg text-gray-600 bg-gray-100 hover:text-white hover:bg-gradient-to-r from-blue-900 via-blue-600 to-blue-500 px-5 py-2 text-sm font-medium text-white"
        >
          Sign up
        </a>
      </div>
@endguest
{{-- ------Bouton User pour se deloger lorsqu'il est logged. Apparait seulement lorsqu'un utilisateur est logé.--- --}}
@auth
<div class="  -mt-4">
  
  <a href="" class="">
  <svg class="h-8 w-8 bg-gray-100 p-1  rounded-full stroke-blue-700 hover:stroke-white hover:bg-gradient-to-r from-blue-900 via-blue-600 to-blue-500" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
  </a>
  
</div> 
@endauth

    </div>




  </div>

  {{-- -----------------Mobile-------------------------- --}}
    <div class="border-t border-gray-100 md:hidden">
      <nav
        class="flex items-center space-x-6 justify-center overflow-x-auto p-4 text-sm font-medium"
      >

      <div class="flex">
        <a href="{{route('home')}}" class="flex items-center rounded-lg  px-4 p-1 text-gray-600 hover:bg-gradient-to-r from-red-900 via-red-600 to-red-500 hover:text-white">
          <svg class="w-6  " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
        </a>
      </div>

        @auth
        <div class="flex">
        <a href="{{route('zip')}}" class="flex items-center rounded-lg  px-4 p-1 text-gray-600 hover:bg-gradient-to-r from-red-900 via-red-600 to-red-500 hover:text-white">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
         
        </a></div>
        @endauth

        <div class="flex">
          <a href="{{route('contact_us')}}" class="flex items-center rounded-lg  px-4 p-1 text-gray-600 hover:bg-gradient-to-r from-red-900 via-red-600 to-red-500 hover:text-white">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
          </a>
        </div>

        <div class="flex ">
          <a href="{{route('about')}}" class="flex items-center rounded-lg  px-4 p-1 text-gray-600 hover:bg-gradient-to-r from-red-900 via-red-600 to-red-500 hover:text-white">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
          </a>
        </div>
@guest
        <div class="flex ">
          <a href="{{route('register')}}" class="flex items-center rounded-lg  px-4 p-1 text-gray-600 hover:bg-gradient-to-r from-red-900 via-red-600 to-red-500 hover:text-white">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
          </a>
        </div>
@endguest
     
       
      </nav>
    </div>
  </header>

  <script>
    //permet de rendre invisible le menu account
      $account=document.getElementById('account_menu');
      function open_menu(){
        $account.style.display = '';
        
      }
    </script>
  