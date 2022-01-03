@extends('layouts.app1')

@section('title', __('outbreak.detail'))

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">{{ __('outbreak.detail') }}</div>
            <div class="card-body">
                <table class="table table-sm">
                    <tbody>
                        <tr><td>{{ __('outbreak.name') }}</td><td>{{ $outbreak->name }}</td></tr>
                        <tr><td>{{ __('outbreak.address') }}</td><td>{{ $outbreak->address }}</td></tr>
                        <tr><td>{{ __('outbreak.latitude') }}</td><td>{{ $outbreak->latitude }}</td></tr>
                        <tr><td>{{ __('outbreak.longitude') }}</td><td>{{ $outbreak->longitude }}</td></tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                @can('update', $outbreak)
                    <a href="{{ route('outbreaks.edit', $outbreak) }}" id="edit-outbreak-{{ $outbreak->id }}" class="btn btn-warning">{{ __('outbreak.edit') }}</a>
                @endcan
                @if(auth()->check())
                    <a href="{{ route('outbreaks.index') }}" class="btn btn-link">{{ __('outbreak.back_to_index') }}</a>
                @else
                    <a href="{{ route('outbreakmap.index') }}" class="btn btn-link">{{ __('outbreak.back_to_index') }}</a>
                @endif
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">{{ trans('outbreak.location') }}</div>
            @if ($outbreak->coordinate)
            <div class="card-body" id="mapid"></div>
            @else
            <div class="card-body">{{ __('outbreak.no_coordinate') }}</div>
            @endif
        </div>
    </div>
</div>
@endsection

@section('styles')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
    integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
    crossorigin=""/>

<style>
    #mapid { height: 400px; }
</style>
@endsection
@push('scripts')
<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
    integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
    crossorigin=""></script>

<script>
    var map = L.map('mapid').setView([{{ $outbreak->latitude }}, {{ $outbreak->longitude }}], {{ config('leaflet.detail_zoom_level') }});

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([{{ $outbreak->latitude }}, {{ $outbreak->longitude }}]).addTo(map)
        .bindPopup('{!! $outbreak->map_popup_content !!}');
</script>
@endpush
