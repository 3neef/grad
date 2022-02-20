<x-app-layout>
   <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
             {{ __('Index') }}
        </h2>
      </x-slot>
      {{--taileind css table--}}
      <div>
        <button onclick="openModal()" class='mt-4 mb-4 float-righ inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500'>Generate Profile QR Code</button>
    </div>
   
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
          <h3 class="text-lg leading-6 font-medium text-gray-900">
            Applicant Information
          </h3>
          <p class="mt-1 max-w-2xl text-sm text-gray-500">
            Personal details and application.
          </p>
        </div>
        <div class="border-t border-gray-200">
          <dl>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">
                Name
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{$user->personal->fname}} {{$user->personal->mname}} {{$user->personal->lname}}
              </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">
                Application for
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{$user->med->blood}}
              </dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">
                Email address
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{$user->email}}
              </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">
                Gender
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{$user->personal->passport}}
              </dd>
            </div>
           
         
          </dl>
        </div>


        {{-- modal --}}
      
      <div class="main-modal fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
          style="background: rgba(0,0,0,.7);">
          <div
              class="border border-teal-500 shadow-lg modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
              <div class="modal-content py-4 text-left px-6">
                  <!--Title-->
                  <div class="flex justify-between items-center pb-3">
                      <p class="text-2xl font-bold">Your QR Code</p>
                      <div class="modal-close cursor-pointer z-50">
                          <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                              viewBox="0 0 18 18">
                              <path
                                  d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                              </path>
                          </svg>
                      </div>
                  </div>
                  <!--Body-->
                  <div class="my-5">
                    <div class=" flex justify-center visible-print text-center">
                      {!! QrCode::style('round')->margin(5)->size(300)
                        ->backgroundColor(255,255,204)->generate( route('personals.export', $user->personal->passport) ); !!}
                  </div>
                  <p class=" ml-5 text-center text-blue-400">Scan Me</p>
                  </div>
                  <!--Footer-->
                  <div class="flex justify-end pt-2">
                      <button
                          class="focus:outline-none modal-close px-4 bg-gray-400 p-3 rounded-lg text-black hover:bg-gray-300">Cancel</button>
                      {{-- <button
                          class="focus:outline-none px-4 bg-teal-500 p-3 ml-3 rounded-lg text-white hover:bg-teal-400">Confirm</button>
                   --}}</div>
              </div>
          </div>
      </div>
        {{-- endmodal --}}
      </div>
      

      @section('styles')
      <style>
        .animated {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }
      
        .animated.faster {
            -webkit-animation-duration: 500ms;
            animation-duration: 500ms;
        }
      
        .fadeIn {
            -webkit-animation-name: fadeIn;
            animation-name: fadeIn;
        }
      
        .fadeOut {
            -webkit-animation-name: fadeOut;
            animation-name: fadeOut;
        }
      
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
      
            to {
                opacity: 1;
            }
        }
      
        @keyframes fadeOut {
            from {
                opacity: 1;
            }
      
            to {
                opacity: 0;
            }
        }
      </style>
      @endsection
      
      @push('scripts')
      <script>
        const modal = document.querySelector('.main-modal');
        const closeButton = document.querySelectorAll('.modal-close');
      
        const modalClose = () => {
            modal.classList.remove('fadeIn');
            modal.classList.add('fadeOut');
            setTimeout(() => {
                modal.style.display = 'none';
            }, 500);
        }
      
        const openModal = () => {
            modal.classList.remove('fadeOut');
            modal.classList.add('fadeIn');
            modal.style.display = 'flex';
        }
      
        for (let i = 0; i < closeButton.length; i++) {
      
            const elements = closeButton[i];
      
            elements.onclick = (e) => modalClose();
      
            modal.style.display = 'none';
      
            window.onclick = function (event) {
                if (event.target == modal) modalClose();
            }
        }
      </script>
      @endpush
</x-app-layout>
