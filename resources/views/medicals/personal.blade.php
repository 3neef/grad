<x-app-layout>
   <x-slot name="header">
        
     <div class="my-6 lg:my-12 container px-6 mx-auto flex flex-col lg:flex-row items-start lg:items-center justify-between pb-4 border-b border-gray-300">
       <div>
           <h4 class="text-2xl font-bold leading-tight text-gray-800">User Profile</h4>
           <ul class="flex flex-col md:flex-row items-start md:items-center text-gray-600 text-sm mt-3">
               <li class="flex items-center mr-3 mt-3 md:mt-0">
                   <span class="mr-2">
                       <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-paperclip" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                           <path stroke="none" d="M0 0h24v24H0z" />
                           <path d="M15 7l-6.5 6.5a1.5 1.5 0 0 0 3 3l6.5 -6.5a3 3 0 0 0 -6 -6l-6.5 6.5a4.5 4.5 0 0 0 9 9 l6.5 -6.5" />
                       </svg>
                   </span>
                   <span>Active</span>
               </li>
               <li class="flex items-center mr-3 mt-3 md:mt-0">
                   <span class="mr-2">
                       <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trending-up" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                           <path stroke="none" d="M0 0h24v24H0z" />
                           <polyline points="3 17 9 11 13 15 21 7" />
                           <polyline points="14 7 21 7 21 14" />
                       </svg>
                   </span>
                   <span> Trending</span>
               </li>
               <li class="flex items-center mt-3 md:mt-0">
                   <span class="mr-2">
                       <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plane-departure" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                           <path stroke="none" d="M0 0h24v24H0z" />
                           <path d="M15 12h5a2 2 0 0 1 0 4h-15l-3 -6h3l2 2h3l-2 -7h3z" transform="rotate(-15 12 12) translate(0 -1)" />
                           <line x1="3" y1="21" x2="21" y2="21" />
                       </svg>
                   </span>
                   <span>Started on 29 Jan 2020</span>
               </li>
           </ul>
       </div>
       <div class="mt-6 lg:mt-0">
           <a href="{{route('personals.edit', $user->personal->id )}}">
            <button class="transition duration-150 ease-in-out hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 border bg-indigo-700 rounded text-white px-8 py-2 text-sm">Edit Profile</button>
          </a>
       </div>
       
   </div>
      </x-slot>
      {{--taileind css table--}}
      
   
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-2 sm:px-6">
          
          <h3 class="text-lg leading-6 font-medium text-gray-900">
            Applicant Information
          </h3>
          <p class="mt-1 max-w-2xl text-sm text-gray-500">
            Personal details and application.
          </p>
          <div>
            <button onclick="openModal()" class='mt-4 mb-4 float-righ inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500'>Generate Profile QR Code</button>
        </div>
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
        <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
          <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Doctor Visits</h2>
      
          
       
          {{-- ops --}}
          <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 xl:grid-cols-3">
            @foreach ($user->visits as $visit)
                
            <div class="p-8 space-y-3 border-2 border-blue-400 dark:border-blue-300 rounded-xl">
              <span class="inline-block text-blue-500 dark:text-blue-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                    </svg>
                </span>

                <h1 class="text-2xl font-semibold text-gray-700 capitalize dark:text-white">{{$visit->doctor_name}}</h1>
                
                <p class="text-gray-500 dark:text-gray-300">
                  {{$visit->diagnosis}}
                </p>
                <p class="mt-1 text-sm text-gray-500">{{$visit->created_at->format('d/m/Y' )}}</p>


                <a href="#" class="inline-flex p-2 text-blue-500 capitalize transition-colors duration-200 transform bg-blue-100 rounded-full dark:bg-blue-500 dark:text-white hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                </a>
              </div>
              
              
              
              @endforeach
              
            </div>
          
        {{-- modal --}}
      
      <div class="main-modal fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
          style="background: rgba(0, 0, 0, 0.7);">
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
