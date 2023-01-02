

@if(session('status'))
    <div class="z-10 flex mx-auto shadow:lg mt-32 w-1/2 xl:1/4 lg:1/3">
  <div class="modal fade  w-full h-full outline-none overflow-x-hidden overflow-y-auto"
  id="alert_message" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog relative w-auto pointer-events-none shadow:lg ">
    <div
      class=" bg-gray-100 border shadow:lg border-gray-300 modal-content  shadow-lg relative flex flex-col w-full pointer-events-auto  bg-clip-padding rounded-md  text-current">
      <div
        class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
        <img src="{{URL::asset('/images/Voodies_logo100.png')}}" alt="logo voodies" class="h-8 w-8">
        
       
      </div>
      <div class="modal-body relative p-4">
        {{session('status')}}
      </div>
      <div
        class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
        <button type="button" onclick="close_alert()"
          class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out"
          data-bs-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
</div>
      <script>
        //permet de rendre invisible l'alert
          $alert=document.getElementById('alert_message');
          function close_alert(){
            $alert.style.display = 'none';
          }
        </script>
      @endif

