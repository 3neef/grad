<x-app-layout>
    <x-slot name="header">
        {{ __('Dashboard') }}
    </x-slot>

    <div class="p-4 bg-white rounded-lg shadow-xs">
        @if (Auth::user()->hasRole('doctor'))
            {{-- <x-doctor-dashboard /> --}}
        @elseif (Auth::user()->hasRole('admin'))
        {{ __('Hello Admin') }}
        @endif
    </div>
</x-app-layout>
