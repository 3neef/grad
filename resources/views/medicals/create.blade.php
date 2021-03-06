<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{-- {{ __('Your Medical Report') }} --}}
        </h2>
    </x-slot>

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="lg:flex lg:items-center lg:justify-between">
  <div class="flex-1 min-w-0">
    <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
      {{Auth::user()->name}}
    </h2>

  </div>
  
  <div class="mt-5 flex lg:mt-0 lg:ml-4">
      {{-- <a href="{{route('round.create')}}"> --}}
      <span class="sm:ml-3">
        <button type="button" onclick="document.getElementById('myModal').showModal()" id="btn" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          <!-- Heroicon name: solid/check -->
          <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
          </svg>
          Add new Appointment
        </button>
      </span>
    </a>

    <!-- Dropdown -->
    <span class="ml-3 relative sm:hidden">
      <button type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="mobile-menu-button" aria-expanded="false" aria-haspopup="true">
        More
        <!-- Heroicon name: solid/chevron-down -->
        <svg class="-mr-1 ml-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
      </button>

      <!--
        Dropdown menu, show/hide based on menu state.

        Entering: "transition ease-out duration-200"
          From: "transform opacity-0 scale-95"
          To: "transform opacity-100 scale-100"
        Leaving: "transition ease-in duration-75"
          From: "transform opacity-100 scale-100"
          To: "transform opacity-0 scale-95"
      -->
      <div class="origin-top-right absolute right-0 mt-2 -mr-1 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="mobile-menu-button" tabindex="-1">
        <!-- Active: "bg-gray-100", Not Active: "" -->
        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="mobile-menu-item-0">Edit</a>
        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="mobile-menu-item-1">View</a>
      </div>
    </span>
  </div>
</div>



    {{-- forojhhklfg;sjf --}}
    <div class="mt-4">
      <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
          <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
              <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
              <p class="mt-1 text-sm text-gray-600">
                Use a permanent address where you can receive mail.
                <x-auth-validation-errors :errors="$errors"/>
                {{-- @if (Auth::user()->id == $personal->user_id)
                    <h1>what are you doing</h1>
                @endif --}}
                  </p>
                </div>
              </div>
              <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="{{route('personals.store')}}" method="POST">
                  @csrf
                  <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                      <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-2">
                          {{--hidden input--}}
                          <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                          <label for="first-name" class="block text-sm font-medium text-gray-700">First name</label>
                          <input type="text" name="fname" id="fname" placeholder="{{--(Auth::user()->personal()->fname)--}}" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
          
                        <div class="col-span-6 sm:col-span-2">
                          <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
                          <input type="text" name="lname" id="lname" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                          <label for="middle-name" class="block text-sm font-medium text-gray-700">Middle name</label>
                          <input type="text" name="mname" id="mname" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        {{-- <div class="col-span-6 sm col-span-3">
                            <label class="block text-sm font-medium text-gray-700">
                              Photo
                            </label>
                            <div class="mt-1 flex items-center">
                              <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                  <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                              </span>
                              <button type="button" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Change
                              </button>
                            </div>
                          </div> --}}
                        
                          <div class="col-span-6 sm:col-span-3">
                            <label for="Phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                            <input type="text" name="phone" id="phone" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                          </div>
            
                          <div class="col-span-6 sm:col-span-3">
                            <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                            <select id="gender" name="gender" autocomplete="gender" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                              <option>Male</option>
                              <option>Female</option>
                            </select>
                           </div>
  
                          <div class="col-span-6 sm:col-span-4">
                            <label for="passport" class="block text-sm font-medium text-gray-700">Passport Number</label>
                            <input type="text" name="passport" id="passport" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                          </div>
                         
                          <div class="col-span-6 sm:col-span-2">
                            <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
                            <input type="number" name="age" id="age" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required >
                          </div>
                         

            
              {{-- <div class="col-span-6 sm:col-span-3">
                <label for="slug" class="block text-sm font-medium text-gray-700">
                  Slug
                </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                  <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                    http://ehp.com/
                  </span>
                  <input type="text" name="slug" id="slug" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="mazin-hafiz">
                </div>
              </div> --}}
            
          
                        <div class="col-span-6 sm:col-span-3">
                          <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                          <select id="country" name="country" autocomplete="country-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option>United States</option>
                            <option>Canada</option>
                            <option>Mexico</option>
                          </select>
                        </div>
          
                        <div class="col-span-6">
                          <label for="address" class="block text-sm font-medium text-gray-700">Your address</label>
                          <input type="text" name="adress" id="adress" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
          
                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                          <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                          <input type="text" name="city" id="city" autocomplete="address-level2" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
          
                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                          <label for="state" class="block text-sm font-medium text-gray-700">State / Province</label>
                          <input type="text" name="state" id="state" autocomplete="address-level1" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                      </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                      <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-800 hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Save
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        
      </div>
      
      <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
          <div class="border-t border-gray-200"></div>
        </div>
      </div>
      
      <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
          <div class="px-4 sm:px-0">
            <h3 class="text-lg font-medium leading-6 text-gray-900">Genral health Information</h3>
            <p class="mt-1 text-sm text-gray-600">
              This information will be displayed publicly so be careful what you share.
            </p>
          </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
          <form action="{{route('meds.store')}}" method="POST">
            @csrf
            <div class="shadow sm:rounded-md sm:overflow-hidden">
              <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                          <label for="blood" class="block text-sm font-medium text-gray-700">Blood type</label>
                          <select id="blood" name="blood" autocomplete="blood-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option>A+ve</option>
                            <option>O-ve</option>
                            <option>AB</option>
                          </select>
                        </div>
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                        <div class="col-span-6">
                          <label for="alarg" class="block text-sm font-medium text-gray-700">Alargies</label>
                          <input type="text" name="alarg" id="alarg" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
          
                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                          <label for="chron" class="block text-sm font-medium text-gray-700">Chronics</label>
                          <input type="text" name="chron" id="chron" autocomplete="address-level2" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
          
                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                          <label for="insure" class="block text-sm font-medium text-gray-700">Insureance Company</label>
                          <input type="text" name="insure" id="insure" autocomplete="address-level1" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                </div>
                  
                             
    
                
    
             
              </div>
              <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  Save
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
      
      <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
          <div class="border-t border-gray-200"></div>
        </div>
      </div>

        </div>
      </div>      
      {{-- try --}}
      
      <!-- component -->
<style>
  dialog[open] {
  animation: appear .15s cubic-bezier(0, 1.8, 1, 1.8);
}

  dialog::backdrop {
    background: linear-gradient(45deg, rgba(0, 0, 0, 0.5), rgba(54, 54, 54, 0.5));
    backdrop-filter: blur(3px);
  }
  
 
@keyframes appear {
  from {
    opacity: 0;
    transform: translateX(-3rem);
  }

  to {
    opacity: 1;
    transform: translateX(0);
  }
} 
</style>



<dialog id="myModal" class="h-auto w-11/12 md:w-1/2 p-5  bg-white rounded-md ">
        
   <div class="flex flex-col w-full h-auto ">
        <!-- Header -->
        <div class="flex w-full h-auto justify-center items-center">
          <div class="flex w-10/12 h-auto py-3 justify-center items-center text-center text-2xl font-bold text-gray-500 mb-10">
                New Doctor Visit
          </div>
          <div onclick="document.getElementById('myModal').close();" class="flex w-1/12 h-auto justify-center cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
          </div>
          <!--Header End-->
        </div>
          <!-- Modal Content-->
           <!-- component -->
<form action="{{route('visits.store')}}" method="POST">
  @csrf
    <div class=" bg-white rounded-md px-6 py-10 max-w-2xl mx-auto">
      <div class="grid grid-cols-6 gap-6">
        <div class="col-span-6 sm:col-span-3 form-group">
          {{--hidden input--}}
          <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
          <label for="doctor_name" class="block text-sm font-medium text-gray-700">Doctor Name</label>
          <input type="text" name="doctor_name" id="doctor_name" placeholder="{{--(Auth::user()->personal()->fname)--}}" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>

        <div class="col-span-6 sm:col-span-3 form-group">
          <label for="last-name" class="block text-sm font-medium text-gray-700">Hospital</label>
          <input type="text" name="hospital" id="hospital" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>

        <div class="col-span-6 sm:col-span-4 form-group">
          <label for="middle-name" class="block text-sm font-medium text-gray-700">Department</label>
          <input type="text" name="department" id="department" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
      </div>
      <div class=" form-group">
        <label for="symptoms" class="block text-sm font-medium text-gray-700"> Symptoms </label>
        <div class="mt-1">
          <textarea id="symptoms" name="symptoms" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="It goes here"></textarea>
        </div>
        <p class="mt-2 text-sm text-gray-500">.</p>
      </div>
      <div class=" form-group">
        <label for="lap_tests" class="block text-sm font-medium text-gray-700"> Lap Tests </label>
        <div class="mt-1">
          <textarea id="lap_tests" name="lap_tests" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="It goes here"></textarea>
        </div>
        <p class="mt-2 text-sm text-gray-500">.</p>
      </div>
      <div class=" form-group">
        <label for="diagnosis" class="block text-sm font-medium text-gray-700"> Diagnosis </label>
        <div class="mt-1">
          <textarea id="diagnosis" name="diagnosis" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="It goes here"></textarea>
        </div>
        <p class="mt-2 text-sm text-gray-500">.</p>
      </div>
      <div class=" form-group">
        <label for="medicine" class="block text-sm font-medium text-gray-700"> Medicine </label>
        <div class="mt-1">
          <textarea id="medicine" name="medicine" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="It goes here"></textarea>
        </div>
        <p class="mt-2 text-sm text-gray-500">.</p>
      </div>
      <div class=" form-group">
        <label for="prescription" class="block text-sm font-medium text-gray-700"> Prescription </label>
        <div class="mt-1">
          <textarea id="prescription" name="prescription" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="It goes here"></textarea>
        </div>
        <p class="mt-2 text-sm text-gray-500">.</p>
      </div>
        <button type="submit" class=" px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 bg-gray-600  ">ADD VISIT</button>
      </div>
    </div>
  
</form>
          <!-- End of Modal Content-->
          
          
          
        </div>
</dialog>

</x-app-layout>