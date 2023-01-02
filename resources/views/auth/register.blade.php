
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="@yield('meta-description','Default meta description')">
        <link rel="icon" type="image/png" href="{{URL::asset('/images/Voodies_favicon.png')}}" />
        <title>Voodies register</title>
        @vite('resources/css/app.css')
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

       
       

    </head>
    <body class=""> 
  
    
<section class="bg-white">
    <div class="lg:grid lg:min-h-screen lg:grid-cols-12">
      <section
        class="relative flex h-32 items-end bg-gray-900 lg:col-span-5 lg:h-full xl:col-span-6"
      >
        <img
          alt="Hello"
          src="{{URL::asset('/images/hello.jpg')}}"
          class="absolute inset-0 h-full w-full object-cover opacity-80"
        />
  
        <div class="hidden lg:relative lg:block lg:p-12">
          <a class="block text-white" href="{{route('home')}}">
            <span class="sr-only">Home</span>
            <div class=" bg-gradient-to-r from-red-900 via-red-600 to-red-500 font-medium text-white rounded-full "> <p class="text-center"> VOodies</p></div>
        </a>
          <h2 class="mt-6 text-2xl font-bold text-white sm:text-3xl md:text-4xl">
            Welcome to VOodies 
          </h2>
      
  
          <p class="mt-4 leading-relaxed text-xl font-mono text-white/90">
            Sell, buy, near you...
          </p>
        </div>
      </section>
  
      <main
        aria-label="Main"
        class="flex items-center justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:py-12 lg:px-16 xl:col-span-6"
      >
        <div class="max-w-xl lg:max-w-3xl">
          <div class="relative -mt-16 block lg:hidden">
            <a
              class="inline-flex h-16 w-16 items-center justify-center rounded-full bg-white text-blue-600 sm:h-20 sm:w-20"
              href="/"
            >
              <span class="sr-only">Home</span>
           <div class=" bg-gradient-to-r from-red-900 via-red-600 to-red-500 font-medium text-white rounded-full h-16 w-16 "> <p class="text-center  mt-5"> VOodies</p></div>
            </a>
  
            <h1
              class="mt-2 text-2xl font-bold text-gray-900 sm:text-3xl md:text-4xl"
            >
              Welcome to VOodies 
            </h1>
  
            <p class="mt-4 leading-relaxed text-gray-500">
                Sell, buy, near you...
            </p>
          </div>
  
          <form action="{{route('register')}}" method='POST'class="mt-8 grid grid-cols-6 gap-6">
            @csrf
            <div class="col-span-6 sm:col-span-3">
              <label
                for="FirstName"
                class="block text-sm font-medium text-gray-700"
              >
                First Name
              </label>
  
              <input
                type="text"
                id="FirstName"
                name="first_name"
                value='{{old('first_name')}}'
                autofocus="autofocus"
                class="mt-1 w-full pl-2 border border-slate-400  md:text-lg rounded-md  bg-white text-sm text-gray-700 shadow-sm"
              />
              @error('first_name')
                <br> <small class="text-red-600 ">{{$message}}</small>
              @enderror
            </div>
  
            <div class="col-span-6 sm:col-span-3">
              <label
                for="LastName"
                class="block text-sm font-medium text-gray-700"
              >
                Last Name
              </label>
  
              <input
                type="text"
                id="LastName"
                name="last_name"
                value='{{old('last_name')}}'
                class="mt-1 w-full pl-2 rounded-md  border border-slate-400  md:text-lg bg-white text-sm text-gray-700 shadow-sm"
              />
              @error('Last_name')
                <br> <small class="text-red-600 ">{{$message}}</small>
              @enderror
            </div>
  
            <div class="col-span-6">
              <label for="Email" class="block text-sm font-medium text-gray-700">
                Email
              </label>
  
              <input
                type="email"
                id="Email"
                name="email"
                value='{{old('email')}}'
                class="mt-1 w-full pl-2 rounded-md border border-slate-400  md:text-lg bg-white text-sm text-gray-700 shadow-sm"
              />
              @error('email')
                <br> <small class="text-red-600 ">{{$message}}</small>
              @enderror
            </div>
  
            <div class="col-span-6 sm:col-span-3">
              <div class='relative'>
              <label
                for="password"
                class="block text-sm font-medium text-gray-700"
              >
                Password
              </label>
  
              <input
                type="password"
                id="password"
                name="password"
                value=''
                class="mt-1 w-full pl-2 rounded-md border border-slate-400  md:text-lg bg-white text-sm text-gray-700 shadow-sm"
              />
              <span class="absolute inset-y-0 right-1 inline-flex items-center  mt-6">
          
                <a  type="checkbox" onmousedown="myFunction()">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 stroke-blue-600"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                    />
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                    />
                  </svg></a>
                </span>

              @error('password')
                <br> <small class="text-red-600 ">{{$message}}</small>
              @enderror
            </div>
          </div>
  
            <div class="col-span-6 sm:col-span-3">
              <div class='relative'>
              <label
                for="password_confirmation"
                class="block text-sm font-medium text-gray-700"
              >
                Password Confirmation
              </label>
  
              <input
                type="password"
                id="password_confirmation"
                name="password_confirmation"
                value=''
                class="mt-1 w-full pl-2 rounded-md border border-slate-400  md:text-lg bg-white text-sm text-gray-700 shadow-sm"
              />
              <span class="absolute inset-y-0 right-1 inline-flex items-center  mt-6">
          
                <a  type="checkbox" onmousedown="myFunction2()">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 stroke-blue-600"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                    />
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                    />
                  </svg></a>
                </span>




              @error('password_confirmation')
                <br> <small class="text-red-600 ">{{$message}}</small>
              @enderror
            </div>
            </div>

            
            <div class="col-span-6 sm:col-span-3">
                <label
                  for="PhoneNumber"
                  class="block text-sm font-medium text-gray-700"
                >
                  Phone Number
                </label>
    
                <input
                  type="phone"
                  id="phone_number"
                  name="phone_number"
                  value='{{old('phone_number')}}'
                  
                  class="mt-1 w-full pl-2 rounded-md border border-slate-400  md:text-lg bg-white text-sm text-gray-700 shadow-sm"
                />
                @error('phone_number')
                <br> <small class="text-red-600 ">{{$message}}</small>
                @enderror
                
              </div>
    
              <div class="col-span-6 sm:col-span-3">
                <label
                  for="login"
                  class="block text-sm font-medium text-gray-700"
                >
                 Login
                </label>
    
                <input
                  type="text"
                  id="login"
                  name="login"
                  value='{{old('login')}}'
                  class="mt-1 w-full pl-2 rounded-md border border-slate-400  md:text-lg bg-white text-sm text-gray-700 shadow-sm"
                />
                @error('login')
                <br> <small class="text-red-600 ">{{$message}}</small>
                @enderror
              </div>
  
            <div class="col-span-6">
              <label for="MarketingAccept" class="flex gap-4">
                <input
                  type="checkbox"
                  id="MarketingAccept"
                  name="marketing_accept"
                  class="h-5 w-5 rounded-md border-gray-200 bg-white shadow-sm"
                />
  
                <span class="text-sm text-gray-700">
                  I want to receive emails about events, product updates and
                  company announcements.
                </span>
              </label>
            </div>
  
            <div class="col-span-6">
              <p class="text-sm text-gray-500">
                By creating an account, you agree to our
                <a href="#" class="text-gray-700 underline">
                  terms and conditions
                </a>
                and
                <a href="#" class="text-gray-700 underline">privacy policy</a>.
              </p>
            </div>
  
            <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
              <button
                class="inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500"
              >
                Create an account
              </button>
  
              <p class="mt-4 text-sm text-gray-500 sm:mt-0">
                Already have an account?
                <a href="{{route('login')}}" class="text-gray-700 underline">Log in</a>.
              </p>
            </div>
          </form>
        </div>
      </main>
    </div>
  </section>

  {{-- Script permettant de visualiser les mots de passe au cliqk de l'icon oeil --}}
  
  <script type="text/javascript">
    function myFunction() {
      var x = document.getElementById("password");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      
      }}

      function myFunction2() {
      var x = document.getElementById("password_confirmation");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
    </script>
</body> 
</html>

    
