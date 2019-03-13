@extends('administration::layouts.administration-master')
@section('content')

    @if (!empty($form))
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <div class="row">
                        {!! form($form) !!}
                    </div>
                </div>
            </div>
        </div>
    @endif


@endsection