


{{-- <x-layouts.app > --}}

  <x-app-layout>
  <x-slot name="title">Create ad</x-slot>
  <x-slot name="meta-Description">We are Epitech's student</x-slot>

  <x-slot name="about">
  

 
    <?php
$file_no_error_css="";
$file_error_css="hidden";  
  ?>
  @error('img1')
  <?php
    $file_error_css="";
    $file_no_error_css="hidden";
    ?>
    @enderror
    
{{-- ------------img1------------------------- --}}
    <?php 
    $image1='/images/camera.png';
    if(isset($post->image1)){
      $image1=$post->image1;
      $image1=Storage::url($post->image1);
      
    }
    
    ?>
{{-- ------------img2------------------------- --}}
  <?php 

  $image2=URL::asset('/images/camera.png');
  if(isset($post->image2)){
    $image2=$post->image2;
    $image2=Storage::url($post->image2);
  }
   
  ?>
{{-- ------------img3------------------------- --}}
    <?php 

    $image3=URL::asset('/images/camera.png');
    if(isset($post->image3)){
      $image3=$post->image3;
      $image3=Storage::url($post->image3);
    }
     
    ?>
{{-- ------------img4------------------------- --}}
      <?php 

      $image4=URL::asset('/images/camera.png');
      if(isset($post->image4)){
        $image4=$post->image4;
        $image4=Storage::url($post->image4);
      }
       
      ?>
{{-- ------------img5------------------------- --}}
        <?php 

        $image5=URL::asset('/images/camera.png');
        if(isset($post->image5)){
          $image5=$post->image5;
          $image5=Storage::url($post->image5);
        }
         
        ?>


















  <div class="mx-auto max-w-screen-xl px-4  sm:px-6 lg:px-8">
    <div class=" mx-auto max-w-lg  ">
     
      <form action="{{route('ad_updated',['id'=>$post->id])}}" method="POST" enctype="multipart/form-data" class=" w/2/6 px-4 py-8 sm:px-6 lg:px-8 mt-6 mb-0 space-y-4 rounded-lg p-8 shadow-2xl rounded-t-lg" >
        @csrf
        @method('put') 
        <div class="w-full grid  grid-cols-1 grid rows-2">
            <div class="grid justify-center ">
              <a href="/index" >
                <img src="{{URL::asset('/images/Voodies_logo100.png')}}" class="h-20 rounded-sm shadow-lg">
                </a>
            </div>
            
            <h1 class=" mx-auto  max-w-md mt-2 text-center font-medium text-blue-700 text-shadow rounded-md p-1 px-4 text-2xl "> Modify your ad</h1>
        </div>
        
        
  
        <div>
          <label for="email" class=" font-medium text-sm">What is the title of the ad?</label>
  
          <div class="relative mt-1">
            <input
              type="title"
              name="title"
              id="title"
              value={{$post->title}}
              class="w-full rounded-lg border-gray-500 border p-1 pr-8 pl-3 md:text-base shadow-sm"
              placeholder="Enter title"
            />
            
            @error('title')
            <br> <small class="text-red-600">{{$message}}</small>
            @enderror

          </div>
        </div>
  
        <div class="">
          <label for="category" class="text-sm font-medium">Category</label>
  
          <div class="mt-1 flex ">
            <div class="flex" >
            <select name="category" id="category" class="md:w-60 w-40 pl-3 sm:text-sm md:text-base rounded-md border-gray-500 border " >
              @foreach($categories as $category)
                <option value="{{$category->category ?? ''}}">{{$category->category ?? ''}}</option>
              @endforeach
            </select> 
          </div>
              <div class="flex sm:mx-5 space-x-2 mx-2 ">
                <fieldset class="mt-4 space-x-6">
                 
                 <?php  
                  $offer="";
                  $request="";
                  

                  switch ($post->type_ad) {
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

              <div class="flex items-center">
                  <input {{$offer}}  checked id="default-radio-1" type="radio" value="offer" name="type_ad" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 ">
                  <label for="default-radio-1" class="ml-2 text font-medium text-gray-900 dark:text-gray-300">Offer</label>
              </div>
    
                <div class="flex items-center  ">
                  <input {{$request}} id="default-radio-2" type="radio" value="request" name="type_ad" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
                  <label for="default-radio-2" class="ml-2 text font-medium text-gray-900 dark:text-gray-300">Request</label>
              </div>
            </div>
        </div> 
        {{-- ---------------text-area------------ --}}
         <div class=" mt-4">
          <div class="mb-4 w-full bg-gray-50 rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600">
            <div class="flex justify-between items-center py-2 px-3 border-b dark:border-gray-600">
                <div class="flex flex-wrap items-center divide-gray-200 sm:divide-x dark:divide-gray-600">
                  <p class="mr-5"> Description</p>
                  <svg class="w-6 h-6 stroke-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                   <p class="text-xs text-gray-500 pl-12 xs:pl-12 md:pl-36 md:ml-10">3000 characters max</p>
                </div>
            </div>
            <div class="py-2 px-4 bg-white rounded-b-lg dark:bg-gray-800">
                <label for="editor" class="sr-only">Publish add</label>
                <textarea id="editor" rows="8" name=description maxlength="3000" value="" class="block  h-24 px-0 w-full text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Write your description..." >{{$post->description}}</textarea>
            </div>
            @error('description')
            <br> <small class="text-red-600 pl-4">{{$message}}</small>
            @enderror
        </div>
      {{-- -----------End text-area---------- --}}
      
      {{-- -----IMAGES UPLOAD ------------- --}}
<div class=" padre grid grid-cols-3 h-52 border rounded-md shadow-sm border-gray-200 ">
      
  <div class="columna1 grid-cols-1 ml-4 -mt-1 ">
      
    <div class="image1  ">
      <div class="1 hidden  h-6 relative text-transparent">
          <input type="file"  id="imgInp" name="img1" accept="image/png, image/jpeg" value="{{old('image1')}}"/>
      </div>
      <div class="2 mt-2 h-20 w-20 hover:h-24 hover:w-24 " >
          <label for="imgInp">
           <img id="image1" src="{{$image1}}" alt="image-require"  class="{{$file_no_error_css}} rounded-md shadow-sm" className="h-20 w-20 "/>
            <img id="image1" src="{{URL::asset('/images/camera_plus.png')}}" alt="image-require" class= "{{$file_error_css}} rounded-md shadow-sm " className="h-20 w-20 ">
          </label>
      </div>
    </div>

    <div class="image2">
      <div class="1 hidden  h-6 relative text-transparent">
        <input type="file" value="{{old('image2')}}"  id="imgInp2" name="img2" accept="image/png, image/jpeg"/>
      </div>
      <div class="2 mt-2 h-20 w-20 hover:h-24 hover:w-24" >
        <label for="imgInp2">
          <img id="image2" src="{{$image2}}" alt="" class="rounded-md shadow-sm" className="h-20 w-20"/>
        </label>
      </div>
  </div>
</div>

<div class="columna2 grid-cols-1 -mt-1">
      
  <div class="image3">
    <div class="1 hidden  h-6 relative text-transparent">
        <input type="file"  id="imgInp3" name="img3" accept="image/png, image/jpeg" value="{{old('image3')}}" />
    </div>
    <div class="2 mt-2 h-20 w-20 hover:h-24 hover:w-24" >
        <label for="imgInp3">
         <img id="image3" src="{{$image3}}" alt=""class="rounded-md shadow-sm" className="h-20 w-20"/>
        </label>
    </div>
  </div>

  <div class="image4">
    <div class="1 hidden  h-6 relative text-transparent">
      <input type="file"  id="imgInp4" name="img4" accept="image/png, image/jpeg" value="{{old('image4')}}"/>
    </div>
    <div class="2 mt-2 h-20 w-20 hover:h-24 hover:w-24" >
      <label for="imgInp4">
        <img id="image4" src="{{$image4}}" alt="" class="rounded-md shadow-sm" className="h-20 w-20"/>
      </label>
    </div>
</div>
</div>

<div class="columna3 grid-cols-1 w-32 -mt-1">
      
  <div class="image5">
    <div class="1 hidden  h-6 relative text-transparent">
        <input type="file"  id="imgInp5" name="img5" accept="image/png, image/jpeg" value="{{old('image5')}}"/>
    </div>
    <div class="2 mt-2 h-28 w-28 hover:h-36 hover:w-36" >
        <label for="imgInp5">
         <img id="image5" src="{{$image5}}" alt="" class="rounded-md shadow-sm" className="h-32 w-32"/>
        </label>
    </div>
  </div>

</div>
@error('img1')
  <br> <small class="text-red-600 text-left ">{{$message}}</small>
  {{$file_error_css=""}}
@enderror

</div>
</div>
  
       {{-- ----PRICE----- --}}

      <div class="grid grid-cols-2  mt-4 ">
        <div class="grid w-40 md:w-60">
        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Price €</label>
        <input type="number" id="price" name=price value="{{$post->price}}" min=0 class="block p-1 w-32 text-gray-900 font-medium bg-gray-50 rounded-lg border border-gray-300  focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        @error('price')
         <small class="text-red-600 ">{{$message}}</small>
        @enderror
       </div> 
        <div class="md:flex  md:mx-6 md:mt-8 md:space-x-1 ml-10">
          
          <?php  
          $newcondition="";
          $goodcondition="";
          $usedcondition="";

          switch ($post->condition_id) {
              case 0:
                  $usedcondition="checked";
                  break;
              case 1:
                  $goodcondition="checked";
                  break;
              case 2:
                  $newcondition="checked";
                  break;
              default:
                  $newcondition="";
                  $goodcondition="";
                  $usedcondition="";
          }

?>

          <div class="flex items-center">
              <input  {{$newcondition}}  id="default-radio-1" type="radio" value="2" name="condition" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 ">
              <label for="default-radio-1" class="ml-2 text font-medium text-gray-900 dark:text-gray-300">New</label>
          </div>

          <div class="flex items-center ">
              <input {{$goodcondition}}  checked id="default-radio-2" type="radio" value="1" name="condition" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
              <label for="default-radio-2" class="ml-2 text font-medium text-gray-900 dark:text-gray-300">Good</label>
          </div>
          <div class="flex items-center">
              <input {{$usedcondition}} id="default-radio-3" type="radio" value="0" name="condition" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
              <label for="default-radio-3" class="ml-2 text font-medium text-gray-900 dark:text-gray-300">Used</label>
          </div>
       </div> 
      </div>
{{-- ------END PRICE------ --}}

{{-- ------City------ --}}
      <div class="grid grid-cols-2  mt-4 ">
        <div class="grid w-40 md:w-60">
        <label for="location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" >City</label>
        <input  type="text" id="location" name="location" min=0 max=99999 value={{$post->location}} class="block p-1 w-full text-gray-900 font-medium bg-gray-50 rounded-lg border border-gray-300  focus:ring-blue-500 focus:border-blue-500" >
        @error('location')
        <small class="text-red-600 ">{{$message}}</small>
       @enderror


      </div> 
      </div>
      
    </div>  
{{-- ---------------END- CIty----------      --}}
<div class="grid col-span-2  mx-auto ">
  <div class="grid grid-cols-2 gap-10 ">
    
    <button  href="" type="submit" class="sm:w-40 w-24 rounded-md  hover:text-white hover:bg-gradient-to-r from-blue-900 via-blue-600 to-blue-500 border border-blue-900 font-medium  text-blue-900">Modify</button>
  </form>
    
    <form action="{{route('delete_ad',['id'=>$post->id])}}" method='POST'>
      @csrf
     <button href="" onclick='delete_ad()' class="sm:w-40 w-24 rounded-md text-red-600 font-medium border-2 border-red-600 hover:border-white hover:bg-gradient-to-r from-red-900 via-red-600 to-red-500 hover:text-white">Delete</button> 
    </form>
  </div>
</div>
  
      
        
        
 
     </div>
  </div> 

  


  
  
  <script>
 // Script js permettant d'afficher les miniatures des images sans devoir faire un refresh de la page.
imgInp.onchange = evt => {
  const [file] = imgInp.files
 
  if (file) {
    image1.src = URL.createObjectURL(file)
  }
}

imgInp2.onchange = evt => {
 const[file2]=imgInp2.files
 if (file2) {
    image2.src = URL.createObjectURL(file2)
  }
}

imgInp3.onchange = evt => {
 const[file3]=imgInp3.files
 if (file3) {
    image3.src = URL.createObjectURL(file3)
  }
}

imgInp4.onchange = evt => {
 const[file4]=imgInp4.files
 if (file4) {
    image4.src = URL.createObjectURL(file4)
  }
}
imgInp5.onchange = evt => {
 const[file5]=imgInp5.files
 if (file5) {
    image5.src = URL.createObjectURL(file5)
  }
}




$('#file-select-button').click(function(){
    $('.upload input').click();
});

  </script>
    

  </x-slot>




  
 
</x-app-layout>
  
{{-- </x-layouts.app> --}}

