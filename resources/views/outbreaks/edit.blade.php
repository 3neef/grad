@extends('layouts.app1')

@section('title', __('outbreak.edit'))

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        @if (request('action') == 'delete' && $outbreak)
        @can('delete', $outbreak)
            <div class="card">
                <div class="card-header">{{ __('outbreak.delete') }}</div>
                <div class="card-body">
                    <label class="control-label text-primary">{{ __('outbreak.name') }}</label>
                    <p>{{ $outbreak->name }}</p>
                    <label class="control-label text-primary">{{ __('outbreak.address') }}</label>
                    <p>{{ $outbreak->address }}</p>
                    <label class="control-label text-primary">{{ __('outbreak.latitude') }}</label>
                    <p>{{ $outbreak->latitude }}</p>
                    <label class="control-label text-primary">{{ __('outbreak.longitude') }}</label>
                    <p>{{ $outbreak->longitude }}</p>
                    {!! $errors->first('outbreak_id', '<span class="invalid-feedback" role="alert">:message</span>') !!}
                </div>
                <hr style="margin:0">
                <div class="card-body text-danger">{{ __('outbreak.delete_confirm') }}</div>
                <div class="card-footer">
                    <form method="POST" action="{{ route('outbreaks.destroy', $outbreak) }}" accept-charset="UTF-8" onsubmit="return confirm(&quot;{{ __('app.delete_confirm') }}&quot;)" class="del-form float-right" style="display: inline;">
                        {{ csrf_field() }} {{ method_field('delete') }}
                        <input name="outbreak_id" type="hidden" value="{{ $outbreak->id }}">
                        <button type="submit" class="btn btn-danger">{{ __('app.delete_confirm_button') }}</button>
                    </form>
                    <a href="{{ route('outbreaks.edit', $outbreak) }}" class="btn btn-link">{{ __('app.cancel') }}</a>
                </div>
            </div>
        @endcan
        @else
        <div class="card">
            <div class="card-header">{{ __('outbreak.edit') }}</div>
            <form method="POST" action="{{ route('outbreaks.update', $outbreak) }}" accept-charset="UTF-8">
                {{ csrf_field() }} {{ method_field('patch') }}
                <div class="card-body">
                    <div class="form-group">
                        <label for="name" class="control-label">{{ __('outbreak.name') }}</label>
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name', $outbreak->name) }}" required>
                        {!! $errors->first('name', '<span class="invalid-feedback" role="alert">:message</span>') !!}
                    </div>
                    <div class="form-group">
                        <label for="address" class="control-label">{{ __('outbreak.address') }}</label>
                        <textarea id="address" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" rows="4">{{ old('address', $outbreak->address) }}</textarea>
                        {!! $errors->first('address', '<span class="invalid-feedback" role="alert">:message</span>') !!}
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="latitude" class="control-label">{{ __('outbreak.latitude') }}</label>
                                <input id="latitude" type="text" class="form-control{{ $errors->has('latitude') ? ' is-invalid' : '' }}" name="latitude" value="{{ old('latitude', $outbreak->latitude) }}" required>
                                {!! $errors->first('latitude', '<span class="invalid-feedback" role="alert">:message</span>') !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="longitude" class="control-label">{{ __('outbreak.longitude') }}</label>
                                <input id="longitude" type="text" class="form-control{{ $errors->has('longitude') ? ' is-invalid' : '' }}" name="longitude" value="{{ old('longitude', $outbreak->longitude) }}" required>
                                {!! $errors->first('longitude', '<span class="invalid-feedback" role="alert">:message</span>') !!}
                            </div>
                        </div>
                    </div>
                    <div id="mapid"></div>
                </div>
                <div class="card-footer">
                    <input type="submit" value="{{ __('outbreak.update') }}" class="btn btn-success">
                    <a href="{{ route('outbreaks.show', $outbreak) }}" class="btn btn-link">{{ __('app.cancel') }}</a>
                    @can('delete', $outbreak)
                        <a href="{{ route('outbreaks.edit', [$outbreak, 'action' => 'delete']) }}" id="del-outbreak-{{ $outbreak->id }}" class="btn btn-danger float-right">{{ __('app.delete') }}</a>
                    @endcan
                </div>
            </form>
        </div>
    </div>
</div>
@endif
@endsection

@section('styles')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
    integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
    crossorigin=""/>

<style>
    #mapid { height: 300px; }
</style>
@endsection

@push('scripts')
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
    integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
    crossorigin=""></script>
<script>
    var mapCenter = [{{ $outbreak->latitude }}, {{ $outbreak->longitude }}];
    var map = L.map('mapid').setView(mapCenter, {{ config('leaflet.detail_zoom_level') }});

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var marker = L.marker(mapCenter).addTo(map);
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
