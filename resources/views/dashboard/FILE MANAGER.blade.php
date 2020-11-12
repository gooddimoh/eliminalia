@extends('layouts.default')

@section('title', 'USER MANAGEMENT')
<!-- CSRF Token --> <meta name="csrf-token" content="{{ csrf_token() }}">
@push('css')
    <link href="/assets/plugins/summernote/dist/summernote.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
@endpush

@section('content')
    <div class="row">
        <div style="height: 90vh; width: 100vw">
            <div id="fm"></div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="/assets/plugins/summernote/dist/summernote.min.js"></script>
    <script src="/assets/js/demo/form-summernote.demo.js"></script>
    <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
@endpush
