@extends('layouts.app1')

@section('title', __('outbreak details'))

@section('content')


{{-- trying smthin --}}

<section class="text-gray-600 body-font relative">
    <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
      <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
        <div id="mapid" width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no"></div>
        <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
          <div class="lg:w-1/2 px-6">
            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
            <p class="mt-1">{{ $outbreak->address }} "dont forget to write the Outbreak address" </p>
          </div>
          <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">Longitude</h2>
            <a class="text-indigo-500 leading-relaxed">{{ $outbreak->longitude }}</a>
            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">Latitude</h2>
            <p class="leading-relaxed">{{ $outbreak->latitude }}</p>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 md:w-1/2 bg-white  flex items-center md: justify-center flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0 shadow-2xl rounded-2xl">
        <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">The Outbreak Details</h2>
            <!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white shadow overflow-hidden sm:rounded-lg">
    
    <div class="border-t border-gray-200">
      <dl>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">Outbreak Name</dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $outbreak->name }}</dd>
        </div>
        
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">Country</dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $outbreak->country }}</dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">Active Cases</dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{$outbreak->cases}}</dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500"> Longitude </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $outbreak->longitude }}</dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500"> Latitude </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $outbreak->latitude }}</dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">Percoutions </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $outbreak->address }}</dd>
        </div>
        <!-- component -->
        <div class="flex justify-center">
            @if (auth()->check())
            <a href="{{ route('outbreaks.index') }}">
                <button class="mt-4 rounded-lg h-6 w-16 px-4 bg-red-400 text-white">
                   Back
                </button>
            </a>
            
            @else
            
            <a href="{{ route('outbreakmap.index') }}">
                <button class="mt-4 rounded-lg h-6 w-16 px-4 bg-red-400 text-white">
            Back
                </button>
            </a>
            @endif
            <a href="{{ route('outbreaks.edit', $outbreak) }}" id="edit-outbreak-{{ $outbreak->id }}" >
                <button class="mt-4 ml-3 rounded-lg h-6 w-16 px-4 bg-yellow-400 text-white">
                Edit
            </button>
            </a>
        </div>
    </dl>
</div>
  </div>
  
      </div>
    </div>
  </section>
@endsection

@section('styles')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
    integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
    crossorigin=""/>

<style>
    #mapid { height: 600px; }
</style>
@endsection
@push('scripts')
<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
    integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
    crossorigin=""></script>

<script>
    var map = L.map('mapid').setView([{{ $outbreak->latitude }}, {{ $outbreak->longitude }}], {{ config('leaflet.detail_zoom_level') }});
    var greenIcon = new L.Icon({
  iconUrl: 'https://raw.githubusercontent.com/3neef/media/main/pin.png',
//   shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
  iconSize: [40, 41],
  iconAnchor: [12, 41],
  popupAnchor: [1, -34],
  shadowSize: [41, 41]
});

    L.tileLayer('https://tiles.stadiamaps.com/tiles/alidade_smooth_dark/{z}/{x}/{y}{r}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">MazinStreetMap</a> contributors'
    }).addTo(map);

    L.marker([{{ $outbreak->latitude }}, {{ $outbreak->longitude }}], {icon: greenIcon}).addTo(map)
        .bindPopup('{!! $outbreak->map_popup_content !!}');
</script>
@endpush
