
{{-- ----------Display one card for one ad in index page  Petite card------------ --}}

 <div class="grid grid-cols-1 md:grid md:grid-cols-3 md:grid-rows-2 gap-6 ">
  @foreach($ads as $ad)
  
  <div class="grid grid-cols-1 md:grid md:grid-cols-3 md:grid-rows-2 gap-6 ">
    <div class="">
      <div class="mt-8 ">
        <article class="overflow-hidden rounded-lg shadow transition hover:shadow-lg">
            <img
              alt="Office"
              src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
              class="h-32 w-full object-cover"
            />
          
            <div class="bg-white p-4 sm:p-6">
              <time datetime="2022-10-10" class="block  text-xs text-gray-500">
                {{-- {{$ad['created_at']}} --}}
                {{$ad->creates_at}}
              </time>
        
              <p class="mb-2 mt-2 text-right text-gray-500">Category</p>
            
        
           <div class="grid grid-cols-2 grid-rows-1">
            <div class="grid">
                <h3  class="mt-0.5 text-lg font-medium  text-gray-900">
                   {{-- {{$ad->creates_at}} --}}
                   {{$ad->title}}
                </h3>
            </div>
            <div class="grid justify-end">
                <h3 class="mt-0.5 text-lg text-gray-900">
                  {{-- {{$ad['price']}} --}}
                  {{$ad->price}}
                </h3>
            </div>
            </div>
              <p class="mt-2 text-sm leading-relaxed text-gray-500 line-clamp-3 text-justify">
                {{-- {{$ad['description']}} --}}
                 {{$ad->description}} 
              </p>
              
              <div clas="grid">
              <p class="mt-2 inline-block font-medium">Location</p>
              <p class="mt-2 bg-gray-50 p-2 text-right w-full">{{$ad['zip']}} </p> {{-- {{$ad['zip']}}  {{$ad['location']}} --}}
              </div>
            
            </div>
          </article>
        </div>
    </div>
    @endforeach
  </div>
 


