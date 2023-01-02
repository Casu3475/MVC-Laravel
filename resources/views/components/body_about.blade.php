
    
<div class="  md:w-screen  md:my-8 px-10 mx-auto bg-zinc-50">
  <div class="md:flex md:justify-center pb-10 py-10  ">
          <img src="{{URL::asset('/images/about.jpg')}}"
              class="md:h-40 md:w-40 rounded-full object-cover drop-shadow-xl"
              alt="username"/>
          <div class="ml-10">
              <div class="flex items-center">
                  <h2 class="block leading-relaxed font-normal text-slate-500 font-medium text-3xl">VOodies</h2>
                  <a class="cursor-pointer hidden  h-7 px-3 ml-32 text-right outline-none border-transparent text-center rounded border bg-blue-500 hover:bg-blue-600 text-white  font-medium">Contact Us</a>
              </div>
              <div class="">
                  <h1 class="text-base font-bold font-semibold mb-4 font-mono text-slate-700">How we are</h1>
                  <span class="text-base">We are three code students. We love it even when we don't know why!
                    This was the fruit of two hard weeks of complex work. A few headaches and joy for the work done.</span>   
            </div>
            <div class="grid mt-4">
                <a href="{{route('contact')}}" class=" cursor-pointer  h-7 px-3 w-24 text-center outline-none border-transparent text-center rounded border bg-blue-500 hover:bg-blue-600 text-white  font-medium">Contact Us</a>
            </div> 
        </div>
  </div>

  <div class="border-b  border-gray-300  mt-4"></div>
  <article class="mt-5 grid grid-cols-3 gap-10">
      <div class="cursor-pointer relative mt-4" style="width:300px; height:300px">
          <img src="{{URL::asset('/images/harmonia.jpg')}}"
              class="foto w-full h-full object-cover rounded-3xl drop-shadow-xl"
              alt="Landscape" />
      </div>
      <div class="cursor-pointer relative mt-4" style="width:300px; height:300px">
          <img src="{{URL::asset('/images/pc_code.jpg')}}"
              class="foto w-full h-full object-cover rounded-3xl drop-shadow-xl"
              alt="coding pc" />
      </div>
      <div class="cursor-pointer relative mt-4" style="width:300px; height:300px">
          <img src="{{URL::asset('/images/village.jpeg')}}"
              class="foto w-full h-full object-cover rounded-3xl drop-shadow-xl "
              alt="Beautiful village" />
      </div>
  </article>
  <div class="h-screen mt-32 text-center mx-auto bg-zinc-50">
   <h1 class=" drop-shadow-lg inline text-5xl  text-slate-700 font-mono">Thank you</h1>
   <svg class="w-10 h-10 inline -mt-20 stroke-teal-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
 
  </div>
</div>
