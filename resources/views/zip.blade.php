




  <x-app-layout>
  <x-slot name="title">Create ad</x-slot>
  <x-slot name="meta-Description">We are Epitech's student</x-slot>
  <x-slot name="about">


  <div class="mx-auto max-w-screen-xl px-4  sm:px-6 lg:px-8">
    <div class=" mx-auto max-w-lg  ">
 
      <div class=" w/2/6 px-4 py-8 sm:px-6 lg:px-8 mt-6 mb-0 space-y-4 rounded-lg p-8 shadow-2xl rounded-t-lg" >
       
        <div class="w-full grid  grid-cols-1 grid rows-2   ">
            <div class="grid justify-center ">
              <a href="/index" >
                <img src="{{URL::asset('/images/Voodies_logo100.png')}}" class="h-20 rounded-sm shadow-lg">
                </a>
            </div>
            
            <h1 class=" mx-auto  max-w-md mt-2 text-center font-medium text-blue-700 text-shadow rounded-md p-1 px-4 text-2xl "> Place your ad</h1>
        </div>
            
  <form action={{route('location')}} method="post">
    @csrf

        <div>
          <label for="zip_code" class=" font-medium text-sm">Enter your Zip Code</label>
          <div class="relative mt-1">
            <input
              type="number"
              min="1000"
              name="zip_code"
              id="zip_code"
              value="{{old('title')}}"
              class="rounded-lg border-gray-500 border p-1 pr-8 pl-3 md:text-base shadow-sm"
              placeholder="75120"
            />

            @error('zip_code')
            <br> <small class="text-red-600">{{$message}}</small>
            @enderror
            @if(session()->has('message'))
            <br> <small class="text-red-600"> {{ session()->get('message') }}</small>
            @endif
          
          </div>

        </div>
      <div class="mt-4 flex justify-start">
        <button
        type="submit"
        class="rounded-lg px-5 py-1 text-base font-medium text-white bg-gradient-to-r from-lime-900 via-lime-600 to-lime-500"
      >
        Search my city
      </button>
    </div>    
  </form>

      <form action={{route('create_post')}} method="get" >
        @csrf
        <div class="">
          <label for="city" class="text-sm font-medium">City</label>
          <div class="mt-1 flex ">
            <div class="flex w-full" >
            <select required name="city" id="city" class="w-full p-1 pl-3 sm:text-sm md:text-base rounded-md border-gray-500 border " >
             @if(!empty($cities))
              @foreach($cities as $city)
                <option  value="{{$city->name ?? ''}}">{{$city->name ?? ''}}</option>
              @endforeach 
              @endif
            </select>

            @error('city')
            <br> <small class="text-red-600">{{$message}}</small>
            @enderror
          
          </div>
        </div>

        <div class="mt-4">
          <button
          type="submit"
          class="block w-full rounded-lg px-5 py-3 text-xl font-medium text-white bg-gradient-to-r from-blue-900 via-blue-600 to-blue-500"
        >
          Continue
        </button>
        </div>
     
    </form>    
 </div>
</div>


</div>
 </x-slot>
</x-app-layout>
  


