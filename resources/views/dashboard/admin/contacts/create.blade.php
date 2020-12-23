@extends('layouts.default')

@section('title', 'CONTACT REGISTRATION')
{{--There output Contacts data --}}

@section('content')
    <form method="POST" class="col-md-12" action="{{route('timeline.create')}}">
        @csrf
{{--        <h1>Contact Data {{$user->id}}</h1>--}}
        <div class="row">
            <div class="col-md-12">
                <div class="steps">
                    <div class="nav-wizards-container">
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
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-md-6">
                        <div class="form-group custom-control custom-switch mb-1 m-10 flex-align-right">
                            <input type="checkbox" class="custom-control-input" id="physical" name="physical" value="physical" checked>
                            <label class="custom-control-label m-r-40" for="customSwitch1" checked>Physical Person</label>
                            <input type="checkbox" class="custom-control-input" id="legal" name="legal" value="legal">
                            <label class="custom-control-label " for="customSwitch2">COMPANY Legal Person</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="col-form-label">Native language*:</label>
                                <select class="form-control" name="nativelanguage">
                                    <option value="0">Native languge*:(ES)&nbsp;</option>
                                    <option value="1" selected>SPANISH</option>
                                    <option value="2">ENGLISH</option>
                                    <option value="3">ENGLISH</option>
                                    <option value="4">FRENCH</option>
                                    <option value="5">DEUTSCH</option>
                                    <option value="6">ITALIAN</option>
                                </select>
                            </div>
                            <div class="col-md-6">
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
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <label class="col-form-label">Name*:</label>
                    <div class="form-group col-md-12">
                        <div class="form-group row">
                            <input class="form-control form-control-sm height-40 col-md-4" type="text" name="name"
                                   placeholder="NAME:">
                            <input class="form-control form-control-sm height-40 col-md-4" type="text" name="surename1"
                                   placeholder="SURNAME:1">
                            <input class="form-control form-control-sm height-40 col-md-4" type="text" name="surename2"
                                   placeholder="SURNAME:2">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label class="col-form-label">&nbsp;</label>
                    <div class="form-group col-md-12">
                        <div class="form-group row">
                            <input class="form-control form-control-sm col-md-4 height-40" type="text"
                                   name="phonenumber1" value="" placeholder="PHONE:">
                            <input class="form-control form-control-sm col-md-4 height-40" type="text" name="email"
                                   value="" placeholder="EMAIL:">
                            <input class="form-control form-control-sm col-md-4 height-40" type="text"
                                   name="emailconfirmate" value="" placeholder="EMAIL CONFIRMATION:">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label class="col-form-label">Address:</label>
                    <div class="form-group col-md-12">
                        <div class="form-group row">
                            <input class="form-control form-control-sm col-md-8 height-40 " type="text" name="address"
                                   placeholder="ADRESS: ">
                            <input class="form-control form-control-sm col-md-4 height-40 " type="text" name="state"
                                   placeholder="STATE: ">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label class="col-form-label">City:</label>
                    <div class="col-md-8">
                        <div class="form-group">
                            <input class="form-control form-control-sm col-md-4 height-40" type="text" name="city"
                                   placeholder="CITY:">
                            <input class="form-control form-control-sm col-md-4 height-40" type="text" name="postalcode"
                                   placeholder="POSTAL CODE:">
                        </div>
                    </div>
                    <br/>
                    <br/>
                    <div class="col-md-4">
                        <label class="col-form-label">Country:</label>
                        <select class="form-control float-right" name="country">
                            <option value="Ukraine">Spain</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Egypt">Egypt</option>
                        </select>
                    </div>

                </div>
                <div class="row">
                    <label class="col-form-label">DATE COMPANY:</label>
                    <div class="form-group col-md-12 row">
                        <input class="form-control form-control-sm col-md-6 height-40" type="text" name="company_name"
                               placeholder="COMPANY NAME:">
                        <input class="form-control form-control-sm col-md-6 height-40" type="text" name="ficsal_code"
                               placeholder="FICSAL CODE:">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12 row">
                        <input class="form-control form-control-sm col-md-6 height-40" type="text" name="address"
                               placeholder="ADDRESS:">
                        <input class="form-control form-control-sm col-md-6 height-40" type="text" name="state"
                               placeholder="STATE:">
                    </div>
                </div>
                <div class="form-group row">
                    <input class="form-control form-control-sm col-md-4 height-40 m-t-10" type="text" name="email"
                           placeholder="CITY:">
                    <input class="form-control form-control-sm col-md-4 height-40 m-t-10" type="text" name="postal_code"
                           placeholder="POSTAL_CODE:">
                    <select class="form-control float-right col-md-4  m-t-10" name="country">
                        <option value="Ukraine">Spain</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Egypt">Egypt</option>
                    </select>
                </div>
                <div class=" row">
                    <div class="form-group col-md-12 row">
                        <input class="form-control form-control-sm col-md-4 height-40" type="text" name="company_phone"
                               value="" placeholder="PHONE 1:">
                        <input class="form-control form-control-sm col-md-4 height-40" type="text" name="company_email"
                               value="" placeholder="EMAIL:">
                        <input class="form-control form-control-sm col-md-4 height-40" type="text"
                               name="company_email_confirmate" value=""
                               placeholder="EMAIL CONFIRMATE:">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12 row">
                        <input class="form-control form-control-sm col-md-6 height-40" type="text" name="CONTACT_PERSON"
                               placeholder="CONTACT_PERSON:">
                        <input class="form-control form-control-sm col-md-6 height-40" type="text" name="EMAIL_CONTACT"
                               placeholder="EMAIL_CONTACT:">
                    </div>
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
                            <div class="timeline-header">
                                <span class="username">
                                    <a href="javascript:;">
                                        <div class="row row-space-10">
                                            <div class="row">
                                             <label class="col-lg-4">Calls </label>
                                            </div>
                                           <div class="form-group row">
                                                <div class="col-lg-8">
                                                    <div class="row row-space-10">
                                                        <div class="col-xs-6 mb-2 mb-sm-0">
                                                            <input type="text" class="form-control" id="datetimepicker3"
                                                                   placeholder="Min Date">
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <input type="text" class="form-control" id="datetimepicker4"
                                                                   placeholder="Max Date">
                                                        </div>
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
                                        <input type="text" class="form-control rounded-corner"
                                               placeholder="Write a comment...">
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
            <div class="col-md-12">
                <div class="form-group row width-300 m-t-10">
                    <div class="col-md-4">
                        <label class="col-form-label float-left">Budget*:</label>
                    </div>
                    <div class="col-md-8">
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
                    </div>
                    <div class="col-md-8">
                        <select class="form-control float-right" name="payment">
                            <option value="0">Wire transfer</option>
                            <option value="1">Check</option>
                            <option value="2">Specie</option>
                            <option value="3">Other</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <br>
                    <label class="col-form-label">Case description made by the client:</label>
                    <div class="form-group row ">
                        <textarea class="form-control col-md-4" rows="10" placeholder="Case1:" name="Case1"></textarea>
                        <textarea class="form-control col-md-4" rows="10" name="Keywords"
                                  value="keyword1;keyword2;keyword3;keyword4;"
                                  placeholder="keyword1;keyword2;keyword3;keyword4;"></textarea>
                        <textarea class="form-control col-md-4" rows="10" placeholder="Searchs:" name="Searchs"
                                  value=""></textarea>
                    </div>
                </div>
                <div class="row">
                    <br>
                    <br>
                    <input type="checkbox">
                    1. questions if yes open tracker two textbox add links
                </div>
                <div class="row">
                    <input type="checkbox">
                    2 . questions
                </div>
                <div class="row">
                    <input type="checkbox">
                    <label class="col-form-label col-md-2 m-10">Info for the tracker:</label>
                    <textarea class="form-control m-10" rows="6" placeholder="Info for the commercial:"
                              name="info"> </textarea>
                </div>
            </div>
            <div class="row">
                <div class="search"></div>
                <div class="links"></div>
            </div>
            <br>
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
</style>
<script type="type/javascript">
    $('#customSwitch1').click(function(){ alert('hello'); });

    {{--    function costumetoggle(item){--}}
    {{--        $('customSwitch1').click(function(){ toggle(); });--}}
    {{--        $(item).click(function(){ toggle(); });--}}
    {{--    }--}}

    function costumetoggle(){
        alert("costumetoggle");
    }

    costumetoggle();


</script>

@push('scripts')
    <script src="{{'assets/plugins/highlight.js/highlight.min.js'}}"></script>
    <script src="{{'assets/js/demo/render.highlight.js'}}"></script>
@endpush
