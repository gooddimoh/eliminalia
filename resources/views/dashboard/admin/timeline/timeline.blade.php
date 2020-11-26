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
        <li class="timeline-li-type1">
            <!-- begin timeline-time -->
            <div class="timeline-time">
                <span class="date">date</span>
                {{--                <span class="date">{{ $date }}</span>--}}
            </div>
            <!-- end timeline-time -->
            <!-- begin timeline-icon -->
            <div class="timeline-icon">
                <a href="javascript:;">&nbsp;</a>
            </div>
            <!-- end timeline-icon -->
            <!-- begin timeline-body -->
            <div class="timeline-body">
                <div class="col-xl-12">
                    <div id="accordion" class="accordion">
                        <!-- begin card -->
                        <div class="card bg-light text-white">
                            <div class="card-header bg-light-lighter pointer-cursor d-flex align-items-center"
                                 data-toggle="collapse" data-target="#collapseOne" aria-expanded="true">
                                <p class="text-black">
                                    Collapsible Group Item #1
                                    <i class="fas fa-lg fa-fw m-r-10 fa-chevron-"style="position: absolute; top:20px; right: 20px;"></i>
                                </p>
                            </div>
                            <div id="collapseOne" class="collapse show" data-parent="#accordion" style="">
                                <div class="card-body">
                                    <p class="text-dark">
                                        Anim particular cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                        dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                        tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                        wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                        vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                        synth nesciunt you probably haven't heard of them accusamus labore
                                        sustainable VHS.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                </div>
                <div class="timeline-content">
                    <div class="timeline-content-item">
                        <script>
                            $(".fa-chevron-down").click(function () {
                                alert(this).find('p');
                                $(this).find('p').toggle();
                            });
                        </script>
                    </div>
                </div>
            </div>
        </li>
        <li class="timeline-li-type2">
            <!-- begin timeline-time -->
            <div class="timeline-time">
                <span class="date">date</span>
                {{--<span class="date">{{ $date }}</span>--}}
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
                    <span class="userimage"><img src="/assets/img/user/user-1.jpg" alt=""></span>
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
                    <i class="fas fa-lg fa-fw m-r-10 fa-chevron-down"
                       style="position: absolute; top:20px; right: 20px;"></i>
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
                    <div class="user"><img src="/assets/img/user/user-13.jpg"></div>
                    <div class="input">
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control rounded-corner" placeholder="Write a comment...">
                                <span class="input-group-btn p-l-10">
								<button class="btn btn-primary f-s-12 rounded-corner" type="button">Approved</button>
								</span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end timeline-body -->
        </li>
        <li class="timeline-li-type3">
            <div class="timeline-time">
                <span class="date">date</span>
                {{--<span class="date">{{ $date }}</span>--}}
            </div>
            <div class="timeline-icon">
                <a href="javascript:;">&nbsp;</a>
            </div>
            <!-- begin timeline-body -->
            <div class="timeline-body">
                <div id="accordion" class="accordion">
                    <!-- begin card -->
                    <div class="card bg-dark text-white">
                        <div class="card-header bg-dark-darker pointer-cursor d-flex align-items-center collapsed"
                             data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false">
                            <i class="fa fa-circle fa-fw text-indigo mr-2 f-s-8"></i>
                            <p>Collapsible Group Item #2</p>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion" style="">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3
                                wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                nesciunt laborum
                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                coffee nulla
                                assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                cred nesciunt
                                sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                accusamus
                                labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                Loading...
            </div>
            <!-- begin timeline-body -->
        </li>
    </ul>
@endsection

@section('content2')
    <div id="accordion" class="accordion">
        <!-- begin card -->
        <div class="card bg-dark text-white">
            <div class="card-header bg-dark-darker pointer-cursor d-flex align-items-center" data-toggle="collapse"
                 data-target="#collapseOne" aria-expanded="true">
                <i class="fa fa-circle fa-fw text-blue mr-2 f-s-8"></i>
                <p>Collapsible Group Item #1</p>
            </div>
            <div id="collapseOne" class="collapse show" data-parent="#accordion" style="">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                    sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                    labore sustainable VHS.
                </div>
            </div>
        </div>
        <!-- end card -->
        <!-- begin card -->
        <div class="card bg-light text-white">
            <div class="card-header bg-light-lighter pointer-cursor d-flex align-items-center collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false">
                <i class="fa fa-circle fa-fw text-indigo mr-2 f-s-8"></i> Collapsible Group Item #2
            </div>
            <div id="collapseTwo" class="collapse" data-parent="#accordion" style="">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                    sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                    labore sustainable VHS.
                </div>
            </div>
        </div>
        <!-- end card -->
        <!-- begin card -->
        <div class="card bg-dark text-white">
            <div class="card-header bg-dark-darker pointer-cursor d-flex align-items-center collapsed"
                 data-toggle="collapse" data-target="#collapseThree" aria-expanded="false">
                <i class="fa fa-circle fa-fw text-teal mr-2 f-s-8"></i> Collapsible Group Item #3
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordion" style="">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                    sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                    labore sustainable VHS.
                </div>
            </div>
        </div>
        <!-- end card -->
        <!-- begin card -->
        <div class="card bg-dark text-white">
            <div class="card-header bg-dark-darker pointer-cursor d-flex align-items-center collapsed"
                 data-toggle="collapse" data-target="#collapseFour">
                <i class="fa fa-circle fa-fw text-info mr-2 f-s-8"></i> Collapsible Group Item #4
            </div>
            <div id="collapseFour" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                    sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                    labore sustainable VHS.
                </div>
            </div>
        </div>
        <!-- end card -->
        <!-- begin card -->
        <div class="card bg-dark text-white">
            <div class="card-header bg-dark-darker pointer-cursor d-flex align-items-center collapsed"
                 data-toggle="collapse" data-target="#collapseFive">
                <i class="fa fa-circle fa-fw text-warning mr-2 f-s-8"></i> Collapsible Group Item #5
            </div>
            <div id="collapseFive" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                    sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                    labore sustainable VHS.
                </div>
            </div>
        </div>
        <!-- end card -->
        <!-- begin card -->
        <div class="card bg-dark text-white">
            <div class="card-header bg-dark-darker pointer-cursor d-flex align-items-center collapsed"
                 data-toggle="collapse" data-target="#collapseSix">
                <i class="fa fa-circle fa-fw text-danger mr-2 f-s-8"></i> Collapsible Group Item #6
            </div>
            <div id="collapseSix" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                    sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                    labore sustainable VHS.
                </div>
            </div>
        </div>
        <!-- end card -->
        <!-- begin card -->
        <div class="card bg-dark text-white">
            <div class="card-header bg-dark-darker pointer-cursor d-flex align-items-center collapsed"
                 data-toggle="collapse" data-target="#collapseSeven">
                <i class="fa fa-circle fa-fw text-muted mr-2 f-s-8"></i> Collapsible Group Item #7
            </div>
            <div id="collapseSeven" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                    sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                    labore sustainable VHS.
                </div>
            </div>
        </div>
        <!-- end card -->
    </div>
@endsection

@push('scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACCAVzL6y61_yGaUVT7h3yb2dY8s87YUM&v=3.exp&amp;sensor=false"></script>
    <script src="{{ asset('/assets/js/demo/timeline.demo.js')}}"></script>
@endpush