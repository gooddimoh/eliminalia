@extends('layouts.default')

@section('title', 'Timeline')

@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">Extra</a></li>
        <li class="breadcrumb-item active">Timeline</li>
    </ol>
    <!-- begin page-header -->
    <h1 class="page-header">Timeline <small>header small text goes here...</small></h1>
    <!-- end page-header -->
    <ul class="timeline">
        {{-- foreach timeline  --}}
        <li>
            <!-- begin timeline-time -->
            <div class="timeline-time">
                <span class="date">today</span>
                <span class="time">04:20</span>
            </div>
            <!-- end timeline-time -->
            <!-- begin timeline-icon -->
            <div class="timeline-icon">
                <a href="javascript:;">&nbsp;</a>
            </div>
            <!-- end timeline-icon -->
            <!-- begin timeline-body -->
            <div class="timeline-body">
                <div class="timeline-header">
                    <span class="userimage"><img src="/assets/img/user/user-1.jpg" alt=""/></span>
                    <span class="username"><a href="javascript:;">John Smith</a> <small></small></span>
                    <span class="views">18 Views</span>
                </div>
                <div class="timeline-content">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc faucibus turpis quis tincidunt
                        luctus.
                        Nam sagittis dui in nunc consequat, in imperdiet nunc sagittis.
                    </p>
                </div>
                <div class="timeline-likes">
                    <div class="stats">
						<span class="fa-stack fa-fw stats-icon">
						<i class="fa fa-circle fa-stack-2x text-danger"></i>
						<i class="fa fa-heart fa-stack-1x fa-inverse t-plus-1"></i>
						</span>
                        <span class="fa-stack fa-fw stats-icon">
						<i class="fa fa-circle fa-stack-2x text-primary"></i>
						<i class="fa fa-thumbs-up fa-stack-1x fa-inverse"></i>
						</span>
                        <span class="stats-total">4.3k</span>
                    </div>
                    <div class="stats-right">
                        <span class="stats-text">259 Shares</span>
                        <span class="stats-text">21 Comments</span>
                    </div>
                </div>
                <div class="timeline-footer">
                    <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i
                                class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
                    <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i
                                class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a>
                    <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i
                                class="fa fa-share fa-fw fa-lg m-r-3"></i> Share</a>
                </div>
                <div class="timeline-comment-box">
                    <div class="user"><img src="/assets/img/user/user-13.jpg"/></div>
                    <div class="input">
                        <form action="{{route('timeline.create')}}" method="post">
                            <div class="input-group">
                                <input type="text" class="form-control rounded-corner"
                                       placeholder="Write a comment..."/>
                                <span class="input-group-btn p-l-10">
                                    <button class="btn btn-primary f-s-12 rounded-corner" type="submit">Comment</button>
								</span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end timeline-body -->
        </li>
        @foreach($timelines as $timeline)
            <li>
                <div class="timeline-icon">
                    <a href="javascript:;">&nbsp;</a>
                </div>
                <div class="timeline-time">
                    <span class="date">{{$timeline->date}}</span>
                    <span class="time">{{$timeline->time}}</span>
                </div>
                <div class="timeline-body">
                    {{$timeline->text}}
                </div>
            </li>
        @endforeach
    </ul>
    <!-- end timeline -->
@endsection

@push('scripts')
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
    <script src="/assets/js/demo/timeline.demo.js"></script>
@endpush