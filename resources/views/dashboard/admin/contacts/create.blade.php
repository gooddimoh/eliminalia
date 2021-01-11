<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js')}}"></script>

@extends('layouts.default')

@section('title', 'CONTACT REGISTRATION')
{{--There output Contacts data --}}

@section('content')
    <form method="POST" class="col-md-12" action="{{route('timeline.create')}}">
        @csrf

        {{--        <h1>Contact Data {{$user->id}}</h1>--}}
        {{--        {{  if complite add class complete yellow red }}--}}
        {{--      action type complete --}}
        {{--      action type yellow --}}
        {{--      action type black dont   --}}

        <div class="row">
            <div class="col-md-12">
                <div class="steps">
                    <nav class="nav nav-wizards-1 mb-2">
                        <div class="nav-item col">
                            <a class="nav-link completed" href="#">
                                <div class="nav-no">1</div>
                                <div class="nav-text">Completed step</div>
                                <div class="nav-text">FIRST CONTACT</div>
                            </a>
                        </div>
                        <div class="nav-item col">
                            <a class="nav-link yellow disabled" href="#">
                                <div class="nav-no">2</div>
                                <div class="nav-text text-black">Active step</div>
                                <div class="nav-text text-black">TRACKING</div>
                            </a>
                        </div>
                        <div class="nav-item col">
                            <a class="nav-link black disabled" href="#">
                                <div class="nav-no">3</div>
                                <div class="nav-text text-black">Last step</div>
                                <div class="nav-text text-black">DOCUMENTATION SENDED</div>
                            </a>
                        </div>
                        <div class="nav-item col">
                            <a class="nav-link disabled" href="#">
                                <div class="nav-no">4</div>
                                <div class="nav-text text-black">Last step</div>
                                <div class="nav-text text-black">SIGNED</div>
                            </a>
                        </div>
                        <div class="nav-item col">
                            <a class="nav-link disabled" href="#">
                                <div class="nav-no">5</div>
                                <div class="nav-text text-black">Last step</div>
                                <div class="nav-text text-black">DISCARDED</div>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container row col-md-12">
                <div class="row col-md-4 form-group custom-control custom-switch mb-1 m-10 flex-align-right">
                    <input type="checkbox" class="m-l-20 custom-control-input" id="physical" name="physical" value="physical">
                    <label class="custom-control-label m-l-40 m-r-40" for="physical">Physical Person</label>
                    <input type="checkbox" class="custom-control-input" id="company" name="company" value="company">
                    <label class="custom-control-label m-r-40" for="company">Company</label>
                </div>
                <div class="langs">
                    <div class="input-group">
                        <span><label class="col-form-label">Native language*:&nbsp;</label></span>
                        <div class="form-group custom-control custom-switch mb-1 m-10 flex-align-right">
                            <select class="form-control form-control-sm float-right" name="nativelanguage">
                                <option value="0">Native languge*:(ES)&nbsp;</option>
                                <option value="1" selected>SPANISH</option>
                                <option value="2">ENGLISH</option>
                                <option value="3">ENGLISH</option>
                                <option value="4">FRENCH</option>
                                <option value="5">DEUTSCH</option>
                                <option value="6">ITALIAN</option>
                            </select>
                        </div>
                        <span><label class="col-form-label">Commercial*:&nbsp;</label></span>
                        <div class="form-group custom-control custom-switch mb-1 m-10 flex-align-right">
                            <select class="form-control form-control-sm float-right" name="paymentmethod">
                                <option value="Aruba">David Castella</option>
                                <option value="Bahrain">----</option>
                                <option value="Bahrain">Maria Gracia</option>
                                <option value="Bahrain">Ricky Bordas</option>
                                <option value="Bahrain">Antonio Paladino</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="forms">
                    <form id="physical_form" action="physical" class="physical">
                        <h2>PHYSICAL</h2>
                        <div class="row form-group col-md-12">
                            <div class="col-md-4">
                                <label class="col-form-label">Name*:</label>
                                <input class="form-control form-control-sm height-40" type="text" name="name">
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label">Surname*:1</label>
                                <input class="form-control form-control-sm height-40" type="text" name="surename1">
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label">Surname*:2</label>
                                <input class="form-control form-control-sm height-40" type="text" name="surename2">
                            </div>
                        </div>
                        <div class="row form-group col-md-12">
                            <div class="col-md-4">
                                <label class="col-form-label">Phone*:</label>
                                <input class="form-control form-control-sm height-40" type="text" name="phonenumber1" value="">
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label">Email*:</label>
                                <input class="form-control form-control-sm height-40" type="text" name="email" value="">
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label">Email Confirmation*:</label>
                                <input class="form-control form-control-sm height-40" type="text" name="emailconfirmate" value="">
                            </div>
                        </div>
                        <div class="row form-group col-md-12">
                            <div class="col-md-7">
                                <label class="col-form-label">Address:</label>
                                <input class="form-control form-control-sm height-40" type="text" name="address">
                            </div>
                            <div class="col-md-5">
                                <label class="col-form-label">State*:</label>
                                <input class="form-control form-control-sm height-40" type="text" name="State">
                            </div>
                        </div>
                        <div class="row form-group col-md-12">
                            <div class="col-md-4">
                                <label class="col-form-label">City:</label>
                                <input class="form-control form-control-sm height-40" style="margin: 0px!important; padding: 0px;" type="text" name="address" value="">
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label">Postal Code*:</label>
                                <input class="form-control form-control-sm height-40" style="margin: 0px!important; padding: 0px;" type="text" name="postalcode" value="">
                            </div>
                            <div class="col-md-3">
                                <label class="col-form-label">Country*:</label>
                                <input class="form-control form-control-sm height-40" style="margin: 0px!important; padding: 0px;" type="text" name="country" value="">
                            </div>
                        </div>
                    </form>
                    <br>
                    <br>
                    <form id="company_form" action="company" class="company">
                        <h2>COMPANY</h2>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="col-form-label">Company Name:</label>
                                <input class="form-control form-control-sm height-40" type="text" name="company_name">
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label">Ficsal Code:</label>
                                <input class="form-control form-control-sm height-40" type="text" name="ficsal_code">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="col-form-label">City:</label>
                                <input class="form-control form-control-sm height-40" type="text" name="city">
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label">Postal Code:</label>
                                <input class="form-control form-control-sm height-40" type="text" name="postal_code">
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label">Country:</label>
                                <select class="form-control height-40" name="country">
                                    <option value="Ukraine">Spain</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Egypt">Egypt</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="col-form-label">Date Company Name:</label>
                                <input class="form-control form-control-sm height-40" type="text" name="company_name">
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label">Ficsal Code:</label>
                                <input class="form-control form-control-sm height-40" type="text" name="ficsal_code">
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label">Address:</label>
                                <input class="form-control form-control-sm height-40" type="text" name="address">
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label">State:</label>
                                <input class="form-control form-control-sm height-40" type="text" name="state">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="col-form-label">City Code:</label>
                                <input class="form-control form-control-sm height-40 m-t-10" type="text" name="city">
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label">Postal Code:</label>
                                <input class="form-control form-control-sm height-40 m-t-10" type="text" name="postal_code">
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label">Country:</label>
                                <select class="form-control height-40 m-t-10" name="country">
                                    <option value="Ukraine">Spain</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Egypt">Egypt</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="col-form-label">PHONE 1:</label>
                                <input class="form-control form-control-sm height-40" type="text" name="company_phone" value="">
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label">EMAIL:</label>
                                <input class="form-control form-control-sm height-40" type="text" name="company_email" value="">
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label">EMAIL CONFIRMATE:</label>
                                <input class="form-control form-control-sm height-40" type="text" name="company_email_confirmate" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label class="col-form-label">CONTACT_PERSON:</label>
                                <input class="form-control form-control-sm height-40" type="text" name="contact_person">
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label">EMAIL_CONTACT:</label>
                                <input class="form-control form-control-sm height-40" type="text" name="email_contact">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <h1 class="m-l-40">Timeline</h1>
                <ul class="timeline">
                    <li>
                        <div class="timeline-time">
                            <span class="date">today</span>
                            <span class="time">04:20</span>
                        </div>
                        <div class="timeline-icon">
                            <a href="javascript:;">&nbsp;</a>
                        </div>
                        <div class="timeline-body">
                            <form action="{{route("fileupload")}}" class="row col-md-12 input-group" type="post">
                                <div class="timeline-header">
                                <span class="username">
                                    <a href="javascript:;">
                                        <div class="row row-space-10">
                                           <div class="form-group row">
                                                <div class="col-lg-8"> </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row row-space-12">
                                                   <span class="col-md-2">Calls</span>
                                                    <div class="col-md-4">
                                                        <input type="date" class="form-control" name="date" id="input_type_date">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="time" class="form-control" name="time" id="input_type_date">
                                                    </div>
                                                </div>
                                            </div>
                                       </div>
                                    </a>
                                </span>
                                </div>
                                <div class="timeline-comment-box width-600">
                                    <div class="input">
                                        <div class="input-group">
                                            <input type="text" class="col-md-8 form-control m-l-4 p-r-4 rounded-corner" placeholder="Write a comment..." name="text" value="Write a comment...">
                                            <button class="col-md-4 btn btn-primary input-group-btn m-l-4 p-r-4 f-s-12 rounded-corner" type="submit">
                                                Send To Time Line
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
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
            </div>
        </div>
        <div class="row">
            <div class="form-group row width-300 m-10 m-t-10">
                <div class="col-md-4">
                    <label class="col-form-label float-left">Budget*:</label>
                    <input type="number" class="form-control" value="0" name="input_type_0">
                    <select class="form-control float-right" name="budget">
                        <option value="USD">USD</option>
                        <option value="EURO">EURO</option>
                    </select>
                </div>
            </div>
            <div class="form-group row width-300 m-t-10">
                <div class="col-md-4">
                    <label class="col-form-label float-left">Payment*:</label>
                    <select class="form-control float-right width-100" name="payment">
                        <option value="0">Wire transfer</option>
                        <option value="1">Check</option>
                        <option value="2">Specie</option>
                        <option value="3">Other</option>
                    </select>
                </div>
            </div>
            <div class="row col-md-12">
                <br>
                <div class="col-md-4">
                    <label class="col-form-label">Case1</label>
                    <textarea class="form-control" rows="10" placeholder="Case1:" name="Case1"></textarea>
                </div>
                <div class="col-md-4">
                    <label class="col-form-label">Keywords</label>
                    <textarea class="form-control" rows="10" name="Keywords" value="keyword1;keyword2;keyword3;keyword4;keyword5;" placeholder="keyword1;keyword2;keyword3;keyword4;"></textarea>
                </div>
                <div class="col-md-4">
                    <label class="col-form-label">Searchs</label>
                    <textarea class="form-control" rows="10" placeholder="Searchs:" name="Searchs" value=""></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="checkbox checkbox-css">
                    <input type="checkbox" id="budget"/>
                    <label for="cssCheckbox1">Case</label>
                </div>
            </div>
            <div class="col-md-12">
                <div class="checkbox checkbox-css">
                    <input type="checkbox" id="payment"/>
                    <label for="cssCheckbox2">Keywords</label>
                </div>
            </div>
            <div class="col-md-12">
                <div class="checkbox checkbox-css">
                    <input type="checkbox" id="cssCheckbox3"/>
                    <label for="cssCheckbox3">Searchs</label>
                </div>
            </div>
        </div>
        <div class="row">
            <textarea class="form-control col-md-12 m-10" rows="10" placeholder="Info for the commercial:" name="info"> </textarea>
        </div>
        <div class="row">
            <div class="search"></div>
            <div class="links"></div>
        </div>
        <br>
        <div class="col-md-12">
            <div class="checkbox checkbox-css">
                <input type="checkbox" class="show-modal" onclick="showmodal('fileupload')" id="showmodal"/>
                <label for="showmodal">Show Hide Modal for File upload</label>
            </div>
        </div>
        <div class="text-box-for-download-links">
            <p>FILE FORM UPLOAD</p>
            <div id="dropzone">
                <form action="{{ route('fileupload') }}" class="dropzone needsclick" id="fileupload">
                    <div class="dz-message needsclick">
                        Drop files <b>here</b> or <b>click</b> to upload.<br/>
                        <span class="dz-note needsclick"> (This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.) </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="row align-right">
            <button type="submit" class="form-control btn btn-green width-200">CONTACT REGISTRATION</button>
        </div>
    </form>
@endsection
<style type="text/css">
    .form-group {
        margin-bottom: 0px !important;
        margin-right: 10px !important;
    }

    .flex-align-right {
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: flex-end;
        align-items: baseline;
        align-content: flex-end;
    }

    input.form-control.form-control-sm.height-40 {
        border-radius: 0px;
    }

    .row {
        padding-left: 2px;
        padding-right: 2px;
    }

    .col-md-4 {
        margin: 0 !important;
        padding: 0 !important;
    }
</style>
@push('scripts')
    <script src="{{'assets/plugins/highlight.js/highlight.min.js'}}"></script>
    <script src="{{'assets/js/demo/render.highlight.js'}}"></script>
@endpush
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js')}}"></script>
<script type="text/javascript">
    $("input#physical").click(function () {
        $("#company_form").hide();
        $("#physical_form").show();
    });
    $("input#company").click(function () {
        $("#company_form").show();
        $("#physical_form").hide();
    });

    $("#fileupload").click(function () {
        $("form#fileupload").hide();
    });

    function showmodal(action) {
        alert
        $(action).show();
    }
</script>