<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/init-alpine.js') }}"></script>
    </head>
    <body>
        <main>
            <!-- component -->
<div class="font-sans bg-white flex flex-col min-h-screen w-full">
    <div>
    <div class="bg-gray-200 px-4 py-4">
      <div
        class="w-full md:max-w-6xl md:mx-auto md:flex md:items-center md:justify-between"
      >
        <div>
          <a href="#" class="inline-block py-2 text-gray-800 text-2xl font-bold"
            >Stats.</a
          >
        </div>
        
        <div>
          <div class="hidden md:block">
            <a
              href="#"
              class="inline-block py-1 md:py-4 text-gray-600 mr-6 font-bold"
              >How it Works</a
            >
            <a
              href="#"
              class="inline-block py-1 md:py-4 text-gray-500 hover:text-gray-600 mr-6"
              >Solutions</a
            >
              
            <a
              href="#"
              class="inline-block py-1 md:py-4 text-gray-500 hover:text-gray-600 mr-6"
              >Pricing</a
            >
            <a
              href="#"
              class="inline-block py-1 md:py-4 text-gray-500 hover:text-gray-600 mr-6"
              >Desktop</a
            >
          </div>
        </div>
    
        <div class="hidden md:block">
          <a
            href="#"
            class="inline-block py-1 md:py-4 text-gray-500 hover:text-gray-600 mr-6"
            >Login</a
          >
          <a
            href="#"
            class="inline-block py-2 px-4 text-gray-700 bg-white hover:bg-gray-100 rounded-lg"
            >Start a free trial</a
          >
        </div>
      </div>
    </div>
    
    <div class="bg-gray-200 md:overflow-hidden">
      <div class="px-4 py-16">
        <div class="relative w-full md:max-w-2xl md:mx-auto text-center">
          <h1
            class="font-bold text-gray-700 text-xl sm:text-2xl md:text-5xl leading-tight mb-6"
          >
            A simple and smart tool that will help grow your business
          </h1>
    
          <p class="text-gray-600 md:text-xl md:px-18">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit hello.
          </p>
    
          <div
            class="hidden md:block h-40 w-40 rounded-full bg-blue-800 absolute right-0 bottom-0 -mb-64 -mr-48"
          ></div>
    
          <div
            class="hidden md:block h-5 w-5 rounded-full bg-yellow-500 absolute top-0 right-0 -mr-40 mt-32"
          ></div>
        </div>
      </div>
    
      <svg
        class="fill-current bg-gray-200 text-white hidden md:block"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 1440 320"
      >
        <path
          fill-opacity="1"
          d="M0,64L120,85.3C240,107,480,149,720,149.3C960,149,1200,107,1320,85.3L1440,64L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"
        ></path>
      </svg>
    </div>
    
    <div
      class="max-w-4xl mx-auto bg-white shadow-lg relative z-20 hidden md:block"
      style="margin-top: -320px; border-radius: 20px;"
    >
      <div
        class="h-20 w-20 rounded-full bg-yellow-500 absolute top-0 left-0 -ml-10 -mt-10"
        style="z-index: -1;"
      ></div>
    
      <div
        class="h-5 w-5 rounded-full bg-blue-500 absolute top-0 left-0 -ml-32 mt-12"
        style="z-index: -1;"
      ></div>
    
      <div class="h-10 bg-white rounded-t-lg border-b border-gray-100"></div>
      <div class="flex" style="height: 550px;">
     
        
      </div>
    </div>
    
    <div class="px-4 md:hidden">
      <div
        class="-mt-10 max-w-4xl mx-auto bg-white shadow-lg relative z-20"
        style="border-radius: 20px;"
      >
        <div class="flex" style="height: 340px;">
          <div class="w-16 bg-gray-200 px-2 py-6 overflow-hidden rounded-bl-lg">
            <div class="text-center mb-6">
              <div class="w-4 h-4 rounded-full bg-blue-800 mb-2 mx-auto"></div>
              <div class="h-2 w-8 mx-auto rounded-full bg-blue-800"></div>
            </div>
            <div class="text-center mb-6">
              <div class="w-4 h-4 rounded-full bg-gray-300 mb-2 mx-auto"></div>
              <div class="h-2 w-8 mx-auto rounded-full bg-gray-300"></div>
            </div>
            <div class="text-center mb-6">
              <div class="w-4 h-4 rounded-full bg-gray-300 mb-2 mx-auto"></div>
              <div class="h-2 w-8 mx-auto rounded-full bg-gray-300"></div>
            </div>
            <div class="text-center">
              <div class="w-4 h-4 rounded-full bg-gray-300 mb-2 mx-auto"></div>
              <div class="h-2 w-8 mx-auto rounded-full bg-gray-300"></div>
            </div>
          </div>
          <div class="flex-1 py-6 px-4">
            <div class="flex flex-wrap -mx-2">
              <div class="w-1/3 px-2">
                <div
                  class="text-center mb-6 bg-white shadow rounded-lg px-2 py-3"
                >
                  <div
                    class="w-4 h-4 rounded-full bg-green-600 mb-2 mx-auto"
                  ></div>
                  <div class="h-2 w-8 mx-auto rounded-full bg-gray-200"></div>
                </div>
              </div>
              <div class="w-1/3 px-2">
                <div
                  class="text-center mb-6 bg-white shadow rounded-lg px-2 py-3"
                >
                  <div
                    class="w-4 h-4 rounded-full bg-blue-600 mb-2 mx-auto"
                  ></div>
                  <div class="h-2 w-8 mx-auto rounded-full bg-gray-200"></div>
                </div>
              </div>
              <div class="w-1/3 px-2">
                <div
                  class="text-center mb-6 bg-white shadow rounded-lg px-2 py-3"
                >
                  <div
                    class="w-4 h-4 rounded-full bg-orange-600 mb-2 mx-auto"
                  ></div>
                  <div class="h-2 w-8 mx-auto rounded-full bg-gray-200"></div>
                </div>
              </div>
            </div>
    
            <div class="flex flex-wrap -mx-2 mb-6">
              <div class="w-1/2 px-2">
                <div class="shadow h-24 p-2 rounded-lg">
                  <div class="h-20 percentage pt-2">
                    <div class="h-2 bg-gray-200 w-24 mb-2 block"></div>
                    <div class="h-2 bg-gray-200 w-12 mb-2 block"></div>
                    <div class="h-2 bg-gray-200 w-20 mb-2 block"></div>
                    <div class="h-2 bg-gray-200 w-8 mb-2 block"></div>
                  </div>
                </div>
              </div>
              <div class="w-1/2 px-2">
                <div class="rounded-lg shadow px-2 py-2">
                  <div
                    class="block w-8 h-2 rounded-full bg-gray-200 mb-2"
                  ></div>
    
                  <div class="mb-2">
                    <svg
                      height="50"
                      width="50"
                      viewBox="0 0 20 20"
                      class="mx-auto"
                    >
                      <circle r="10" cx="10" cy="10" fill="#ddd" />
                      <circle
                        r="5"
                        cx="10"
                        cy="10"
                        fill="transparent"
                        stroke="#eee"
                        stroke-width="10"
                        stroke-dasharray="11 31.4"
                        transform="rotate(-90) translate(-20)"
                      />
                    </svg>
                  </div>
    
                  <div class="flex flex-wrap -mx-2">
                    <div class="w-1/3 px-2">
                      <div class="block h-2 rounded-full bg-gray-200"></div>
                    </div>
                    <div class="w-1/3 px-2">
                      <div class="block h-2 rounded-full bg-gray-200"></div>
                    </div>
                    <div class="w-1/3 px-2">
                      <div class="block h-2 rounded-full bg-gray-200"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="w-full flex flex-wrap mb-2">
              <div class="w-1/2">
                <div class="flex items-center">
                  <div class="h-4 w-4 rounded-full bg-gray-200 mr-4"></div>
                  <div>
                    <div class="h-2 w-10 bg-gray-200 mb-1 rounded-full"></div>
                    <div class="h-2 w-6 bg-gray-100 rounded-full"></div>
                  </div>
                </div>
              </div>
              <div class="w-1/2">
                <div class="flex items-center">
                  <div class="h-4 w-4 rounded-full bg-gray-200 mr-4"></div>
                  <div>
                    <div class="h-2 w-10 bg-gray-200 mb-1 rounded-full"></div>
                    <div class="h-2 w-6 bg-gray-100 rounded-full"></div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="w-full flex flex-wrap mb-6">
              <div class="w-1/2">
                <div class="flex items-center">
                  <div class="h-4 w-4 rounded-full bg-gray-200 mr-4"></div>
                  <div>
                    <div class="h-2 w-10 bg-gray-200 mb-1 rounded-full"></div>
                    <div class="h-2 w-6 bg-gray-100 rounded-full"></div>
                  </div>
                </div>
              </div>
              <div class="w-1/2">
                <div class="flex items-center">
                  <div class="h-4 w-4 rounded-full bg-gray-200 mr-4"></div>
                  <div>
                    <div class="h-2 w-10 bg-gray-200 mb-1 rounded-full"></div>
                    <div class="h-2 w-6 bg-gray-100 rounded-full"></div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="text-right flex justify-end">
              <div class="rounded-lg h-6 w-16 px-4 bg-gray-200 mr-2"></div>
              <div class="rounded-lg h-6 w-16 px-4 bg-green-400"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    </div>
    </div>
    <!-- component -->
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

<div>
    <button onclick="openModal()" class='bg-blue-500 text-white p-2 rounded text-2xl font-bold'>Open Modal</button>
</div>

<div class="main-modal fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
    style="background: rgba(0,0,0,.7);">
    <div
        class="border border-teal-500 shadow-lg modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
        <div class="modal-content py-4 text-left px-6">
            <!--Title-->
            <div class="flex justify-between items-center pb-3">
                <p class="text-2xl font-bold">Header</p>
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
                <p>Inliberali Persius Multi iustitia pronuntiaret expeteretur sanos didicisset laus angusti ferrentur arbitrium arbitramur huic desiderent.?</p>
            </div>
            <!--Footer-->
            <div class="flex justify-end pt-2">
                <button
                    class="focus:outline-none modal-close px-4 bg-gray-400 p-3 rounded-lg text-black hover:bg-gray-300">Cancel</button>
                <button
                    class="focus:outline-none px-4 bg-teal-500 p-3 ml-3 rounded-lg text-white hover:bg-teal-400">Confirm</button>
            </div>
        </div>
    </div>
</div>

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
        </main>
    </body>
</html>
