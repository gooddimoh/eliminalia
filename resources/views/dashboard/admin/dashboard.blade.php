@extends('layouts.default')

@section('title', 'Dashboard')

@push('css')
    <link href="{{ asset('/assets/plugins/jvectormap-next/jquery-jvectormap.css') }}" rel=" stylesheet"/>
    <link href="{{ asset('/assets/plugins/nvd3/build/nv.d3.css" rel="stylesheet') }}"/>
    <link href="{{ asset('/assets/plugins/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet"/>
@endpush

@section('title', 'Dashboard')

@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header mb-3">Dashboard</h1>
    <!-- end page-header -->
    <!-- begin daterange-filter -->
    <div class="d-sm-flex align-items-center mb-3">
        <a href="#" class="btn btn-inverse mr-2 text-truncate" id="daterange-filter">
            <i class="fa fa-calendar fa-fw text-white-transparent-5 ml-n1"></i>
            <span>1 Jun 2020 - 7 Jun 2020</span>
            <b class="caret"></b>
        </a>
        <div class="text-muted f-w-600 mt-2 mt-sm-0">compared to <span id="daterange-prev-date">24 Mar-30 Apr 2020</span></div>
    </div>
    <!-- end daterange-filter -->
    <!-- begin row -->
    <div class="row">
        <!-- begin col-6 -->
        <div class="col-xl-6">
            <!-- begin card -->
            <div class="card border-0 bg-dark text-white mb-3 overflow-hidden">
                <!-- begin card-body -->
                <div class="card-body">
                    <!-- begin row -->
                    <div class="row">
                        <!-- begin col-7 -->
                        <div class="col-xl-7 col-lg-8">
                            <!-- begin title -->
                            <div class="mb-3 text-grey">
                                <b>TOTAL SALES</b>
                                <span class="ml-2">
									<i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-title="Total sales" data-placement="top" data-content="Net sales (gross sales minus discounts and returns) plus taxes and shipping. Includes orders from all sales channels."></i>
								</span>
                            </div>
                            <!-- end title -->
                            <!-- begin total-sales -->
                            <div class="d-flex mb-1">
                                <h2 class="mb-0">$<span data-animation="number" data-value="64559.25">0.00</span></h2>
                                <div class="ml-auto mt-n1 mb-n1"><div id="total-sales-sparkline"></div></div>
                            </div>
                            <!-- end total-sales -->
                            <!-- begin percentage -->
                            <div class="mb-3 text-grey">
                                <i class="fa fa-caret-up"></i> <span data-animation="number" data-value="33.21">0.00</span>% compare to last week
                            </div>
                            <!-- end percentage -->
                            <hr class="bg-white-transparent-2" />
                            <!-- begin row -->
                            <div class="row text-truncate">
                                <!-- begin col-6 -->
                                <div class="col-6">
                                    <div class="f-s-12 text-grey">Total sales order</div>
                                    <div class="f-s-18 m-b-5 f-w-600 p-b-1" data-animation="number" data-value="1568">0</div>
                                    <div class="progress progress-xs rounded-lg bg-dark-darker m-b-5">
                                        <div class="progress-bar progress-bar-striped rounded-right bg-teal" data-animation="width" data-value="55%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <!-- end col-6 -->
                                <!-- begin col-6 -->
                                <div class="col-6">
                                    <div class="f-s-12 text-grey">Avg. sales per order</div>
                                    <div class="f-s-18 m-b-5 f-w-600 p-b-1">$<span data-animation="number" data-value="41.20">0.00</span></div>
                                    <div class="progress progress-xs rounded-lg bg-dark-darker m-b-5">
                                        <div class="progress-bar progress-bar-striped rounded-right" data-animation="width" data-value="55%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <!-- end col-6 -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end col-7 -->
                        <!-- begin col-5 -->
                        <div class="col-xl-5 col-lg-4 align-items-center d-flex justify-content-center">
                            <img src="/assets/img/svg/img-1.svg" height="150px" class="d-none d-lg-block" />
                        </div>
                        <!-- end col-5 -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col-6 -->
        <!-- begin col-6 -->
        <div class="col-xl-6">
            <!-- begin row -->
            <div class="row">
                <!-- begin col-6 -->
                <div class="col-sm-6">
                    <!-- begin card -->
                    <div class="card border-0 bg-dark text-white text-truncate mb-3">
                        <!-- begin card-body -->
                        <div class="card-body">
                            <!-- begin title -->
                            <div class="mb-3 text-grey">
                                <b class="mb-3">CONVERSION RATE</b>
                                <span class="ml-2"><i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-title="Conversion Rate" data-placement="top" data-content="Percentage of sessions that resulted in orders from total number of sessions." data-original-title="" title=""></i></span>
                            </div>
                            <!-- end title -->
                            <!-- begin conversion-rate -->
                            <div class="d-flex align-items-center mb-1">
                                <h2 class="text-white mb-0"><span data-animation="number" data-value="2.19">0.00</span>%</h2>
                                <div class="ml-auto">
                                    <div id="conversion-rate-sparkline"></div>
                                </div>
                            </div>
                            <!-- end conversion-rate -->
                            <!-- begin percentage -->
                            <div class="mb-4 text-grey">
                                <i class="fa fa-caret-down"></i> <span data-animation="number" data-value="0.50">0.00</span>% compare to last week
                            </div>
                            <!-- end percentage -->
                            <!-- begin info-row -->
                            <div class="d-flex mb-2">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-circle text-red f-s-8 mr-2"></i>
                                    Added to cart
                                </div>
                                <div class="d-flex align-items-center ml-auto">
                                    <div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="262">0</span>%</div>
                                    <div class="width-50 text-right pl-2 f-w-600"><span data-animation="number" data-value="3.79">0.00</span>%</div>
                                </div>
                            </div>
                            <!-- end info-row -->
                            <!-- begin info-row -->
                            <div class="d-flex mb-2">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-circle text-warning f-s-8 mr-2"></i>
                                    Reached checkout
                                </div>
                                <div class="d-flex align-items-center ml-auto">
                                    <div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="11">0</span>%</div>
                                    <div class="width-50 text-right pl-2 f-w-600"><span data-animation="number" data-value="3.85">0.00</span>%</div>
                                </div>
                            </div>
                            <!-- end info-row -->
                            <!-- begin info-row -->
                            <div class="d-flex">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-circle text-lime f-s-8 mr-2"></i>
                                    Sessions converted
                                </div>
                                <div class="d-flex align-items-center ml-auto">
                                    <div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="57">0</span>%</div>
                                    <div class="width-50 text-right pl-2 f-w-600"><span data-animation="number" data-value="2.19">0.00</span>%</div>
                                </div>
                            </div>
                            <!-- end info-row -->
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col-6 -->
                <!-- begin col-6 -->
                <div class="col-sm-6">
                    <!-- begin card -->
                    <div class="card border-0 bg-dark text-white text-truncate mb-3">
                        <!-- begin card-body -->
                        <div class="card-body">
                            <!-- begin title -->
                            <div class="mb-3 text-grey">
                                <b class="mb-3">STORE SESSIONS</b>
                                <span class="ml-2"><i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-title="Store Sessions" data-placement="top" data-content="Number of sessions on your online store. A session is a period of continuous activity from a visitor." data-original-title="" title=""></i></span>
                            </div>
                            <!-- end title -->
                            <!-- begin store-session -->
                            <div class="d-flex align-items-center mb-1">
                                <h2 class="text-white mb-0"><span data-animation="number" data-value="70719">0</span></h2>
                                <div class="ml-auto">
                                    <div id="store-session-sparkline"></div>
                                </div>
                            </div>
                            <!-- end store-session -->
                            <!-- begin percentage -->
                            <div class="mb-4 text-grey">
                                <i class="fa fa-caret-up"></i> <span data-animation="number" data-value="9.5">0.00</span>% compare to last week
                            </div>
                            <!-- end percentage -->
                            <!-- begin info-row -->
                            <div class="d-flex mb-2">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-circle text-teal f-s-8 mr-2"></i>
                                    Mobile
                                </div>
                                <div class="d-flex align-items-center ml-auto">
                                    <div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="25.7">0.00</span>%</div>
                                    <div class="width-50 text-right pl-2 f-w-600"><span data-animation="number" data-value="53210">0</span></div>
                                </div>
                            </div>
                            <!-- end info-row -->
                            <!-- begin info-row -->
                            <div class="d-flex mb-2">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-circle text-blue f-s-8 mr-2"></i>
                                    Desktop
                                </div>
                                <div class="d-flex align-items-center ml-auto">
                                    <div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="16.0">0.00</span>%</div>
                                    <div class="width-50 text-right pl-2 f-w-600"><span data-animation="number" data-value="11959">0</span></div>
                                </div>
                            </div>
                            <!-- end info-row -->
                            <!-- begin info-row -->
                            <div class="d-flex">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-circle text-aqua f-s-8 mr-2"></i>
                                    Tablet
                                </div>
                                <div class="d-flex align-items-center ml-auto">
                                    <div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="7.9">0.00</span>%</div>
                                    <div class="width-50 text-right pl-2 f-w-600"><span data-animation="number" data-value="5545">0</span></div>
                                </div>
                            </div>
                            <!-- end info-row -->
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col-6 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end col-6 -->
    </div>
    <!-- end row -->
    <!-- begin row -->
    <div class="row">
        <!-- begin col-8 -->
        <div class="col-xl-8 col-lg-6">
            <!-- begin card -->
            <div class="card bg-dark border-0 text-white mb-3">
                <div class="card-body">
                    <div class="mb-3 text-grey"><b>VISITORS ANALYTICS</b><span class="ml-2"> <i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-title="Top products with units sold" data-placement="top" data-content="Products with the most individual units sold. Includes orders from all sales channels." data-original-title="" title=""></i></span></div>

                </div>
                <div class="card-body p-0">
                    <div style="height: 269px">
                        <div id="visitors-line-chart" class="widget-chart-full-width nvd3-inverse-mode" style="height: 254px"><svg class="nvd3-svg"><g class="nvd3 nv-wrap nv-stackedAreaChart" transform="translate(35,20)"><g><g class="nv-legendWrap nvd3-svg" transform="translate(0,-20)"><g class="nvd3 nv-legend" transform="translate(0,5)"><g transform="translate(811.2333984375,5)"><g class="nv-series" transform="translate(0,5)"><circle class="nv-legend-symbol" r="5" style="stroke-width: 2; fill: rgb(90, 200, 250); fill-opacity: 1; stroke: rgb(90, 200, 250);"></circle><text text-anchor="start" class="nv-legend-text" dy=".32em" dx="8" fill="#000">Unique Visitors</text></g><g class="nv-series" transform="translate(112.716796875,5)"><circle class="nv-legend-symbol" r="5" style="stroke-width: 2; fill: rgb(52, 143, 226); fill-opacity: 1; stroke: rgb(52, 143, 226);"></circle><text text-anchor="start" class="nv-legend-text" dy=".32em" dx="8" fill="#000">Page Views</text></g></g></g></g><g class="nv-controlsWrap"></g><g class="nv-focus"><g class="nv-background"><rect width="1015" height="214"></rect></g><g class="nv-x nv-axis nvd3-svg" transform="translate(0,214)"><g class="nvd3 nv-wrap nv-axis"><g><g class="tick" transform="translate(44.4544252937023,0)" style="opacity: 1;"><line y2="-214" x2="0"></line><text dy=".71em" y="7" transform="translate(0,0)" style="text-anchor: middle;" x="0">Oct 24</text></g><g class="tick" transform="translate(120.69683861020972,0)" style="opacity: 1;"><line y2="-214" x2="0"></line><text dy=".71em" y="7" transform="translate(0,0)" style="text-anchor: middle;" x="0">Oct 29</text></g><g class="tick" transform="translate(196.93925192671716,0)" style="opacity: 1;"><line y2="-214" x2="0"></line><text dy=".71em" y="7" transform="translate(0,0)" style="text-anchor: middle;" x="0">Nov 4</text></g><g class="tick" transform="translate(273.1816652432246,0)" style="opacity: 1;"><line y2="-214" x2="0"></line><text dy=".71em" y="7" transform="translate(0,0)" style="text-anchor: middle;" x="0">Nov 10</text></g><g class="tick" transform="translate(349.424078559732,0)" style="opacity: 1;"><line y2="-214" x2="0"></line><text dy=".71em" y="7" transform="translate(0,0)" style="text-anchor: middle;" x="0">Nov 16</text></g><g class="tick" transform="translate(425.66649187623943,0)" style="opacity: 1;"><line y2="-214" x2="0"></line><text dy=".71em" y="7" transform="translate(0,0)" style="text-anchor: middle;" x="0">Nov 22</text></g><g class="tick" transform="translate(501.90890519274683,0)" style="opacity: 1;"><line y2="-214" x2="0"></line><text dy=".71em" y="7" transform="translate(0,0)" style="text-anchor: middle;" x="0">Nov 27</text></g><g class="tick" transform="translate(578.1513185092543,0)" style="opacity: 1;"><line y2="-214" x2="0"></line><text dy=".71em" y="7" transform="translate(0,0)" style="text-anchor: middle;" x="0">Dec 3</text></g><g class="tick" transform="translate(654.3937318257617,0)" style="opacity: 1;"><line y2="-214" x2="0"></line><text dy=".71em" y="7" transform="translate(0,0)" style="text-anchor: middle;" x="0">Dec 9</text></g><g class="tick" transform="translate(730.6361451422691,0)" style="opacity: 1;"><line y2="-214" x2="0"></line><text dy=".71em" y="7" transform="translate(0,0)" style="text-anchor: middle;" x="0">Dec 15</text></g><g class="tick" transform="translate(806.8785584587765,0)" style="opacity: 1;"><line y2="-214" x2="0"></line><text dy=".71em" y="7" transform="translate(0,0)" style="text-anchor: middle;" x="0">Dec 20</text></g><g class="tick" transform="translate(883.1209717752839,0)" style="opacity: 1;"><line y2="-214" x2="0"></line><text dy=".71em" y="7" transform="translate(0,0)" style="text-anchor: middle;" x="0">Dec 26</text></g><g class="tick" transform="translate(959.3633850917913,0)" style="opacity: 1;"><line y2="-214" x2="0"></line><text dy=".71em" y="7" transform="translate(0,0)" style="text-anchor: middle;" x="0">Jan 1</text></g><path class="domain" d="M0,0V0H1015V0"></path><text class="nv-axislabel" text-anchor="middle" y="36" x="507.5"></text></g><g class="nv-axisMaxMin nv-axisMaxMin-x nv-axisMin-x" transform="translate(0,0)"><text dy=".71em" y="7" transform="" style="text-anchor: middle;">Oct 20</text></g><g class="nv-axisMaxMin nv-axisMaxMin-x nv-axisMax-x" transform="translate(1015,0)"><text dy=".71em" y="7" transform="" style="text-anchor: middle;">Jan 5</text></g></g></g><g class="nv-y nv-axis nvd3-svg"><g class="nvd3 nv-wrap nv-axis"><g><g class="tick zero" transform="translate(0,214)" style="opacity: 1;"><line x2="1015" y2="0"></line><text dy=".32em" x="-3" opacity="0" style="text-anchor: end;" y="0">0</text></g><g class="tick" transform="translate(0,163.04761904761904)" style="opacity: 1;"><line x2="1015" y2="0"></line><text dy=".32em" x="-3" opacity="1" style="text-anchor: end;" y="0">10</text></g><g class="tick" transform="translate(0,112.0952380952381)" style="opacity: 1;"><line x2="1015" y2="0"></line><text dy=".32em" x="-3" opacity="1" style="text-anchor: end;" y="0">20</text></g><g class="tick" transform="translate(0,61.14285714285714)" style="opacity: 1;"><line x2="1015" y2="0"></line><text dy=".32em" x="-3" opacity="1" style="text-anchor: end;" y="0">30</text></g><g class="tick" transform="translate(0,10.190476190476202)" style="opacity: 1;"><line x2="1015" y2="0"></line><text dy=".32em" x="-3" opacity="1" style="text-anchor: end;" y="0">40</text></g><path class="domain" d="M0,0H0V214H0"></path><text class="nv-axislabel" transform="rotate(-90)" y="-50" x="-107" style="text-anchor: middle;"></text></g><g class="nv-axisMaxMin nv-axisMaxMin-y nv-axisMin-y" transform="translate(0,214)"><text dy=".32em" y="0" x="-3" text-anchor="end" style="opacity: 1;">0</text></g><g class="nv-axisMaxMin nv-axisMaxMin-y nv-axisMax-y" transform="translate(0,0)"><text dy=".32em" y="0" x="-3" text-anchor="end" style="opacity: 1;">42</text></g></g></g><g class="nv-stackedWrap nvd3-svg"><g class="nvd3 nv-wrap nv-stackedarea" transform="translate(0,0)"><defs><clipPath id="nv-edge-clip-65232"><rect width="1015" height="214"></rect></clipPath></defs><g clip-path=""><g class="nv-areaWrap"><path class="nv-area nv-area-0" d="M0,147.76190476190476L13.174689021092483,147.76190476190476L26.349378042184966,183.42857142857144L52.69875608436993,183.42857142857144L66.42239048134127,183.42857142857144L79.59707950243374,188.52380952380952L92.77176852352623,188.52380952380952L105.94645754461871,188.52380952380952L119.1211465657112,183.42857142857144L132.29583558680366,178.33333333333334L145.47052460789618,183.42857142857144L158.64521362898864,168.14285714285714L171.8199026500811,168.14285714285714L184.99459167117362,173.23809523809524L198.16928069226608,163.04761904761904L211.34396971335858,163.04761904761904L224.51865873445104,163.04761904761904L237.69334775554356,163.04761904761904L250.86803677663602,168.14285714285714L264.0427257977285,168.14285714285714L277.21741481882094,163.04761904761904L290.3921038399135,168.14285714285714L303.566792861006,168.14285714285714L316.7414818820984,173.23809523809524L329.9161709031909,173.23809523809524L343.0908599242834,173.23809523809524L356.2655489453759,173.23809523809524L369.4402379664684,173.23809523809524L382.61492698756086,178.33333333333334L395.7896160086533,178.33333333333334L408.9643050297458,183.42857142857144L422.13899405083833,183.42857142857144L435.31368307193077,183.42857142857144L448.48837209302326,183.42857142857144L461.66306111411575,188.52380952380952L474.83775013520824,188.52380952380952L488.01243915630073,193.61904761904762L501.18712817739316,193.61904761904762L514.3618171984857,188.52380952380952L527.5365062195782,188.52380952380952L540.7111952406706,188.52380952380952L553.8858842617632,178.33333333333334L567.0605732828556,178.33333333333334L580.235262303948,178.33333333333334L593.4099513250407,163.04761904761904L606.584640346133,168.14285714285714L619.7593293672255,168.14285714285714L632.934018388318,163.04761904761904L646.1087074094105,157.95238095238096L659.283396430503,157.95238095238096L672.4580854515954,173.23809523809524L685.632774472688,173.23809523809524L698.8074634937805,178.33333333333334L711.9821525148728,173.23809523809524L725.1568415359654,168.14285714285714L738.3315305570578,173.23809523809524L751.5062195781503,168.14285714285714L764.6809085992429,163.04761904761904L777.8555976203353,168.14285714285714L791.0302866414278,163.04761904761904L804.2049756625203,132.47619047619048L817.3796646836128,127.38095238095238L830.5543537047052,132.47619047619048L843.7290427257977,127.38095238095238L856.9037317468902,132.47619047619048L870.0784207679826,137.57142857142856L883.2531097890752,142.66666666666669L896.4277988101677,91.71428571428572L909.6024878312601,122.28571428571428L922.7771768523527,137.57142857142856L935.9518658734451,142.66666666666669L949.1265548945375,132.47619047619048L962.3012439156302,132.47619047619048L975.4759329367225,127.38095238095238L988.650621957815,178.33333333333334L1001.8253109789075,178.33333333333334L1015,178.33333333333334L1015,214L1001.8253109789075,214L988.650621957815,214L975.4759329367225,214L962.3012439156302,214L949.1265548945375,214L935.9518658734451,214L922.7771768523527,214L909.6024878312601,214L896.4277988101677,214L883.2531097890752,214L870.0784207679826,214L856.9037317468902,214L843.7290427257977,214L830.5543537047052,214L817.3796646836128,214L804.2049756625203,214L791.0302866414278,214L777.8555976203353,214L764.6809085992429,214L751.5062195781503,214L738.3315305570578,214L725.1568415359654,214L711.9821525148728,214L698.8074634937805,214L685.632774472688,214L672.4580854515954,214L659.283396430503,214L646.1087074094105,214L632.934018388318,214L619.7593293672255,214L606.584640346133,214L593.4099513250407,214L580.235262303948,214L567.0605732828556,214L553.8858842617632,214L540.7111952406706,214L527.5365062195782,214L514.3618171984857,214L501.18712817739316,214L488.01243915630073,214L474.83775013520824,214L461.66306111411575,214L448.48837209302326,214L435.31368307193077,214L422.13899405083833,214L408.9643050297458,214L395.7896160086533,214L382.61492698756086,214L369.4402379664684,214L356.2655489453759,214L343.0908599242834,214L329.9161709031909,214L316.7414818820984,214L303.566792861006,214L290.3921038399135,214L277.21741481882094,214L264.0427257977285,214L250.86803677663602,214L237.69334775554356,214L224.51865873445104,214L211.34396971335858,214L198.16928069226608,214L184.99459167117362,214L171.8199026500811,214L158.64521362898864,214L145.47052460789618,214L132.29583558680366,214L119.1211465657112,214L105.94645754461871,214L92.77176852352623,214L79.59707950243374,214L66.42239048134127,214L52.69875608436993,214L26.349378042184966,214L13.174689021092483,214L0,214Z" style="fill: rgb(90, 200, 250); stroke: rgb(90, 200, 250);"></path><path class="nv-area nv-area-1" d="M0,76.42857142857142L13.174689021092483,81.52380952380952L26.349378042184966,107L52.69875608436993,112.0952380952381L66.42239048134127,117.1904761904762L79.59707950243374,112.0952380952381L92.77176852352623,107L105.94645754461871,107L119.1211465657112,112.0952380952381L132.29583558680366,107L145.47052460789618,117.1904761904762L158.64521362898864,107L171.8199026500811,101.9047619047619L184.99459167117362,107L198.16928069226608,86.61904761904762L211.34396971335858,81.52380952380952L224.51865873445104,81.52380952380952L237.69334775554356,76.42857142857142L250.86803677663602,81.52380952380952L264.0427257977285,76.42857142857142L277.21741481882094,86.61904761904762L290.3921038399135,91.71428571428572L303.566792861006,91.71428571428572L316.7414818820984,76.42857142857142L329.9161709031909,76.42857142857142L343.0908599242834,81.52380952380952L356.2655489453759,81.52380952380952L369.4402379664684,86.61904761904762L382.61492698756086,96.8095238095238L395.7896160086533,86.61904761904762L408.9643050297458,91.71428571428572L422.13899405083833,91.71428571428572L435.31368307193077,101.9047619047619L448.48837209302326,112.0952380952381L461.66306111411575,117.1904761904762L474.83775013520824,122.28571428571428L488.01243915630073,122.28571428571428L501.18712817739316,127.38095238095238L514.3618171984857,137.57142857142856L527.5365062195782,142.66666666666669L540.7111952406706,137.57142857142856L553.8858842617632,122.28571428571428L567.0605732828556,122.28571428571428L580.235262303948,122.28571428571428L593.4099513250407,112.0952380952381L606.584640346133,122.28571428571428L619.7593293672255,117.1904761904762L632.934018388318,96.8095238095238L646.1087074094105,86.61904761904762L659.283396430503,86.61904761904762L672.4580854515954,107L685.632774472688,112.0952380952381L698.8074634937805,122.28571428571428L711.9821525148728,107L725.1568415359654,101.9047619047619L738.3315305570578,107L751.5062195781503,101.9047619047619L764.6809085992429,91.71428571428572L777.8555976203353,101.9047619047619L791.0302866414278,96.8095238095238L804.2049756625203,35.66666666666666L817.3796646836128,20.38095238095238L830.5543537047052,20.38095238095238L843.7290427257977,0L856.9037317468902,10.190476190476202L870.0784207679826,15.28571428571428L883.2531097890752,30.57142857142858L896.4277988101677,10.190476190476202L909.6024878312601,45.85714285714286L922.7771768523527,76.42857142857142L935.9518658734451,81.52380952380952L949.1265548945375,56.04761904761904L962.3012439156302,56.04761904761904L975.4759329367225,50.95238095238096L988.650621957815,86.61904761904762L988.650621957815,86.61904761904762L1015,91.71428571428572L1015,178.33333333333334L988.650621957815,178.33333333333334L988.650621957815,178.33333333333334L975.4759329367225,127.38095238095238L962.3012439156302,132.47619047619048L949.1265548945375,132.47619047619048L935.9518658734451,142.66666666666669L922.7771768523527,137.57142857142856L909.6024878312601,122.28571428571428L896.4277988101677,91.71428571428572L883.2531097890752,142.66666666666669L870.0784207679826,137.57142857142856L856.9037317468902,132.47619047619048L843.7290427257977,127.38095238095238L830.5543537047052,132.47619047619048L817.3796646836128,127.38095238095238L804.2049756625203,132.47619047619048L791.0302866414278,163.04761904761904L777.8555976203353,168.14285714285714L764.6809085992429,163.04761904761904L751.5062195781503,168.14285714285714L738.3315305570578,173.23809523809524L725.1568415359654,168.14285714285714L711.9821525148728,173.23809523809524L698.8074634937805,178.33333333333334L685.632774472688,173.23809523809524L672.4580854515954,173.23809523809524L659.283396430503,157.95238095238096L646.1087074094105,157.95238095238096L632.934018388318,163.04761904761904L619.7593293672255,168.14285714285714L606.584640346133,168.14285714285714L593.4099513250407,163.04761904761904L580.235262303948,178.33333333333334L567.0605732828556,178.33333333333334L553.8858842617632,178.33333333333334L540.7111952406706,188.52380952380952L527.5365062195782,188.52380952380952L514.3618171984857,188.52380952380952L501.18712817739316,193.61904761904762L488.01243915630073,193.61904761904762L474.83775013520824,188.52380952380952L461.66306111411575,188.52380952380952L448.48837209302326,183.42857142857144L435.31368307193077,183.42857142857144L422.13899405083833,183.42857142857144L408.9643050297458,183.42857142857144L395.7896160086533,178.33333333333334L382.61492698756086,178.33333333333334L369.4402379664684,173.23809523809524L356.2655489453759,173.23809523809524L343.0908599242834,173.23809523809524L329.9161709031909,173.23809523809524L316.7414818820984,173.23809523809524L303.566792861006,168.14285714285714L290.3921038399135,168.14285714285714L277.21741481882094,163.04761904761904L264.0427257977285,168.14285714285714L250.86803677663602,168.14285714285714L237.69334775554356,163.04761904761904L224.51865873445104,163.04761904761904L211.34396971335858,163.04761904761904L198.16928069226608,163.04761904761904L184.99459167117362,173.23809523809524L171.8199026500811,168.14285714285714L158.64521362898864,168.14285714285714L145.47052460789618,183.42857142857144L132.29583558680366,178.33333333333334L119.1211465657112,183.42857142857144L105.94645754461871,188.52380952380952L92.77176852352623,188.52380952380952L79.59707950243374,188.52380952380952L66.42239048134127,183.42857142857144L52.69875608436993,183.42857142857144L26.349378042184966,183.42857142857144L13.174689021092483,147.76190476190476L0,147.76190476190476Z" style="fill: rgb(52, 143, 226); stroke: rgb(52, 143, 226);"></path></g><g class="nv-scatterWrap nvd3-svg"><g class="nvd3 nv-wrap nv-scatter nv-chart-59099" transform="translate(0,0)"><defs><clipPath id="nv-edge-clip-59099"><rect transform="translate( -10, -10)" width="1035" height="234"></rect></clipPath></defs><g clip-path=""><g class="nv-groups"><g class="nv-group nv-series-0 nv-noninteractive" style="stroke-opacity: 1; fill-opacity: 0.5; stroke: rgb(90, 200, 250); fill: rgb(90, 200, 250);"><path class="nv-point nv-point-0" transform="translate(0,147.76190476190476)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-1" transform="translate(13.174689021092483,147.76190476190476)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-2" transform="translate(26.349378042184966,183.42857142857144)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-3" transform="translate(52.69875608436993,183.42857142857144)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-4" transform="translate(66.42239048134127,183.42857142857144)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-5" transform="translate(79.59707950243374,188.52380952380952)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-6" transform="translate(92.77176852352623,188.52380952380952)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-7" transform="translate(105.94645754461871,188.52380952380952)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-8" transform="translate(119.1211465657112,183.42857142857144)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-9" transform="translate(132.29583558680366,178.33333333333334)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-10" transform="translate(145.47052460789618,183.42857142857144)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-11" transform="translate(158.64521362898864,168.14285714285714)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-12" transform="translate(171.8199026500811,168.14285714285714)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-13" transform="translate(184.99459167117362,173.23809523809524)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-14" transform="translate(198.16928069226608,163.04761904761904)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-15" transform="translate(211.34396971335858,163.04761904761904)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-16" transform="translate(224.51865873445104,163.04761904761904)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-17" transform="translate(237.69334775554356,163.04761904761904)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-18" transform="translate(250.86803677663602,168.14285714285714)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-19" transform="translate(264.0427257977285,168.14285714285714)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-20" transform="translate(277.21741481882094,163.04761904761904)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-21" transform="translate(290.3921038399135,168.14285714285714)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-22" transform="translate(303.566792861006,168.14285714285714)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-23" transform="translate(316.7414818820984,173.23809523809524)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-24" transform="translate(329.9161709031909,173.23809523809524)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-25" transform="translate(343.0908599242834,173.23809523809524)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-26" transform="translate(356.2655489453759,173.23809523809524)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-27" transform="translate(369.4402379664684,173.23809523809524)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-28" transform="translate(382.61492698756086,178.33333333333334)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-29" transform="translate(395.7896160086533,178.33333333333334)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-30" transform="translate(408.9643050297458,183.42857142857144)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-31" transform="translate(422.13899405083833,183.42857142857144)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-32" transform="translate(435.31368307193077,183.42857142857144)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-33" transform="translate(448.48837209302326,183.42857142857144)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-34" transform="translate(461.66306111411575,188.52380952380952)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-35" transform="translate(474.83775013520824,188.52380952380952)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-36" transform="translate(488.01243915630073,193.61904761904762)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-37" transform="translate(501.18712817739316,193.61904761904762)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-38" transform="translate(514.3618171984857,188.52380952380952)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-39" transform="translate(527.5365062195782,188.52380952380952)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-40" transform="translate(540.7111952406706,188.52380952380952)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-41" transform="translate(553.8858842617632,178.33333333333334)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-42" transform="translate(567.0605732828556,178.33333333333334)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-43" transform="translate(580.235262303948,178.33333333333334)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-44" transform="translate(593.4099513250407,163.04761904761904)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-45" transform="translate(606.584640346133,168.14285714285714)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-46" transform="translate(619.7593293672255,168.14285714285714)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-47" transform="translate(632.934018388318,163.04761904761904)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-48" transform="translate(646.1087074094105,157.95238095238096)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-49" transform="translate(659.283396430503,157.95238095238096)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-50" transform="translate(672.4580854515954,173.23809523809524)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-51" transform="translate(685.632774472688,173.23809523809524)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-52" transform="translate(698.8074634937805,178.33333333333334)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-53" transform="translate(711.9821525148728,173.23809523809524)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-54" transform="translate(725.1568415359654,168.14285714285714)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-55" transform="translate(738.3315305570578,173.23809523809524)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-56" transform="translate(751.5062195781503,168.14285714285714)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-57" transform="translate(764.6809085992429,163.04761904761904)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-58" transform="translate(777.8555976203353,168.14285714285714)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-59" transform="translate(791.0302866414278,163.04761904761904)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-60" transform="translate(804.2049756625203,132.47619047619048)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-61" transform="translate(817.3796646836128,127.38095238095238)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-62" transform="translate(830.5543537047052,132.47619047619048)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-63" transform="translate(843.7290427257977,127.38095238095238)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-64" transform="translate(856.9037317468902,132.47619047619048)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-65" transform="translate(870.0784207679826,137.57142857142856)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-66" transform="translate(883.2531097890752,142.66666666666669)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-67" transform="translate(896.4277988101677,91.71428571428572)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-68" transform="translate(909.6024878312601,122.28571428571428)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-69" transform="translate(922.7771768523527,137.57142857142856)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-70" transform="translate(935.9518658734451,142.66666666666669)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-71" transform="translate(949.1265548945375,132.47619047619048)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-72" transform="translate(962.3012439156302,132.47619047619048)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-73" transform="translate(975.4759329367225,127.38095238095238)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-74" transform="translate(988.650621957815,178.33333333333334)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-75" transform="translate(1001.8253109789075,178.33333333333334)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-76" transform="translate(1015,178.33333333333334)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path></g><g class="nv-group nv-series-1 nv-noninteractive" style="stroke-opacity: 1; fill-opacity: 0.5; stroke: rgb(52, 143, 226); fill: rgb(52, 143, 226);"><path class="nv-point nv-point-0" transform="translate(0,76.42857142857142)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-1" transform="translate(13.174689021092483,81.52380952380952)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-2" transform="translate(26.349378042184966,107)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-3" transform="translate(52.69875608436993,112.0952380952381)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-4" transform="translate(66.42239048134127,117.1904761904762)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-5" transform="translate(79.59707950243374,112.0952380952381)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-6" transform="translate(92.77176852352623,107)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-7" transform="translate(105.94645754461871,107)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-8" transform="translate(119.1211465657112,112.0952380952381)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-9" transform="translate(132.29583558680366,107)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-10" transform="translate(145.47052460789618,117.1904761904762)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-11" transform="translate(158.64521362898864,107)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-12" transform="translate(171.8199026500811,101.9047619047619)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-13" transform="translate(184.99459167117362,107)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-14" transform="translate(198.16928069226608,86.61904761904762)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-15" transform="translate(211.34396971335858,81.52380952380952)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-16" transform="translate(224.51865873445104,81.52380952380952)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-17" transform="translate(237.69334775554356,76.42857142857142)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-18" transform="translate(250.86803677663602,81.52380952380952)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-19" transform="translate(264.0427257977285,76.42857142857142)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-20" transform="translate(277.21741481882094,86.61904761904762)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-21" transform="translate(290.3921038399135,91.71428571428572)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-22" transform="translate(303.566792861006,91.71428571428572)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-23" transform="translate(316.7414818820984,76.42857142857142)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-24" transform="translate(329.9161709031909,76.42857142857142)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-25" transform="translate(343.0908599242834,81.52380952380952)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-26" transform="translate(356.2655489453759,81.52380952380952)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-27" transform="translate(369.4402379664684,86.61904761904762)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-28" transform="translate(382.61492698756086,96.8095238095238)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-29" transform="translate(395.7896160086533,86.61904761904762)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-30" transform="translate(408.9643050297458,91.71428571428572)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-31" transform="translate(422.13899405083833,91.71428571428572)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-32" transform="translate(435.31368307193077,101.9047619047619)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-33" transform="translate(448.48837209302326,112.0952380952381)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-34" transform="translate(461.66306111411575,117.1904761904762)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-35" transform="translate(474.83775013520824,122.28571428571428)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-36" transform="translate(488.01243915630073,122.28571428571428)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-37" transform="translate(501.18712817739316,127.38095238095238)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-38" transform="translate(514.3618171984857,137.57142857142856)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-39" transform="translate(527.5365062195782,142.66666666666669)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-40" transform="translate(540.7111952406706,137.57142857142856)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-41" transform="translate(553.8858842617632,122.28571428571428)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-42" transform="translate(567.0605732828556,122.28571428571428)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-43" transform="translate(580.235262303948,122.28571428571428)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-44" transform="translate(593.4099513250407,112.0952380952381)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-45" transform="translate(606.584640346133,122.28571428571428)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-46" transform="translate(619.7593293672255,117.1904761904762)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-47" transform="translate(632.934018388318,96.8095238095238)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-48" transform="translate(646.1087074094105,86.61904761904762)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-49" transform="translate(659.283396430503,86.61904761904762)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-50" transform="translate(672.4580854515954,107)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-51" transform="translate(685.632774472688,112.0952380952381)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-52" transform="translate(698.8074634937805,122.28571428571428)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-53" transform="translate(711.9821525148728,107)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-54" transform="translate(725.1568415359654,101.9047619047619)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-55" transform="translate(738.3315305570578,107)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-56" transform="translate(751.5062195781503,101.9047619047619)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-57" transform="translate(764.6809085992429,91.71428571428572)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-58" transform="translate(777.8555976203353,101.9047619047619)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-59" transform="translate(791.0302866414278,96.8095238095238)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-60" transform="translate(804.2049756625203,35.66666666666666)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-61" transform="translate(817.3796646836128,20.38095238095238)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-62" transform="translate(830.5543537047052,20.38095238095238)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-63" transform="translate(843.7290427257977,0)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-64" transform="translate(856.9037317468902,10.190476190476202)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-65" transform="translate(870.0784207679826,15.28571428571428)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-66" transform="translate(883.2531097890752,30.57142857142858)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-67" transform="translate(896.4277988101677,10.190476190476202)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-68" transform="translate(909.6024878312601,45.85714285714286)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-69" transform="translate(922.7771768523527,76.42857142857142)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-70" transform="translate(935.9518658734451,81.52380952380952)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-71" transform="translate(949.1265548945375,56.04761904761904)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-72" transform="translate(962.3012439156302,56.04761904761904)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-73" transform="translate(975.4759329367225,50.95238095238096)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-74" transform="translate(988.650621957815,86.61904761904762)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-75" transform="translate(988.650621957815,86.61904761904762)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path><path class="nv-point nv-point-76" transform="translate(1015,91.71428571428572)" d="M0,2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,-2.256758334191025A2.256758334191025,2.256758334191025 0 1,1 0,2.256758334191025Z"></path></g></g><g class="nv-point-paths"></g></g><g class="nv-point-clips"></g></g></g></g></g></g><g class="nv-interactive"><g class=" nv-wrap nv-interactiveLineLayer"><g class="nv-interactiveGuideLine"></g></g></g></g><g class="nv-focusWrap"></g></g></g></svg></div>
                    </div>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col-8 -->
        <!-- begin col-4 -->
        <div class="col-xl-4 col-lg-6">
            <!-- begin card -->
            <div class="card bg-dark border-0 text-white mb-3">
                <div class="card-body">
                    <div class="mb-2 text-grey">
                        <b>SESSION BY LOCATION</b>
                        <span class="ml-2"><i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-title="Total sales" data-placement="top" data-content="Net sales (gross sales minus discounts and returns) plus taxes and shipping. Includes orders from all sales channels."></i></span>
                    </div>
                    <div id="visitors-map" class="mb-2" style="height: 200px"></div>
                    <div>
                        <div class="d-flex align-items-center text-white mb-2">
                            <div class="widget-img widget-img-xs rounded bg-inverse mr-2 width-40" style="background-image: url(/assets/img/flag/us.jpg)"></div>
                            <div class="d-flex w-100">
                                <div>United States</div>
                                <div class="ml-auto text-grey"><span data-animation="number" data-value="39.85">0.00</span>%</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center text-white mb-2">
                            <div class="widget-img widget-img-xs rounded bg-inverse mr-2 width-40" style="background-image: url(/assets/img/flag/cn.jpg)"></div>
                            <div class="d-flex w-100">
                                <div>China</div>
                                <div class="ml-auto text-grey"><span data-animation="number" data-value="14.23">0.00</span>%</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center text-white mb-2">
                            <div class="widget-img widget-img-xs rounded bg-inverse mr-2 width-40" style="background-image: url(/assets/img/flag/de.jpg)"></div>
                            <div class="d-flex w-100">
                                <div>Germany</div>
                                <div class="ml-auto text-grey"><span data-animation="number" data-value="12.83">0.00</span>%</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center text-white mb-2">
                            <div class="widget-img widget-img-xs rounded bg-inverse mr-2 width-40" style="background-image: url(/assets/img/flag/fr.jpg)"></div>
                            <div class="d-flex w-100">
                                <div>France</div>
                                <div class="ml-auto text-grey"><span data-animation="number" data-value="11.14">0.00</span>%</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center text-white mb-0">
                            <div class="widget-img widget-img-xs rounded bg-inverse mr-2 width-40" style="background-image: url(/assets/img/flag/jp.jpg)"></div>
                            <div class="d-flex w-100">
                                <div>Japan</div>
                                <div class="ml-auto text-grey"><span data-animation="number" data-value="10.75">0.00</span>%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col-4 -->
    </div>
    <!-- end row -->
    <!-- begin row -->
    <div class="row">
        <!-- begin col-4 -->
        <div class="col-xl-4 col-lg-6">
            <!-- begin card -->
            <div class="card border-0 bg-dark-darker text-white mb-3">
                <!-- begin card-body -->
                <div class="card-body" style="background: no-repeat bottom right; background-image: url(/assets/img/svg/img-4.svg); background-size: auto 60%;">
                    <!-- begin title -->
                    <div class="mb-3 text-grey">
                        <b>SALES BY SOCIAL SOURCE</b>
                        <span class="text-grey ml-2"><i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-title="Sales by social source" data-placement="top" data-content="Total online store sales that came from a social referrer source."></i></span>
                    </div>
                    <!-- end title -->
                    <!-- begin sales -->
                    <h3 class="m-b-10">$<span data-animation="number" data-value="55547.89">0.00</span></h3>
                    <!-- end sales -->
                    <!-- begin percentage -->
                    <div class="text-grey m-b-1"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="45.76">0.00</span>% increased</div>
                    <!-- end percentage -->
                </div>
                <!-- end card-body -->
                <!-- begin widget-list -->
                <div class="widget-list widget-list-rounded inverse-mode">
                    <!-- begin widget-list-item -->
                    <a href="#" class="widget-list-item rounded-0 p-t-3">
                        <div class="widget-list-media icon">
                            <i class="fab fa-apple bg-indigo text-white"></i>
                        </div>
                        <div class="widget-list-content">
                            <div class="widget-list-title">Apple Store</div>
                        </div>
                        <div class="widget-list-action text-nowrap text-grey">
                            $<span data-animation="number" data-value="34840.17">0.00</span>
                        </div>
                    </a>
                    <!-- end widget-list-item -->
                    <!-- begin widget-list-item -->
                    <a href="#" class="widget-list-item">
                        <div class="widget-list-media icon">
                            <i class="fab fa-facebook-f bg-blue text-white"></i>
                        </div>
                        <div class="widget-list-content">
                            <div class="widget-list-title">Facebook</div>
                        </div>
                        <div class="widget-list-action text-nowrap text-grey">
                            $<span data-animation="number" data-value="12502.67">0.00</span>
                        </div>
                    </a>
                    <!-- end widget-list-item -->
                    <!-- begin widget-list-item -->
                    <a href="#" class="widget-list-item">
                        <div class="widget-list-media icon">
                            <i class="fab fa-twitter bg-aqua text-white"></i>
                        </div>
                        <div class="widget-list-content">
                            <div class="widget-list-title">Twitter</div>
                        </div>
                        <div class="widget-list-action text-nowrap text-grey">
                            $<span data-animation="number" data-value="4799.20">0.00</span>
                        </div>
                    </a>
                    <!-- end widget-list-item -->
                    <!-- begin widget-list-item -->
                    <a href="#" class="widget-list-item">
                        <div class="widget-list-media icon">
                            <i class="fab fa-google bg-red text-white"></i>
                        </div>
                        <div class="widget-list-content">
                            <div class="widget-list-title">Google Adwords</div>
                        </div>
                        <div class="widget-list-action text-nowrap text-grey">
                            $<span data-animation="number" data-value="3405.85">0.00</span>
                        </div>
                    </a>
                    <!-- end widget-list-item -->
                    <!-- begin widget-list-item -->
                    <a href="#" class="widget-list-item p-b-3">
                        <div class="widget-list-media icon">
                            <i class="fab fa-instagram bg-pink text-white"></i>
                        </div>
                        <div class="widget-list-content">
                            <div class="widget-list-title">Instagram</div>
                        </div>
                        <div class="widget-list-action text-nowrap text-grey">
                            $<span data-animation="number" data-value="0.00">0.00</span>
                        </div>
                    </a>
                    <!-- end widget-list-item -->
                </div>
                <!-- end widget-list -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col-4 -->
        <!-- end col-4 -->
        <!-- begin col-4 -->
        <div class="col-xl-4 col-lg-6">
            <!-- begin card -->
            <div class="card border-0 bg-dark text-white mb-3">
                <!-- begin card-body -->
                <div class="card-body">
                    <!-- begin title -->
                    <div class="mb-3 text-grey">
                        <b>TOP PRODUCTS BY UNITS SOLD</b>
                        <span class="ml-2"><i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-title="Top products with units sold" data-placement="top" data-content="Products with the most individual units sold. Includes orders from all sales channels."></i></span>
                    </div>
                    <!-- end title -->
                    <!-- begin product -->
                    <div class="d-flex align-items-center m-b-15">
                        <div class="widget-img rounded-lg width-30 m-r-10 bg-white p-3">
                            <div class="h-100 w-100" style="background: url(/assets/img/product/product-8.jpg) center no-repeat; background-size: auto 100%;"></div>
                        </div>
                        <div class="text-truncate">
                            <div>Apple iPhone XR (2019)</div>
                            <div class="text-grey">$799.00</div>
                        </div>
                        <div class="ml-auto text-center">
                            <div class="f-s-13"><span data-animation="number" data-value="195">0</span></div>
                            <div class="text-grey f-s-10">sold</div>
                        </div>
                    </div>
                    <!-- end product -->
                    <!-- begin product -->
                    <div class="d-flex align-items-center m-b-15">
                        <div class="widget-img rounded-lg width-30 m-r-10 bg-white p-3">
                            <div class="h-100 w-100" style="background: url(/assets/img/product/product-9.jpg) center no-repeat; background-size: auto 100%;"></div>
                        </div>
                        <div class="text-truncate">
                            <div>Apple iPhone XS (2019)</div>
                            <div class="text-grey">$1,199.00</div>
                        </div>
                        <div class="ml-auto text-center">
                            <div class="f-s-13"><span data-animation="number" data-value="185">0</span></div>
                            <div class="text-grey f-s-10">sold</div>
                        </div>
                    </div>
                    <!-- end product -->
                    <!-- begin product -->
                    <div class="d-flex align-items-center m-b-15">
                        <div class="widget-img rounded-lg width-30 m-r-10 bg-white p-3">
                            <div class="h-100 w-100" style="background: url(/assets/img/product/product-10.jpg) center no-repeat; background-size: auto 100%;"></div>
                        </div>
                        <div class="text-truncate">
                            <div>Apple iPhone XS Max (2019)</div>
                            <div class="text-grey">$3,399</div>
                        </div>
                        <div class="ml-auto text-center">
                            <div class="f-s-13"><span data-animation="number" data-value="129">0</span></div>
                            <div class="text-grey f-s-10">sold</div>
                        </div>
                    </div>
                    <!-- end product -->
                    <!-- begin product -->
                    <div class="d-flex align-items-center m-b-15">
                        <div class="widget-img rounded-lg width-30 m-r-10 bg-white p-3">
                            <div class="h-100 w-100" style="background: url(/assets/img/product/product-11.jpg) center no-repeat; background-size: auto 100%;"></div>
                        </div>
                        <div class="text-truncate">
                            <div>Huawei Y5 (2019)</div>
                            <div class="text-grey">$99.00</div>
                        </div>
                        <div class="ml-auto text-center">
                            <div class="f-s-13"><span data-animation="number" data-value="96">0</span></div>
                            <div class="text-grey f-s-10">sold</div>
                        </div>
                    </div>
                    <!-- end product -->
                    <!-- begin product -->
                    <div class="d-flex align-items-center">
                        <div class="widget-img rounded-lg width-30 m-r-10 bg-white p-3">
                            <div class="h-100 w-100" style="background: url(/assets/img/product/product-12.jpg) center no-repeat; background-size: auto 100%;"></div>
                        </div>
                        <div class="text-truncate">
                            <div>Huawei Nova 4 (2019)</div>
                            <div class="text-grey">$499.00</div>
                        </div>
                        <div class="ml-auto text-center">
                            <div class="f-s-13"><span data-animation="number" data-value="55">0</span></div>
                            <div class="text-grey f-s-10">sold</div>
                        </div>
                    </div>
                    <!-- end product -->
                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col-4 -->
        <!-- begin col-4 -->
        <div class="col-xl-4 col-lg-6">
            <!-- begin card -->
            <div class="card border-0 bg-dark text-white mb-3">
                <!-- begin card-body -->
                <div class="card-body">
                    <!-- begin title -->
                    <div class="mb-3 text-grey">
                        <b>MARKETING CAMPAIGN</b>
                        <span class="ml-2"><i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-title="Marketing Campaign" data-placement="top" data-content="Campaign that run for getting more returning customers."></i></span>
                    </div>
                    <!-- end title -->
                    <!-- begin row -->
                    <div class="row align-items-center p-b-1">
                        <!-- begin col-4 -->
                        <div class="col-4">
                            <div class="height-100 d-flex align-items-center justify-content-center">
                                <img src="/assets/img/svg/img-2.svg" class="mw-100 mh-100" />
                            </div>
                        </div>
                        <!-- end col-4 -->
                        <!-- begin col-8 -->
                        <div class="col-8">
                            <div class="m-b-2 text-truncate">Email Marketing Campaign</div>
                            <div class="text-grey m-b-2 f-s-11">Mon 12/6 - Sun 18/6</div>
                            <div class="d-flex align-items-center m-b-2">
                                <div class="flex-grow-1">
                                    <div class="progress progress-xs rounded-corner bg-white-transparent-1">
                                        <div class="progress-bar progress-bar-striped bg-indigo" data-animation="width" data-value="80%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div class="ml-2 f-s-11 width-30 text-center"><span data-animation="number" data-value="80">0</span>%</div>
                            </div>
                            <div class="text-grey f-s-11 m-b-15 text-truncate">
                                57.5% people click the email
                            </div>
                            <a href="#" class="btn btn-xs btn-indigo f-s-10 pl-2 pr-2">View campaign</a>
                        </div>
                        <!-- end col-8 -->
                    </div>
                    <!-- end row -->
                    <hr class="bg-white-transparent-2 m-t-20 m-b-20" />
                    <!-- begin row -->
                    <div class="row align-items-center">
                        <!-- begin col-4 -->
                        <div class="col-4">
                            <div class="height-100 d-flex align-items-center justify-content-center">
                                <img src="/assets/img/svg/img-3.svg" class="mw-100 mh-100" />
                            </div>
                        </div>
                        <!-- end col-4 -->
                        <!-- begin col-8 -->
                        <div class="col-8">
                            <div class="m-b-2 text-truncate">Facebook Marketing Campaign</div>
                            <div class="text-grey m-b-2 f-s-11">Sat 10/6 - Sun 18/6</div>
                            <div class="d-flex align-items-center m-b-2">
                                <div class="flex-grow-1">
                                    <div class="progress progress-xs rounded-corner bg-white-transparent-1">
                                        <div class="progress-bar progress-bar-striped bg-warning" data-animation="width" data-value="60%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div class="ml-2 f-s-11 width-30 text-center"><span data-animation="number" data-value="60">0</span>%</div>
                            </div>
                            <div class="text-grey f-s-11 m-b-15 text-truncate">
                                +124k visitors from facebook
                            </div>
                            <a href="#" class="btn btn-xs btn-warning f-s-10 pl-2 pr-2">View campaign</a>
                        </div>
                        <!-- end col-8 -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col-4 -->
    </div>
    <!-- end row -->
@endsection


@push('scripts')
    assets
    <script src="{{asset('/assets/plugins/d3/d3.min.js')}}"></script>
    <script src="{{asset('/assets/plugins/nvd3/build/nv.d3.js')}}"></script>
    <script src="{{asset('/assets/plugins/jvectormap-next/jquery-jvectormap.min.js')}}"></script>
    <script src="{{asset('/assets/plugins/jvectormap-next/jquery-jvectormap-world-mill.js')}}"></script>
    <script src="{{asset('/assets/plugins/apexcharts/dist/apexcharts.min.js')}}"></script>
    <script src="{{asset('/assets/plugins/moment/moment.js')}}"></script>
    <script src="{{asset('/assets/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('/assets/js/demo/dashboard-v3.js')}}"></script>
@endpush
