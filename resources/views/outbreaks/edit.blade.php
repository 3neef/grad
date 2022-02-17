@extends('layouts.app1')

@section('title', __('outbreak.edit'))

@section('content')
<div class="row justify-content-center">
    <div class="">
        @if (request('action') == 'delete' && $outbreak)
        @can('delete', $outbreak)
            
            <div class=" bg-white max-w-2xl shadow overflow-hidden sm:rounded-lg">
                <div class="border-t border-gray-200">
                  <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                      <dt class="text-sm font-medium text-gray-500">Outbreak Name</dt>
                      <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $outbreak->name }}</dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                      <dt class="text-sm font-medium text-gray-500"> Longitude </dt>
                      <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $outbreak->longitude }}</dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                      <dt class="text-sm font-medium text-gray-500"> Latitude </dt>
                      <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $outbreak->latitude }}</dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                      <dt class="text-sm font-medium text-gray-500">Active Cases</dt>
                      <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">120,000</dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                      <dt class="text-sm font-medium text-gray-500">Percoutions </dt>
                      <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $outbreak->address }}</dd>
                    </div>
                    {!! $errors->first('outbreak_id', '<span class="invalid-feedback" role="alert">:message</span>') !!}
                    <!-- component -->
                    <div class="flex justify-center">
                        
                        <form method="POST" action="{{ route('outbreaks.destroy', $outbreak) }}" accept-charset="UTF-8" onsubmit="return confirm(&quot;{{ __('Do you relly want to delete this outbreak') }}&quot;)" class="del-form float-right" style="display: inline;">
                            {{ csrf_field() }} {{ method_field('delete') }}
                            <input name="outbreak_id" type="hidden" value="{{ $outbreak->id }}">
                            <button type="submit" class="border border-red-500 text-red-500 block rounded-sm font-bold py-4 px-6 mr-2 flex items-center hover:bg-orange-500 hover:text-white">                  
                               Delete
                            </button>
                        </form>

                        <a href="{{ route('outbreaks.edit', $outbreak) }}" id="edit-outbreak-{{ $outbreak->id }}" >
                        <button class="border border-teal-500 bg-teal-500 text-white block rounded-sm font-bold py-4 px-6 ml-2 flex items-center">
                            Cancel
                          
                        </button>
                        </a>
                    </div>
                </dl>
            </div>
              </div>
              
        @endcan
        @else
        
        <section class="text-gray-600 body-font relative">
            <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
              <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
                <div id="mapid" width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no"></div>
                <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
                  <div class="lg:w-1/2 px-6">
                    <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
                    <p class="mt-1">{{ old('address') }} "dont forget to write the Outbreak address" </p>
                  </div>
                  <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                    <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">Longitude</h2>
                    <a class="text-indigo-500 leading-relaxed">{{ old('longitude', request('longitude')) }}</a>
                    <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">Latitude</h2>
                    <p class="leading-relaxed">{{ old('latitude', request('latitude')) }}</p>
                  </div>
                </div>
              </div>
              <div class="lg:w-1/3 md:w-1/2 bg-white  flex items-center justify-center flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0 shadow-2xl rounded-2xl">
                <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Add The Outbreak Details</h2>
                <form method="POST" action="{{ route('outbreaks.update', $outbreak) }}" accept-charset="UTF-8">
                    {{ csrf_field() }} {{ method_field('patch') }}
                <div class=" form-group mb-4">
                  <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                  <input type="text" id="name" type="text" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"  value="{{ old('name', $outbreak->name) }}" required >
                  {!! $errors->first('name', '<span class="invalid-feedback" role="alert">:message</span>') !!}
                </div>
                <div class=" form-group mb-4">
                  <label for="message" class="leading-7 text-sm text-gray-600">Address</label>
                  <textarea id="address" class=" w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" rows="4" >{{ old('address', $outbreak->address) }}</textarea>
                  {!! $errors->first('address', '<span class="invalid-feedback" role="alert">:message</span>') !!}
                </div>
                <div class=" form-group mb-4">
                  <label for="email" class="leading-7 text-sm text-gray-600">Longitude</label>
                  <input id="latitude" type="text" class=" w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out form-control{{ $errors->has('longitude') ? ' is-invalid' : '' }}" name="longitude" value="{{ old('longitude', $outbreak->longitude) }}" required>
                  {!! $errors->first('longitude', '<span class="invalid-feedback" role="alert">:message</span>') !!}
                </div>
                <div class=" form-group mb-4">
                  <label for="email" class="leading-7 text-sm text-gray-600">Latitude</label>
                  <input id="latitude" type="text" class=" w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out form-control{{ $errors->has('latitude') ? ' is-invalid' : '' }}" name="latitude"  value="{{ old('latitude', $outbreak->latitude) }}" required >
                  {!! $errors->first('latitude', '<span class="invalid-feedback" role="alert">:message</span>') !!}
                </div>
                <button type="submit" class=" w-full text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Add an Outbreak</button>
                <div class=" grid grid-cols-4 gap-3 ">

                    @can('delete', $outbreak)
                    <div class="col-span-4 sm:col-span-2 mt-4 mb-2 text-center font-mono rounded-full text-white bg-red-500 hover:text-orange-400">
                      <a href="{{ route('outbreaks.edit', [$outbreak, 'action' => 'delete']) }}" id="del-outbreak-{{ $outbreak->id }}" >{{ __('Delete') }}</a>
                    </div>
                @endcan
                <div class="col-span-4 sm:col-span-2 mt-4 mb-2 text-center font-mono rounded-full text-white bg-blue-500 hover:bg-teal-400">
                    <a href="{{ route('outbreaks.show', $outbreak )}}" class="btn btn-link">{{ __('cancel ?') }}</a>
                </div>    
            </div>
            </form>
              </div>
            </div>
          </section>
    </div>
</div>
@endif

{{-- trying --}}

  
  {{-- try the modal --}}

  @endsection

@section('styles')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
    integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
    crossorigin=""/>

<style>
    #mapid { height: 800px; }
</style>
@endsection

@push('scripts')
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
    integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
    crossorigin=""></script>
<script>
    var mapCenter = [{{ $outbreak->latitude }}, {{ $outbreak->longitude }}];
    var map = L.map('mapid').setView(mapCenter, {{ config('leaflet.detail_zoom_level') }});
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

    var marker = L.marker(mapCenter, {icon: greenIcon}).addTo(map);
    function updateMarker(lat, lng) {
        marker
        .setLatLng([lat, lng])
        .bindPopup("Your location :  " + marker.getLatLng().toString())
        .openPopup();
        return false;
    };

    map.on('click', function(e) {
        let latitude = e.latlng.lat.toString().substring(0, 15);
        let longitude = e.latlng.lng.toString().substring(0, 15);
        $('#latitude').val(latitude);
        $('#longitude').val(longitude);
        updateMarker(latitude, longitude);
    });

    var updateMarkerByInputs = function() {
        return updateMarker( $('#latitude').val() , $('#longitude').val());
    }
    $('#latitude').on('input', updateMarkerByInputs);
    $('#longitude').on('input', updateMarkerByInputs);
</script>
@endpush
