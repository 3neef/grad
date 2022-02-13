<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            {{-- <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg"> --}}
                <div class="p-6">
                    {{-- mkmm --}}
                    {{-- <div class="min-w-screen min-h-screen bg-gray-200 flex items-center justify-center px-5 py-5"> --}}
                        <div class="w-full max-w-3xl">
                            <div class="-mx-2 md:flex">
                                <div class="w-full md:w-1/3 px-2">
                                    <div class="rounded-lg shadow-sm mb-4">
                                        <div class="rounded-lg bg-white shadow-lg md:shadow-xl relative overflow-hidden">
                                            <div class="px-3 pt-8 pb-10 text-center relative z-10">
                                                <h4 class="text-sm uppercase text-gray-500 leading-tight">Users</h4>
                                                <h3 class="text-3xl text-gray-700 font-semibold leading-tight my-3">{{ \App\Models\User::all()->count() }}</h3>
                                                <p class="text-xs text-green-500 leading-tight">▲ 57.1%</p>
                                            </div>
                                            <div class="absolute bottom-0 inset-x-0">
                                                <canvas id="chart1" height="70"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full md:w-1/3 px-2">
                                    <div class="rounded-lg shadow-sm mb-4">
                                        <div class="rounded-lg bg-white shadow-lg md:shadow-xl relative overflow-hidden">
                                            <div class="px-3 pt-8 pb-10 text-center relative z-10">
                                                <h4 class="text-sm uppercase text-gray-500 leading-tight">Subscribers</h4>
                                                <h3 class="text-3xl text-gray-700 font-semibold leading-tight my-3">11,427</h3>
                                                <p class="text-xs text-red-500 leading-tight">▼ 42.8%</p>
                                            </div>
                                            <div class="absolute bottom-0 inset-x-0">
                                                <canvas id="chart2" height="70"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full md:w-1/3 px-2">
                                    <div class="rounded-lg shadow-sm mb-4">
                                        <div class="rounded-lg bg-white shadow-lg md:shadow-xl relative overflow-hidden">
                                            <div class="px-3 pt-8 pb-10 text-center relative z-10">
                                                <h4 class="text-sm uppercase text-gray-500 leading-tight">Comments</h4>
                                                <h3 class="text-3xl text-gray-700 font-semibold leading-tight my-3">8,028</h3>
                                                <p class="text-xs text-green-500 leading-tight">▲ 8.2%</p>
                                            </div>
                                            <div class="absolute bottom-0 inset-x-0">
                                                <canvas id="chart3" height="70"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {{-- </div> --}}
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

                </div>
            {{-- </div> --}}
        </div>
    </div>
</x-app-layout>
