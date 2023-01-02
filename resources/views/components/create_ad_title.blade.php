
  


  <div class="mx-auto max-w-screen-xl px-4  sm:px-6 lg:px-8 ">
    <div class=" mx-auto max-w-lg  ">
 
      <form action="" class=" w/2/6 px-4 py-16 sm:px-6 lg:px-8 mt-6 mb-0 space-y-4 rounded-lg p-8 shadow-2xl rounded-t-lg" >
        <div class="w-full grid  grid-cols-1 grid rows-2   ">
            <div class="grid justify-center ">
              <a href="/index" >
                <img src="{{URL::asset('/images/Voodies_logo100.png')}}" class="h-20 rounded-sm shadow-lg">
                </a>
            </div>
            
            <h1 class=" mx-auto  max-w-md mt-2 text-center font-medium text-blue-700 text-shadow rounded-md p-1 px-4 text-2xl "> Place your ad</h1>
        </div>
        
        
  
        <div>
          <label for="email" class=" font-medium text-sm">What is the title of the ad?</label>
  
          <div class="relative mt-1">
            <input
              type="title"
              name="'title"
              id="title"
              required
              class="w-full    rounded-lg border-gray-500 border p-1 pr-8 pl-3 md:text-xl shadow-sm"
              placeholder="Enter title"
            />

          </div>
        </div>
  
        <div class="">
          <label for="category" class="text-sm font-medium">Category</label>
  
          <div class="mt-1 flex ">
            <div class="flex" >
            <select name="category" id="category" class="md:w-60 w-40 pl-3 sm:text-sm md:text-xl rounded-md border-gray-500 border " >
                <option value="">Category</option>
                {{-- @foreach($categories as $category)
                
                <option value="">{{$category->id ?? "----"}}</option>
                @endforeach     --}}
              </select>
            </div>
              <div class="flex sm:mx-5 space-x-2 mx-2 ">
                
              <div class="flex items-center">
                  <input checked id="default-radio-1" type="radio" value="new" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 ">
                  <label for="default-radio-1" class="ml-2 text font-medium text-gray-900 dark:text-gray-300">Offer</label>
              </div>
    
                <div class="flex items-center  ">
                  <input id="default-radio-2" type="radio" value="good" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
                  <label for="default-radio-2" class="ml-2 text font-medium text-gray-900 dark:text-gray-300">Request</label>
              </div>
            </div>
        </div> 
        {{-- ---------------text-area------------ --}}
         <div class=" mt-4">
          <div class="mb-4 w-full bg-gray-50 rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600">
            <div class="flex justify-between items-center py-2 px-3 border-b dark:border-gray-600">
                <div class="flex flex-wrap items-center divide-gray-200 sm:divide-x dark:divide-gray-600">
                    <div class="flex items-center space-x-1 sm:pr-4">
                        <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Embed map</span>
                        </button>
                        <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Upload image</span>
                        </button>
                    </div>
                </div>
                
               
            </div>
            <div class="py-2 px-4 bg-white rounded-b-lg dark:bg-gray-800">
                <label for="editor" class="sr-only">Publish add</label>
                <textarea id="editor" rows="8" name=description value="" class="block px-0 w-full text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Write your description..." required></textarea>
            </div>
        </div>
      {{-- -----------End text-area---------- --}}
      
      {{-- ----PRICE----- --}}
      <div class="grid grid-cols-2  ">
        <div class="grid w-40 md:w-60">
        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Price</label>
        <input type="number" id="price" name=price value="10" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300  focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div> 
        <div class="md:flex  md:mx-6 md:mt-8 md:space-x-1 ml-10">  
          <div class="flex items-center">
              <input checked id="default-radio-1" type="radio" value="new" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 ">
              <label for="default-radio-1" class="ml-2 text font-medium text-gray-900 dark:text-gray-300">New</label>
          </div>

          <div class="flex items-center ">
              <input id="default-radio-2" type="radio" value="good" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
              <label for="default-radio-2" class="ml-2 text font-medium text-gray-900 dark:text-gray-300">Good</label>
          </div>
          <div class="flex items-center">
              <input id="default-radio-3" type="radio" value="used" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
              <label for="default-radio-3" class="ml-2 text font-medium text-gray-900 dark:text-gray-300">Used</label>
          </div>
       </div> 
      
      </div>
      
      {{-- ------END PRICE------ --}}
    </div>  
    </div>    
  {{-- ---------------END-----------      --}}
        <button
          type="submit"
          class="block w-full rounded-lg px-5 py-3 text-xl font-medium text-white bg-gradient-to-r from-blue-900 via-blue-600 to-blue-500"
        >
          Send
        </button>
  
        <p class="text-center text-sm text-gray-500">
          No account?
          <a class="underline" href="">Sign up</a>
        </p>
      </form>
    </div>
  </div>


  

  

