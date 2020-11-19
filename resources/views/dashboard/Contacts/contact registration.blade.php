@extends('layouts.default')

@section('title', 'Basic Tables')
{{--There output Contacts data --}}
@section('content')
    <form method="post" action="{{route('contacts')}}" class="col-xl-12">
        @csrf
        <h4>Contact Data</h4>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-form-label">Name*</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Name*" value="">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Phone number 1*:</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Phone number 1*:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Email(main)*:</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Email (main)*:" value="">
                </div>

                <div class="form-group row">
                    <label class="col-form-label">ID:</label>
                    <input class="form-control form-control-sm" type="text" placeholder="ID:" value="">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Address:</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Address:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">City:</label>
                    <input class="form-control form-control-sm" type="text" placeholder="City:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Country*:</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Country*:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Commercial:*</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Commercial*:">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-form-label ">Surname:</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Surname:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label ">Phone number 2:</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Phone number 2:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label ">Email (secondary):</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Email (secondary):">
                </div>
                <div class="form-group row">
                    <label class="col-form-label ">Company ID:</label>
                    <input class="form-control form-control-sm" type="text" value="" placeholder="Company ID:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label ">Postal code:</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Postal code:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label ">State:</label>
                    <input class="form-control form-control-sm" type="text" placeholder="State:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Native language*:</label>
                    <select class="form-control form-control-sm">
                        <option value="">Native languge*:</option>
                        <option value="">SPANISH</option>
                        <option value="">ENGLISH</option>
                        <option value="" selected>selected lang</option>
                        <option value="">FRENCH</option>
                        <option value="">DEUTSCH</option>
                        <option value="">ITALIAN</option>
                    </select>
                </div>
                <div class="form-group row">
                    <label class="col-form-label ">Personal/Company:</label>
                    <select class="form-control form-control-sm">
                        <option value="">GENERAL</option>
                        <option value="">PERSONAL</option>
                        <option value="">BARSELONA</option>
                        <option value="">KIEV</option>
                        <option value="">CONSULTOR</option>
                    </select>
                </div>
                <label class="col-form-label form-control-sm"></label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group row width-150">
                    <label class="col-form-label">CURRENCY:</label>
                    <select class="form-control form-control-sm width-80" value="1">
                        <option>USD</option>
                        <option>EUR</option>
                    </select>
                    <label class="col-form-label">BUDGET:</label>
                    <input class="form-control form-control-sm width-80" type="number" placeholder="CURRENCY" value="2">
                </div>
                <div class="form-group row width-150">
                    <div class="form-group row flex-row align-items-center"></div>
                </div>
                <div class="form-group row width-150">
                    <label class="col-form-label">Payment method:</label>
                    <select class="form-control form-control-sm">
                        <option>Wire transfer</option>
                        <option>Check</option>
                        <option>Specie</option>
                        <option>Other</option>
                    </select>
                </div>
                <div class="form-group row ">
                    <br>
                    <label class="col-form-label col-md-2">Case description made by the client:</label>
                    <textarea class="form-control" rows="6"
                              placeholder="Case description made by the client:"> </textarea>
                    <label class="col-form-label col-md-2">Info for the manager:</label>
                    <textarea class="form-control" rows="6" placeholder="Info for the manager:"></textarea>
                    <label class="col-form-label col-md-2">Info for the commercial:</label>
                    <textarea class="form-control" rows="6" placeholder="Info for the commercial:"></textarea>
                </div>
                <br>
                <div class="inputs" style="">
                    <div class="form-group row">
                        <input type="checkbox" value="1">
                        <label>&nbsp;&nbsp;FIRST CONTACT DONE</label>
                    </div>
                    <div class="form-group row">
                        <input type="checkbox" value="2">
                        <label>&nbsp;&nbsp;TRACKING DONE</label>
                    </div>
                    <div class="form-group row">
                        <input type="checkbox">
                        <label>&nbsp;&nbsp;BUDGET DONE</label>
                    </div>
                    <div class="form-group row">
                        <input type="checkbox" value="">
                        <label>&nbsp;&nbsp;DOCUMENTATION SENDED</label>
                    </div>
                    <div class="form-group row">
                        <input type="checkbox" value="5">
                        <label>&nbsp;&nbsp;SIGNED</label>
                    </div>
                </div>
                <br>
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
