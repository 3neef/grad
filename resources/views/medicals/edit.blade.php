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
        <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
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
      

      <!--
        Dropdown menu, show/hide based on menu state.

        Entering: "transition ease-out duration-200"
          From: "transform opacity-0 scale-95"
          To: "transform opacity-100 scale-100"
        Leaving: "transition ease-in duration-75"
          From: "transform opacity-100 scale-100"
          To: "transform opacity-0 scale-95"
      -->
      
    </span>
  </div>
</div>



    {{-- forojhhklfg;sjf --}}
    <div class="mt-4">
      <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
          <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
              <h3 class="text-lg font-medium leading-6 text-gray-900">Editing Your Personal Information</h3>
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
                <form action="{{route('personals.update', $user->personal->id)}}" method="POST">
                  @csrf @method('PATCH')
                  <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                      <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-2">
                          {{--hidden input--}}
                          
                          <label for="first-name" class="block text-sm font-medium text-gray-700">First name</label>
                          <input type="text" name="fname" id="fname" value="{{$user->personal->fname}}" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
          
                        <div class="col-span-6 sm:col-span-2">
                          <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
                          <input type="text" name="lname" id="lname" value="{{$user->personal->lname}}" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                          <label for="middle-name" class="block text-sm font-medium text-gray-700">Middle name</label>
                          <input type="text" name="mname" id="mname" value="{{$user->personal->mname}}" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                   
                        
                          <div class="col-span-6 sm:col-span-3">
                            <label for="Phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                            <input type="text" name="phone" id="phone"value="{{$user->personal->phone}}" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
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
                            <input type="text" name="passport" id="passport" value="{{$user->personal->passport}}" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                          </div>
                         
                          <div class="col-span-6 sm:col-span-2">
                            <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
                            <input type="number" name="age" id="age" value="{{$user->personal->age}}" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required >
                          </div>
                         

            
            
            
          
                        <div class="col-span-6 sm:col-span-3">
                          <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                          <select id="country" name="country" value="{{$user->personal->country}}" autocomplete="country-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option>United States</option>
                            <option>Canada</option>
                            <option>Mexico</option>
                          </select>
                        </div>
          
                        <div class="col-span-6">
                          <label for="address" class="block text-sm font-medium text-gray-700">Your address</label>
                          <input type="text" name="adress" id="adress" value="{{$user->personal->adress}}" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
          
                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                          <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                          <input type="text" name="city" id="city" value="{{$user->personal->city}}" autocomplete="address-level2" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
          
                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                          <label for="state" class="block text-sm font-medium text-gray-700">State / Province</label>
                          <input type="text" name="state" id="state" value="{{$user->personal->state}}" autocomplete="address-level1" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
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
          <form action="{{route('meds.update', $user->med->id)}}" method="POST">
            @csrf @method('PATCH')
            <div class="shadow sm:rounded-md sm:overflow-hidden">
              <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                          <label for="blood" class="block text-sm font-medium text-gray-700">Blood type</label>
                          <select id="blood" name="blood" value="{{$user->med->blood}}" autocomplete="blood-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option>A+ve</option>
                            <option>O-ve</option>
                            <option>AB</option>
                          </select>
                        </div>
                        

                        <div class="col-span-6">
                          <label for="alarg" class="block text-sm font-medium text-gray-700">Alargies</label>
                          <input type="text" name="alarg" id="alarg" value="{{$user->med->alarg}}" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
          
                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                          <label for="chron" class="block text-sm font-medium text-gray-700">Chronics</label>
                          <input type="text" name="chronic" id="chronic" value="{{$user->med->chronic}}" autocomplete="address-level2" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
          
                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                          <label for="insure" class="block text-sm font-medium text-gray-700">Insureance Company</label>
                          <input type="text" name="insure" id="insure" value="{{$user->med->insure}}" autocomplete="address-level1" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                </div>
                  
                             
    
                
    
             
              </div>
              <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-900 hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
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
      
      

</x-app-layout>