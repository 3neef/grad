@extends('layouts.app1')

@section('title', __('outbreak.list'))

@section('content')
<div class="mb-3">
    <div class="float-right">
        @can('create', new App\Models\Outbreak)
            <a href="{{ route('outbreaks.create') }}" class="btn btn-success">{{ __('outbreak.create') }}</a>
        @endcan
    </div>
    <h1 class="page-title">{{ __('outbreak.list') }} <small>{{ __('app.total') }} : {{ $outbreaks->total() }} {{ __('outbreak.outbreak') }}</small></h1>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <form method="GET" action="" accept-charset="UTF-8" class="form-inline">
                    <div class="form-group">
                        <label for="q" class="control-label">{{ __('outbreak.search') }}</label>
                        <input placeholder="{{ __('outbreak.search_text') }}" name="q" type="text" id="q" class="form-control mx-sm-2" value="{{ request('q') }}">
                    </div>
                    <input type="submit" value="{{ __('outbreak.search') }}" class="btn btn-secondary">
                    <a href="{{ route('outbreaks.index') }}" class="btn btn-link">{{ __('app.reset') }}</a>
                </form>
            </div>
            <table class="table table-sm table-responsive-sm">
                <thead>
                    <tr>
                        <th class="text-center">{{ __('app.table_no') }}</th>
                        <th>{{ __('outbreak.name') }}</th>
                        <th>{{ __('outbreak.address') }}</th>
                        <th>{{ __('outbreak.latitude') }}</th>
                        <th>{{ __('outbreak.longitude') }}</th>
                        <th class="text-center">{{ __('app.action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($outbreaks as $key => $outbreak)
                    <tr>
                        <td class="text-center">{{ $outbreaks->firstItem() + $key }}</td>
                        <td>{!! $outbreak->name_link !!}</td>
                        <td>{{ $outbreak->address }}</td>
                        <td>{{ $outbreak->latitude }}</td>
                        <td>{{ $outbreak->longitude }}</td>
                        <td class="text-center">
                            <a href="{{ route('outbreaks.show', $outbreak) }}" id="show-outbreak-{{ $outbreak->id }}">{{ __('app.show') }}</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="card-body">{{ $outbreaks->appends(Request::except('page'))->render() }}</div>
        </div>
    </div>
</div>
@endsection
