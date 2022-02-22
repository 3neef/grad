<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{$user->personal->fname}}'s Mdicals</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ asset('js/init-alpine.js') }}"></script>
</head>
<body>
  <main class="h-full overflow-y-auto">
    <div class="container px-6 mx-auto grid">

      <!-- component -->
      <style>
      :root {
        --main-color: #4a76a8;
      }

      .bg-main-color {
        background-color: var(--main-color);
      }
      
      .text-main-color {
      color: var(--main-color);
    }

    .border-main-color {
      border-color: var(--main-color);
  }
  </style>




<div class="bg-gray-100">
  <div class="w-full text-white bg-main-color">
      <div x-data="{ open: false }"
          class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
          <div class="p-4 flex flex-row items-center justify-between">
              <a href="#"
                  class="text-lg font-semibold tracking-widest uppercase rounded-lg focus:outline-none focus:shadow-outline">{{$user->personal->fname}}'s Profile</a>
              <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                  <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                      <path x-show="!open" fill-rule="evenodd"
                      d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                      clip-rule="evenodd"></path>
                      <path x-show="open" fill-rule="evenodd"
                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                  </svg>
                </button>
          </div>
          <nav :class="{'flex': open, 'hidden': !open}"
              class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
              <div @click.away="open = false" class="relative" x-data="{ open: false }">
                  <button @click="open = !open"
                      class="flex flex-row items-center space-x-2 w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent hover:bg-blue-800 md:w-auto md:inline md:mt-0 md:ml-4 hover:bg-gray-200 focus:bg-blue-800 focus:outline-none focus:shadow-outline">
                      @if (Auth::user())
                      <span>{{$user->personal->fname}}</span>
                          
                      @else
                      <span>Guest</span>
                      @endif
                      <img class="inline h-6 rounded-full"
                          src="https://avatars2.githubusercontent.com/u/24622175?s=60&amp;v=4">
                      <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                          class="inline w-4 h-4 transition-transform duration-200 transform">
                          <path fill-rule="evenodd"
                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                      </svg>
                  </button>
                  <div x-show="open" x-transition:enter="transition ease-out duration-100"
                  x-transition:enter-start="transform opacity-0 scale-95"
                      x-transition:enter-end="transform opacity-100 scale-100"
                      x-transition:leave="transition ease-in duration-75"
                      x-transition:leave-start="transform opacity-100 scale-100"
                      x-transition:leave-end="transform opacity-0 scale-95"
                      class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                      <div class="py-2 bg-white text-blue-800 text-sm rounded-sm border border-main-color shadow-sm">
                          <a class="block px-4 py-2 mt-2 text-sm bg-white md:mt-0 focus:text-gray-900 hover:bg-indigo-100 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                              href="{{route('login')}}">Log In</a>
                              <a class="block px-4 py-2 mt-2 text-sm bg-white md:mt-0 focus:text-gray-900 hover:bg-indigo-100 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                              href="{{route('dashboard')}}">Dashboard</a>
                          
                      </div>
                  </div>
              </div>
          </nav>
      </div>
  </div>
  <!-- End of Navbar -->

  <div class="container mx-auto my-5 p-5">
      <div class="md:flex no-wrap md:-mx-2 ">
          <!-- Left Side -->
          <div class="w-full md:w-3/12 md:mx-2">
              <!-- Profile Card -->
              <div class="bg-white p-3 border-t-4 border-green-400">
                  <div class="image overflow-hidden">
                      <img class="h-auto w-full mx-auto"
                          src="/images/profile.jpg"
                          alt="">
                  </div>
                  <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">{{$user->personal->fname}} {{$user->personal->mname}}</h1>
                  <h3 class="text-gray-600 font-lg text-semibold leading-6">Owner at Her Company Inc.</h3>
                  <div class="grid grid-cols-2">
                    <div class="px-4 py-2 font-semibold">Blood Type</div>
                    <div class="px-4 py-2">{{$user->med->blood}}</div>
                </div>
                  <div class="grid grid-cols-2">
                    <div class="px-4 py-2 font-semibold">Alargies</div>
                    <div class="px-4 py-2">{{$user->med->alarg}}</div>
                </div>
                  <div class="grid grid-cols-2">
                    <div class="px-4 py-2 font-semibold">Inshurance Company</div>
                    <div class="px-4 py-2">{{$user->med->insure}}</div>
                </div>
                  
                  
              </div>
              <!-- End of profile card -->
              <div class="my-4"></div>
              <!-- Friends card -->
              
              <!-- End of friends card -->
            </div>
            <!-- Right Side -->
            <div class="w-full md:w-9/12 mx-2 h-64">
              <!-- Profile tab -->
              <!-- About Section -->
              <div class="bg-white p-3 shadow-sm rounded-sm">
                  <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                      <span clas="text-green-500">
                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                      </svg>
                    </span>
                      <span class="tracking-wide">About</span>
                  </div>
                  <div class="text-gray-700">
                      <div class="grid md:grid-cols-2 text-sm">
                          <div class="grid grid-cols-2">
                              <div class="px-4 py-2 font-semibold">First Name</div>
                              <div class="px-4 py-2">{{$user->personal->fname}}</div>
                          </div>
                          <div class="grid grid-cols-2">
                              <div class="px-4 py-2 font-semibold">Last Name</div>
                              <div class="px-4 py-2">{{$user->personal->lname}}</div>
                          </div>
                          <div class="grid grid-cols-2">
                              <div class="px-4 py-2 font-semibold">Gender</div>
                              <div class="px-4 py-2">{{$user->personal->gender}}</div>
                          </div>
                          <div class="grid grid-cols-2">
                              <div class="px-4 py-2 font-semibold">Emergancy Contact</div>
                              <div class="px-4 py-2">{{$user->personal->phone}}</div>
                          </div>
                          <div class="grid grid-cols-2">
                              <div class="px-4 py-2 font-semibold">Current Address</div>
                              <div class="px-4 py-2">{{$user->personal->adress}}</div>
                          </div>
                          <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">Permanant Address</div>
                              <div class="px-4 py-2">{{$user->personal->state}} / {{$user->personal->city}}/ {{$user->personal->country}}</div>
                          </div>
                          <div class="grid grid-cols-2">
                              <div class="px-4 py-2 font-semibold">Email.</div>
                              <div class="px-4 py-2">
                                  <a class="text-blue-800" href="mailto:{{$user->email}}">{{$user->email}}</a>
                              </div>
                          </div>
                          <div class="grid grid-cols-2">
                              <div class="px-4 py-2 font-semibold">Age</div>
                              <div class="px-4 py-2">{{$user->personal->age}}</div>
                          </div>
                          <div class="grid grid-cols-2">
                              <div class="px-4 py-2 font-semibold">Passport</div>
                              <div class="px-4 py-2">{{$user->personal->passport}}</div>
                          </div>
                        </div>
                  </div>
                  
                </div>
                <!-- End of about section -->

              <div class="my-4"></div>
              
              <!-- Experience and education -->
              <div class="bg-white p-3 shadow-sm rounded-sm">
                
                <div class="flex justify-center items-start my-2">
                  <div class="w-full sm:w-10/12 md:w-f my-1">
                    <h2 class="text-xl font-semibold text-vnet-blue mb-2">Last Doctor Visits</h2>
                    <ul class="flex flex-col">
                      @foreach ($user->visits as $visit)
                          
                      
                      <li class="bg-white my-2 shadow-lg" x-data="accordion({{$visit->id}})">
                        <h2
                        @click="handleClick()"
                          class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                          >
                          <span>{{$visit->doctor_name}}  &#9866;  {{$visit->updated_at->format('d/m/Y' )}}</span>
                          <svg
                            :class="handleRotate()"
                            class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                            viewBox="0 0 20 20"
                          >
                            <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                          </svg>
                        </h2>
                        <div
                          x-ref="tab"
                          :style="handleToggle()"
                          class="border-l-2 border-yellow-600 overflow-hidden max-h-0 duration-500 transition-all"
                        >
                          <p class="p-3 text-gray-900">
                            {{$visit->diagnosis}}
                          </p>
                        </div>
                      </li>
                      @endforeach
                      
                    </ul>
                  </div>
                </div>
                  <!-- End of Experience and education grid -->
                </div>
                <!-- End of profile tab -->
              </div>
      </div>
  </div>
</div>
</div>
</main>
</body>
<script>
  document.addEventListener('alpine:init', () => {
    Alpine.store('accordion', {
      tab: 0
    });
    
    Alpine.data('accordion', (idx) => ({
      init() {
        this.idx = idx;
      },
      idx: -1,
      handleClick() {
        this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
      },
      handleRotate() {
        return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
      },
      handleToggle() {
        return this.$store.accordion.tab === this.idx ? `max-height: ${this.$refs.tab.scrollHeight}px` : '';
      }
    }));
  })
</script>
</html>