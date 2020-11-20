@extends('layouts.default')

@section('title', 'Timeline')

@section('content')
    <p>print</p>
@endsection

@push('scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACCAVzL6y61_yGaUVT7h3yb2dY8s87YUM&v=3.exp&amp;sensor=false"></script>
    <script src="{{ asset('/assets/js/demo/timeline.demo.js')}}"></script>
@endpush