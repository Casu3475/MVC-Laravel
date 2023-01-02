

<section id="account_menu"
  class=" h-32 fixed inset-y-0 right-0 z-50 flex mt-1 mr-40 md:mr-6 md:mt-16 lg:mr-32 xl:mr-64 2xl:mr-96">
  <div class="max-w-sm">
    <div class="flex  flex-col divide-y divide-gray-200 bg-slate-50 border rounded-md">
      <div class="">
        <header class="flex h-7  items-center pl-2">
          <span class="text-sm   font-medium uppercase tracking-widest">
            {{Auth::user()->login}}
          </span>

          <button onclick="close_menu()" aria-label="Close menu" class="h-4 w-4 pl-10 border-gray-400" type="button"
            name="close_bar">
            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-5 w-5 stroke-blue-700" fill="none"
              viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </header>

        <nav
          class="flex h-8 flex-col divide-y divide-gray-200 border-t border-b border-gray-200 text-sm font-medium text-gray-500 hover:bg-gray-200">
          <form action="{{route('dashboard')}}" method='POST'>
            @csrf
            <button href="" class="flex items-center px-6 py-1">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                </path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
              </svg>
              <p class="ml-2">Dashboard</p>
            </button>
          </form>
        </nav>

        <nav
        class="flex h-8 flex-col divide-y divide-gray-200 border-t border-b border-gray-200 text-sm font-medium text-gray-500 hover:bg-gray-200">
        <form action="{{route('user_account')}}" method='post'>
         @csrf
          <button type=submit href="" class="flex items-center px-6 py-1" name='$id' value="test">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
            <p class="ml-2"> Account</p>
          </button>
        </form>
      </nav>
        
        
        
        
        
        <nav
          class="flex h-8 flex-col divide-y divide-gray-200 border-t border-b border-gray-200 text-sm font-medium text-gray-500 hover:bg-gray-200">
          <form action="{{route('logout')}}" method='POST'>
            @csrf
            <button href="" class="flex items-center px-6 py-1 ">
              <svg class="w-6 h-6 stroke-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
              </svg>
              <p class="ml-2"> Logout</p>
            </button>
          </form>
        </nav>

       


      </div>
    </div>
  </div>
</section>



<script>
  //permet de rendre invisible le menu account
  $account=document.getElementById('account_menu');
  function close_menu(){
    $account.style.display = 'none';
  }
</script>