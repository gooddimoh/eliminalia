<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js')}}"></script>

@extends('layouts.default')

@section('title', 'CONTACT REGISTRATION')
{{--There output Contacts data --}}

@section('content')
    <form method="POST" class="col-md-12" action="{{route('timeline.create')}}">
        @csrf
        {{--        <h1>Contact Data {{$user->id}}</h1>--}}
        {{--        {{if complite add class complete yellow red }}--}}
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
                            <a class="nav-link disabled" href="#">
                                <div class="nav-no">2</div>
                                <div class="nav-text">Active step</div>
                                <div class="nav-text">TRACKING</div>
                            </a>
                        </div>
                        <div class="nav-item col">
                            <a class="nav-link disabled" href="#">
                                <div class="nav-no">3</div>
                                <div class="nav-text">Last step</div>
                                <div class="nav-text">DOCUMENTATION SENDED</div>
                            </a>
                        </div>
                        <div class="nav-item col">
                            <a class="nav-link disabled" href="#">
                                <div class="nav-no">4</div>
                                <div class="nav-text">Last step</div>
                                <div class="nav-text">SIGNED</div>
                            </a>
                        </div>
                        <div class="nav-item col">
                            <a class="nav-link disabled" href="#">
                                <div class="nav-no">5</div>
                                <div class="nav-text">Last step</div>
                                <div class="nav-text">DISCARDED</div>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row form-group">
                    <div class="col-md-6">
                        <div class="form-group custom-control custom-switch mb-1 m-10 flex-align-right">
                            <input type="checkbox" class="custom-control-input" id="physical" name="physical" value="physical">
                            <label class="custom-control-label m-r-40" for="physical">Physical Person</label>
                            <input type="checkbox" class="custom-control-input" id="company" name="company" value="company">
                            <label class="custom-control-label m-r-40" for="company">Company</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="form-group custom-control custom-switch mb-1 m-10 flex-align-right">
                                <label class="col-form-label">Native language*:</label>
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
                            <div class="form-group custom-control custom-switch mb-1 m-10 flex-align-right">
                                <label class="col-form-label">Commercial*:&nbsp;</label>
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
            </div>
            <div class="col-md-6">
                <form id="physical_form" action="physical" class="physical">
                    <h2>Physical Form</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="row col-md-4">
                                    <label class="col-form-label">Name*:</label>
                                    <input class="form-control form-control-sm height-40" type="text" name="name">
                                </div>
                                <div class="row col-md-4">
                                    <label class="col-form-label">Surname*:1</label>
                                    <input class="form-control form-control-sm height-40" type="text" name="surename1">
                                </div>
                                <div class="row col-md-4">
                                    <label class="col-form-label">Surname*:2</label>
                                    <input class="form-control form-control-sm height-40" type="text" name="surename2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="row col-md-4">
                                    <label class="col-form-label">Phone*:</label>
                                    <input class="form-control form-control-sm height-40" type="text" name="phonenumber1" value="">
                                </div>
                                <div class="row col-md-4">
                                    <label class="col-form-label">Email*:</label>
                                    <input class="form-control form-control-sm height-40" type="text" name="email" value="">
                                </div>
                                <div class="row col-md-4">
                                    <label class="col-form-label">Email Confirmation*:</label>
                                    <input class="form-control form-control-sm height-40" type="text" name="emailconfirmate" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12" style="margin:0; padding:0;">
                            <div class="row" style="margin:0">
                                <div class="col-md-7">
                                    <label class="col-form-label">Address:</label>
                                    <input class="form-control form-control-sm height-40" type="text" name="Address:" value="">
                                </div>
                                <div class="col-md-4">
                                    <label class="col-form-label">State*:</label>
                                    <input class="form-control form-control-sm height-40" type="text" name="State" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12" style="margin:0; padding:0;">
                            <div class="row" style="margin:0">
                                <div class="col-md-4">
                                    <label class="col-form-label">City:</label>
                                    <input class="form-control form-control-sm height-40" type="text" name="Address:" value="">
                                </div>
                                <div class="col-md-4">
                                    <label class="col-form-label">Postal Code*:</label>
                                    <input class="form-control form-control-sm height-40" type="text" name="State" value="">
                                </div>
                                <div class="col-md-3">
                                    <label class="col-form-label">Country*:</label>
                                    <input class="form-control form-control-sm height-40" type="text" name="State" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <form id="company_form" action="company" class="company">
                    <h2>Company Form</h2>
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
                        <br/>
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
                        <div class="form-group row col-md-12">
                            <div class="col-md-3">
                                <label class="col-form-label">Date Company:</label>
                                <input class="form-control form-control-sm height-40" type="text" name="company_name">
                            </div>
                            <div class="col-md-3">
                                <label class="col-form-label">Ficsal Code:</label>
                                <input class="form-control form-control-sm height-40" type="text" name="ficsal_code">
                            </div>
                            <div class="col-md-3">
                                <label class="col-form-label">Ficsal Code:</label>
                                <input class="form-control form-control-sm height-40" type="text" name="address">
                            </div>
                            <div class="col-md-3">
                                <label class="col-form-label">Ficsal Code:</label>
                                <input class="form-control form-control-sm height-40" type="text" name="state">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12 row">
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
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12 row">
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
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12 row">
                            <div class="col-md-4">
                                <label class="col-form-label">CONTACT_PERSON:</label>
                                <input class="form-control form-control-sm height-40" type="text" name="contact_person">
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label">EMAIL_CONTACT:</label>
                                <input class="form-control form-control-sm height-40" type="text" name="email_contact">
                            </div>
                        </div>
                    </div>
                </form>
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
                            <div class="timeline-header">
                                <span class="username">
                                    <a href="javascript:;">
                                        <div class="row row-space-10">
                                            <div class="row">
                                             <label class="col-lg-4">Calls</label>
                                            </div>
                                           <div class="form-group row">
                                                <div class="col-lg-8">

                                                 </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="row row-space-10">
                                                    <div class="col-xs-6 mb-2 mb-sm-0">
                                                        <input type="text" class="form-control" id="datetimepicker3" placeholder="Min Date">
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <input type="text" class="form-control" id="datetimepicker4" placeholder="Max Date">
                                                    </div>
                                                </div>
                                            </div>
                                       </div>
                                    </a>
                                    <small></small>
                                </span>
                            </div>
                            <div class="timeline-comment-box">
                                <div class="input">
                                    <div class="input-group">
                                        <input type="text" class="form-control rounded-corner" placeholder="Write a comment...">
                                        <span class="input-group-btn p-l-10">
                                            <button class="btn btn-primary f-s-12 rounded-corner" type="submit">Send To Time Line</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
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
                    <textarea class="form-control" rows="10" name="Keywords" value="keyword1;keyword2;keyword3;keyword4;" placeholder="keyword1;keyword2;keyword3;keyword4;"></textarea>
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
                    <input type="checkbox" id="cssCheckbox1"/>
                    <label for="cssCheckbox1">Checkbox1</label>
                </div>
            </div>
            <div class="col-md-12">
                <div class="checkbox checkbox-css">
                    <input type="checkbox" id="cssCheckbox2"/>
                    <label for="cssCheckbox2">Checkbox2</label>
                </div>
            </div>
            <div class="col-md-12">
                <div class="checkbox checkbox-css">
                    <input type="checkbox modal show hide" id="fileupload"/>
                    <label for="cssCheckbox3">Checkbox3</label>
                </div>
            </div>
            <div class="col-md-12">
                <h5>Show Hide Modal for File upload</h5>
                <div class="checkbox checkbox-css">
                    <input type="checkbox modal show hide" id="fileupload"/>
                    <label for="cssCheckbox3">Checkbox3</label>
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
        <ul class="nav nav-pills mb-2">
            <li class="nav-item">
                <a href="#nav-pills-tab-1" data-toggle="tab" class="nav-link active">
                    <span class="d-sm-none">Pills 1</span>
                    <span class="d-sm-block d-none">Pills Tab 1</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#nav-pills-tab-2" data-toggle="tab" class="nav-link">
                    <span class="d-sm-none">Pills 2</span>
                    <span class="d-sm-block d-none">Pills Tab 2</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#nav-pills-tab-3" data-toggle="tab" class="nav-link">
                    <span class="d-sm-none">Pills 3</span>
                    <span class="d-sm-block d-none">Pills Tab 3</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#nav-pills-tab-4" data-toggle="tab" class="nav-link">
                    <span class="d-sm-none">Pills 4</span>
                    <span class="d-sm-block d-none">Pills Tab 4</span>
                </a>
            </li>
        </ul>
        <div class="text-box-for-download-links">
            <p>FILE FORM UPLOAD</p>
            <div id="dropzone">
                <form action="/upload" class="dropzone needsclick" id="demo-upload">
                    <div class="dz-message needsclick">
                        Drop files <b>here</b> or <b>click</b> to upload.<br/>
                        <span class="dz-note needsclick">
                        (This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)
                      </span>
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

    /* action type complete */
    /* action type orange */
    /* action type black dont */
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
</script>