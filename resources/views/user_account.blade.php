
  <x-app-layout >
<!-- component -->
<!-- component -->

<x-slot name='user_account'>

   
<div class=" min-h-screen pt-2  my-16">
    <div class="container  mx-auto bg-gradient-to-r from-blue-900 via-blue-600 to-blue-500 border border-gray-300 shadow-lg rounded-md">
        <div class="inputs w-full max-w-2xl p-6 mx-auto">
            <h2 class="text-2xl text-white">Account Setting</h2>
            <form class="mt-6 border-t border-gray-400 pt-4" metod='get' action="{{route('user_update')}}">
               
                @csrf
                <div class='flex flex-wrap -mx-3 mb-6'>
                    <div class='w-full md:w-full px-3 mb-6'>
                        <label for=email class='block uppercase tracking-wide text-white text-xs font-bold mb-2' >email address</label>
                        <div class="flex-shrink w-full inline-block relative">
                        <input id=email name=email class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' id='grid-text-1' type='text' placeholder='Enter email'  required value={{$user_data->email}}>
                        <div class="pointer-events-none absolute top-0 mt-3  right-0 flex items-center px-2 text-gray-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path></svg>
                        </div>
                    </div>
                </div>
                    <div class='w-full md:w-full px-3 mb-6 '>
                        <label for=password class='block uppercase tracking-wide text-white text-xs font-bold mb-2'>password</label>
                        <div class="flex-shrink w-full inline-block relative">
                            <input required type=password minlength=8 id=password name=password  class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' id='grid-text-1' type='text' placeholder='Enter email' value="*******" required>
                            <div class="pointer-events-none absolute top-0 mt-3  right-0 flex items-center px-2 text-gray-600">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                            </div>
                      </div>
                    </div>
                    <div class='w-full md:w-full px-3 mb-6'>
                        <label for=number_ads class='block uppercase tracking-wide text-white text-xs font-bold mb-2'>Ads</label>
                        <div class="flex-shrink w-full inline-block relative">
                            <p id=number_ads name=number_ads value="" class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' id='grid-text-1' type='text' placeholder='Enter email' >{{$user_posts}}</p>
                            <div class="pointer-events-none absolute top-0 mt-3  right-0 flex items-center px-2 text-gray-600">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path></svg>
                            </div>
                        </div>
                    </div>
                    <div class="personal w-full border-t border-gray-400 pt-4">
                        <h2 class="text-2xl text-white">Personal info:</h2>
                        <div class="flex items-center justify-between mt-4">
                            <div class='w-full md:w-1/2 px-3 mb-6'>
                                <label for=first_name class='block uppercase tracking-wide text-white text-xs font-bold mb-2' >first name</label>
                                <input id=first_name name=first_name  class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' id='grid-text-1' type='text' placeholder='first name' value={{$user_data->first_name}} >
                            </div>
                            <div class='w-full md:w-1/2 px-3 mb-6'>
                                <label for=last_name class='block uppercase tracking-wide text-white text-xs font-bold mb-2' >last name</label>
                                <input id=last_name name=last_name  class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' id='grid-text-1' type='text' placeholder='Last name' value={{$user_data->last_name}}>
                            </div>
                        </div>
                        <div class='w-full md:w-full px-3 mb-6'>
                            <label for=login class='block uppercase tracking-wide text-white text-xs font-bold mb-2'>Login</label>
                            <div class="flex-shrink w-full inline-block relative">
                            <input id=login name=login  class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' id='grid-text-1' type='text' placeholder='Login' value={{ucfirst(strtolower($user_data->login))}}>
                            <div class="pointer-events-none absolute top-0 mt-3  right-0 flex items-center px-2 text-gray-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        </div>
                    </div>
                        <div class='w-full md:w-full px-3 mb-6'>
                            <label for=phone_number class='block uppercase tracking-wide text-white text-xs font-bold mb-2'>Phone Number</label>
                            <div class="flex-shrink w-full inline-block relative">
                            <input id=phone_number name=phone_number class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' id='grid-text-1' type='text' placeholder='Phone number'  value={{$user_data->phone_number}}>
                            <div class="pointer-events-none absolute top-0 mt-3  right-0 flex items-center px-2 text-gray-600">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg> 
                            </div>
                        </div>
                    </div>
                        
                    {{-- {{route('user_delete')}} --}}
                        <div class="flex justify-center ">
                            <button type=submit name=user_id value={{$user_data->id}} class="w-1/6 appearance-none hover:bg-gradient-to-r from-red-900 via-red-600 to-red-500 hover:text-white focus:bg-red-600  focus:bg-red-600  bg-white text-red-600 font-medium px-2 py-1 shadow-sm border border-white rounded-md mr-3" type="submit">Modify</button>
                            </form>
                            <form method='post' action="{{route('user_delete')}}" class="w-28">
                                @csrf
                                <button name=user_id value={{$user_data->id}} href="" class="w-full appearance-none hover:bg-gradient-to-r from-red-900 via-red-600 to-red-500 hover:text-white focus:bg-red-600  focus:bg-red-600  bg-white text-red-600 font-medium px-2 py-1 shadow-sm border border-white rounded-md mr-3" type="submit">Delete</button>
                            </form> 
                    </div>

</div>
                   
                </div>
            
        </div>
    </div>
</div>

</x-slot>
</x-app-layout >