@extends('administration::layouts.administration-master')
@section('content')

    <div class="row">
        @if(Route::currentRouteName() == 'administration.index')
            @include('administration::components.dashboard.log-box')
        @endif
        @if (!empty($boxes))
            {!! $boxes !!}
        @endif

        @if (!empty($form))
            @include('administration::boxes.form_fields')
        @endif

        @if (!empty($table))
            @include('administration::boxes.data_table')
        @endif
    </div>

@endsection

