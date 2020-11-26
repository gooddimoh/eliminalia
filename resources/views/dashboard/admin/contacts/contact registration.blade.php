@extends('layouts.default')

@section('title', 'Basic Tables')
{{--There output Contacts data --}}
@section('content')
    <form method="post" action="{{route('contacts')}}" class="col-xl-12">
        @csrf
        <h1>CONTACT REGISTRATION</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-form-label">Name*:</label>
                    <input class="form-control form-control-sm" type="text" name="name" value="" placeholder="Name*:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Phone number 1*:</label>
                    <input class="form-control form-control-sm" type="text" name="phonenumber1" value=""
                           placeholder="Phone number 1*:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Email (main)*:</label>
                    <input class="form-control form-control-sm" type="text" name="email" placeholder="">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">ID:</label>
                    <input class="form-control form-control-sm" type="text" name="id" placeholder="ID:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Address:</label>
                    <input class="form-control form-control-sm" type="text" name="address" placeholder="Address">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">City:</label>
                    <input class="form-control form-control-sm" type="text" name="city" placeholder="City:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Country*:</label>
                    <input class="form-control form-control-sm" type="text" name="country" placeholder="Country*:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Commercial*:</label>
                    <input class="form-control form-control-sm" type="text" name="commercial"
                           placeholder="Commercial*:">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-form-label">Surname:</label>
                    <input class="form-control form-control-sm" type="text" name="surname" placeholder="Surname:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Phone number 2:</label>
                    <input class="form-control form-control-sm" type="text" name="phonenumber2"
                           placeholder="Phone number 2:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Email (secondary):</label>
                    <input class="form-control form-control-sm" type="text" name="email"
                           placeholder="Email (secondary):">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Company ID:</label>
                    <input class="form-control form-control-sm" type="text" name="companyid" value=""
                           placeholder="Company ID:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Postal code:</label>
                    <input class="form-control form-control-sm" type="text" name="postalcode"
                           placeholder="Postal code:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">State:</label>
                    <input class="form-control form-control-sm" type="text" name="state" placeholder="State:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Native language*:</label>
                    <select class="form-control form-control-sm" name="nativelanguage">
                        <option value="0">Native languge*:</option>
                        <option value="1">SPANISH</option>
                        <option value="2">ENGLISH</option>
                        <option value="3" selected>selected lang</option>
                        <option value="4">FRENCH</option>
                        <option value="5">DEUTSCH</option>
                        <option value="6">ITALIAN</option>
                    </select>
                </div>
                <div class="form-group row">
                    <label class="col-form-label ">Personal/Company:</label>
                    <select class="form-control form-control-sm" name="personalcompany">
                        <option value="">PERSONAL</option>
                        <option value="">COMPANY</option>
                    </select>
                </div>
                <label class="col-form-label form-control-sm"></label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group row width-150">
                    <label class="col-form-label">BUDGET:</label>
                    <input class="form-control form-control-sm width-80" type="number" name="budget"
                           placeholder="CURRENCY" value="2">
                </div>
                <div class="form-group row width-150">
                    <label class="col-form-label">Payment method:</label>
                    <select class="form-control form-control-sm" name="paymentmethod">
                        <option value="0">Wire transfer</option>
                        <option value="1">Check</option>
                        <option value="2">Specie</option>
                        <option value="3">Other</option>
                    </select>
                </div>
                <div class="form-group row">
                    <br>
                    <label class="col-form-label col-md-2">Case description made by the client:</label>
                    <textarea class="form-control" rows="6" placeholder="Case description made by the client:" name="textbox_type_1">
                        Case description made by the client:
                    </textarea>
                    <label class="col-form-label col-md-2">Info for the manager:</label>
                    <textarea class="form-control" rows="6" placeholder="Info for the manager:" name="textbox_type_2"></textarea>
                    <label class="col-form-label col-md-2">Info for the commercial:</label>
                    <textarea class="form-control" rows="6" placeholder="Info for the commercial:" name="textbox_type_3"></textarea>
                </div>
                <br>
                <div class="inputs" style="">
                    <div class="form-group row">
                        <input type="checkbox" name="input_type_0" value="0">
                        <label>&nbsp;&nbsp; FIRST CONTACT DONE</label>
                    </div>
                    <div class="form-group row">
                        <input type="checkbox" name="input_type_1" value="1">
                        <label>&nbsp;&nbsp;TRACKING DONE</label>
                    </div>
                    <div class="form-group row">
                        <input type="checkbox" name="input_type_2" value="2">
                        <label>&nbsp;&nbsp;BUDGET DONE</label>
                    </div>
                    <div class="form-group row">
                        <input type="checkbox" name="input_type_3" value="3">
                        <label>&nbsp;&nbsp;DOCUMENTATION SENDED</label>
                    </div>
                    <div class="form-group row">
                        <input type="checkbox" name="input_type_4" value="4">
                        <label>&nbsp;&nbsp;SIGNED</label>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <input type="checkbox" value="0" name="input_type_0">
                    <label>&nbsp;&nbsp; FIRST CONTACT DONE </label>
                </div>
                <div class="form-group row">
                    <input type="checkbox" value="1" name="input_type_1">
                    <label>&nbsp;&nbsp; TRACKING DONE </label>
                </div>
                <div class="form-group row">
                    <input type="checkbox" value="2" name="input_type_2">
                    <label>&nbsp;&nbsp; BUDGET DONE </label>
                </div>
                <div class="form-group row">
                    <input type="checkbox" value="3" name="input_type_3">
                    <label>&nbsp;&nbsp; DOCUMENTATION SENDED </label>
                </div>
                <div class="form-group row">
                    <input type="checkbox" value="4" name="input_type_4">
                    <label>&nbsp;&nbsp; SIGNED </label>
                </div>
            </div>
        </div>
        <div class="row -align-right">
            <button type="submit" class="form-control btn btn-green">CONTACT REGISTER</button>
        </div>
    </form>
@endsection
<style type="text/css">
    .form-group {
        margin-bottom: 0px !important;
        margin-right: 10px !important;
    }
</style>
@push('scripts')
    <script src="{{'assets/plugins/highlight.js/highlight.min.js'}}"></script>
    <script src="{{'assets/js/demo/render.highlight.js'}}"></script>
@endpush
