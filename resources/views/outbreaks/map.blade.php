@extends('layouts.app1')

@section('content')
{{-- <div class="flex flex-col h-screen max-h-screen ">
    <!-- Search / Results -->
    <h1 class=" title-font text-center font-bold text-gray-700 text-xl sm:text-2xl md:text-5xl leading-tight mb-6">The Outbreaks Map
        <br class="hidden sm:block">
      </h1>
    {{-- playin  --}}

  {{-- <div class='flex items-center justify-center  md:flex-row  min-h-screen from-gray-100 via-gray-300 to-gray-900 bg-gradient-to-br'>
    <div class='w-full  max-w-4xl  mx-auto  shadow-xl flex flex-col rounded-md border-2 border-gray-200'>
 

    <div id="mapid" class=" rounded-md"></div>

 </div>

  </div>

    <!-- Map -->
    
</div> --}} 



{{-- trying new stuff --}}

<div class="font-sans bg-white flex flex-col min-h-screen w-full">
    <div>
    <div class="bg-gray-200 px-4 py-4">
      <div
        class="w-full md:max-w-6xl md:mx-auto md:flex md:items-center md:justify-between"
      >
        <div>
          <a href="#" class="inline-block py-2 text-blue-800 text-2xl font-bold"
            >EHP</a
          >
        </div>
        
        <div>
          <div class="hidden md:block">
            <a
              href="{{ route('outbreaks.index') }}"
              class="inline-block py-1 md:py-4 text-gray-600 mr-6 font-bold"
              >Outbreaks Map</a
            >
            <a
              href="#"
              class="inline-block py-1 md:py-4 text-gray-500 hover:text-gray-600 mr-6"
              >Outbreaks List</a
            >
              
            <a
              href="#"
              class="inline-block py-1 md:py-4 text-gray-500 hover:text-gray-600 mr-6"
              >About</a
            >
            <a
              href="#"
              class="inline-block py-1 md:py-4 text-gray-500 hover:text-gray-600 mr-6"
              >Dashboard</a
            >
          </div>
        </div>
    
        <div class="hidden md:block">
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="inline-block py-1 md:py-4 text-gray-500 hover:text-gray-600 mr-6">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="inline-block py-1 md:py-4 text-gray-500 hover:text-gray-600 mr-6">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 inline-block py-1 md:py-4 text-gray-500 hover:text-gray-600 mr-6">Register</a>
                    @endif
                @endauth
            </div>
        @endif

     
        </div>
      </div>
    </div>
    
    <div class="bg-gray-200 md:overflow-hidden">
      <div class="px-4 py-16">
        <div class="relative w-full md:max-w-2xl md:mx-auto text-center">
          <h1
            class="font-bold text-gray-700 text-xl sm:text-2xl md:text-5xl leading-tight mb-6"
          >
          The Outbreak Map
          </h1>
          <h1
            class="font-bold text-gray-700 text-xl sm:text-2xl md:text-5xl leading-tight mb-6"
          >
          {{$agent->device();}}
          </h1>
    
    
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
    
    @if ($agent->isDesktop())
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
    
      
      <div id="mapid" class="flex rounded-md border-2 border-yellow-500 shadow-2xl" style="height: 550px;">
     
        
      </div>
    </div>
    
    @else
    <div class="px-4">
      <div
        class="-mt-10 max-w-4xl mx-auto bg-white shadow-lg relative z-20"
        style="border-radius: 20px;"
      >
        
            <div id="mapid" class="flex" style="height: 340px;">
                
            </div>
      </div>
    </div>
    
    @endif
    
    
    
    </div>
    </div>

@endsection

@section('styles')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
    integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
    crossorigin=""/>

    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css">
    {{-- <link rel="stylesheet" href="/public/dist/MarkerCluster.css">
    <link rel="stylesheet" href="/public/dist/MarkerCluster.Default.css"> --}}
<style>
    #mapid { min-height: 500px; }
    /* #mapid {min-width: 800px; } */
</style>
@endsection
@push('scripts')
<script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
    integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
    crossorigin=""></script>

<script>
    
    var map = L.map('mapid').setView([{{ config('leaflet.map_center_latitude') }},
     {{ config('leaflet.map_center_longitude') }}],
      {{ config('leaflet.zoom_level') }}, {{ config('leaflet.minZoom') }} );
   var greenIcon = new L.Icon({
  iconUrl: 'images/pin.png',
//   shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
  iconSize: [40, 41],
  iconAnchor: [12, 41],
  popupAnchor: [1, -34],
  shadowSize: [41, 41]
});
    var baseUrl = "{{ url('/') }}";

    L.tileLayer('https://tiles.stadiamaps.com/tiles/alidade_smooth_dark/{z}/{x}/{y}{r}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">MazinStreetMap</a> contributors'
    }).addTo(map);

    
    axios.get('{{ route('api.outbreaks.index') }}')
    .then(function (response) {
      console.log(response.data);
      // const markers = L.markerClusterGroup();
      L.geoJSON(response.data, {
            pointToLayer: function(geoJsonPoint, latlng) {
                return L.marker(latlng, {icon: greenIcon}); 
            }
          })
          .bindPopup(function (layer) {
            return layer.feature.properties.map_popup_content;
          }).addTo(map);
          
        })
        .catch(function (error) {
          console.log(error);
        });
        // map.addLayer(markers);
        
        
        
        
    @can('create', new App\Models\Outbreak)
    var theMarker;

    map.on('click', function(e) {
        let latitude = e.latlng.lat.toString().substring(0, 15);
        let longitude = e.latlng.lng.toString().substring(0, 15);

        if (theMarker != undefined) {
          map.removeLayer(theMarker);
        };
        
        var popupContent = "Your location : " + latitude + ", " + longitude + ".";
        popupContent += '<br><a href="{{ route('outbreaks.create') }}?latitude=' + latitude + '&longitude=' + longitude + '">Add new outbreak here</a>';
        
        
        theMarker = L.marker([latitude, longitude], {icon: greenIcon}).addTo(map);
        theMarker.bindPopup(popupContent)
        .openPopup();
      });
      @endcan
    </script>
@endpush
