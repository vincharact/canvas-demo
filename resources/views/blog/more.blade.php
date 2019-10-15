@extends('blog.layouts.app')

@section('title', sprintf('%s — %s', config('app.name'), __('canvas::blog.title')))

@push('styles')
    @include('blog.partials.styles')

    <style>
        .center {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
@endpush

@section('content')
    <div class="container">
        @include('blog.partials.navbar')

        <div class="center">
            <h3><i>To BE Continue...</i></h3>
        </div>
    </div>
@endsection
