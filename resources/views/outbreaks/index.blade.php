@extends('layouts.app1')

@section('title', __('outbreak.list'))

@section('content')
<div class="mb-3 ">
    <div class="float-right">
        @can('create', new App\Models\Outbreak)
            <a href="{{ route('outbreaks.create') }}">
                <button type="button" class=" mb-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <!-- Heroicon name: solid/check -->
                    <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                    Create a new outbreak
                  </button>
            </a>
        @endcan
    </div>
    <div class="p-4 ">
      <h4 class=" font-semibold">The Outbreaks List</h4>
  </div>
    <div class=" mt-4 bg-white rounded-xl shadow-2xl">
      <livewire:outbreaks-table/>
    </div>
</div>








@endsection
