
{{-- ----------------------------------CONTENU + FILTRE-------------------     --}}


        <div class="">
          <details open class="overflow-hidden rounded border border-gray-200">
            <summary
              class="flex items-center justify-between text text-white px-5 py-3 bg-gradient-to-r from-blue-900 via-blue-600 to-blue-500 lg:hidden"
            >
              <span class="text-sm font-medium"> Toggle Filters </span>
  
              <svg
                class="h-5 w-5"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16"
                />
              </svg>
            </summary>
  
            <form class="border-t border-gray-200 lg:border-t-0" action="{{Route('filter_post')}}" method="post" >
              @csrf
              {{-- --- LISTE DEROULANTE CATEGORIES ----  --}}
              <fieldset>
                <legend
                  class="block w-full bg-gray-50 px-5 py-3 font-medium  text-sm text-white font-medium bg-gradient-to-r from-red-800 via-red-600 to-red-500"
                >Category
                </legend>
  
                <div class="space-y-2 px-5 py-6">
                  <div class="flex items-center">
                    {{-- {{dd($categories)}} --}}
                      <select 
                        name="category" id="category" class="w-36 border border-gray-400 rounded-sm" >
                        <option  value="">Select category</option>
                        @foreach($categories as $category)
                            <option value="{{$category->category ?? ''}}">{{$category->category ?? ''}}</option>
                        @endforeach
                      </select>                                
                  </div>
                         
                  {{-- <div class="pt-2">
                    <button type="button" class="text-xs text-gray-500 underline">
                      Reset category
                    </button>
                  </div> --}}
                </div>
              </fieldset>
       
              {{-- --- CASES A COCHER CONDITION ----  --}}
              <div>
                <fieldset>
                  <legend
                    class="block w-full bg-gray-50 px-5 py-3 font-medium  text-sm text-white font-medium bg-gradient-to-r from-red-800 via-red-600 to-red-500"
                  >
                    Condition
                  </legend>
  
                  <div class="space-y-2 px-5 py-6">
                    <div class="flex items-center">
                      <input
                        id="new"
                        type="checkbox"
                        name=etat[2]
                        class="h-5 w-5 rounded border-gray-300"
                      />
  
                      <label for="new" class="ml-3 text-sm font-medium">
                        New
                      </label>
                    </div>
  
                    <div class="flex items-center">
                      <input
                        id="good"
                        type="checkbox"
                        name=etat[1]
                        class="h-5 w-5 rounded border-gray-300"
                      />
  
                      <label for="new" class="ml-3 text-sm font-medium">
                        Good
                      </label>
                    </div>
  
                    <div class="flex items-center">
                      <input
                        id="12+"
                        type="checkbox"
                        name=etat[0]
                        class="h-5 w-5 rounded border-gray-300"
                      />
  
                      <label for="12+" class="ml-3 text-sm font-medium">
                        Used
                      </label>
                    </div>
  
                 
                    {{-- <div class="pt-2">
                      <button
                        type="button"
                        class="text-xs text-gray-500 underline"
                      >
                        Reset Age
                      </button>
                    </div> --}}
                  </div>
                </fieldset>
              </div>
  
              {{-- --- ZONE DE SAISIE PRICE ----  --}}
              <div>
                <fieldset>
                  <legend
                    class="block w-full  px-5 py-3 text-sm text-white font-medium bg-gradient-to-r from-red-800 via-red-600 to-red-500"
                  >
                    Price
                  </legend>
  
                  <div class="space-y-2 px-5 py-6">
                    <div class="flex items-center">
                      <label for="new" class="ml-3 text-sm font-medium ">
                        Max
                      </label>
                      <input
                        id="number"
                        type="number"
                        name="number_max"
                        class="h-6 w-20 ml-4 pl-2 pr-2 rounded border-gray-300 border border-gray-400"
                      />
                      @error('number_max')<small class="text-red-600 ">{{$message}}</small>@enderror
                    </div>

                    <div class="">
                      <div class="flex items-center">
                        <label for="new" class="ml-3 text-sm font-medium ">
                          Min
                        </label>
                        <input
                          id="number"
                          type="number"
                          name="number_min"
                          class="h-6 w-20 ml-5 pl-2 pr-2 rounded border-gray-300 border border-gray-400"
                        />@error('number_min')<small class="text-red-600 ">{{$message}}</small>@enderror
                      </div>
  
                   
                    {{-- <div class="pt-2">
                      <button
                        type="button"
                        class="text-xs text-gray-500 underline"
                      >
                        Reset location
                      </button>
                    </div> --}}
                  </div>
                </fieldset>
              </div>

              {{-- --- ZONE DE SAISIE LOCATION ----  --}}
              <div>
                <fieldset>
                  <legend
                    class="block w-full  px-5 py-3  text-white text-sm font-medium bg-gradient-to-r from-red-800 via-red-600 to-red-500"
                  >
                    Location
                  </legend>
  
                  <div class="space-y-2 px-5 py-6">
                    <div class="flex items-center">
                      <label for="new" class="ml-3 text-sm font-medium ">
                        City
                      </label>
                      <input
                        id="location"
                        type="text"
                        name="location"
                        placeholder="select city"
                        class="h-6 w-32 ml-4 pl-2 pr-2 rounded border-gray-300 border border-gray-400"
                      />
                      @error('location')<small class="text-red-600 ">{{$message}}</small>@enderror
                    </div>
  
                   
                    {{-- <div class="pt-2">
                      <button
                        type="button"
                        class="text-xs text-gray-500 underline"
                      >
                        Reset location
                      </button>
                    </div> --}}
                  </div>
                </fieldset>
              </div>
  
              {{-- --- ANNULER / ENVOYER FILTRES ----  --}}
              <div
                class="flex justify-between border-t border-gray-200 px-5 py-3"
                >
                <button
                  href = {{route('home')}}
                  name="reset"
                  type="submit"
                  value="reset"
                  class="rounded text-xs font-medium text-gray-600 underline"
                >
                  Reset filters
                </button>
  
                <button
                  name="commit"
                  type="submit"
                  class="rounded-md  p-2 hover:text-black hover:font-medium text-white bg-gradient-to-r from-blue-900 via-blue-600 to-blue-500"
                >
                  Apply Filters
                </button>
              </div>

            </form>

          </details>
        </div>


        </div>
      
  
