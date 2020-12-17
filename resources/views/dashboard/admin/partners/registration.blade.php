@extends('layouts.default')
@section('title', 'PARTNER LIST')
@section('title', 'Basic Tables')
{{--There output Contacts data --}}

@section('content')
    <form method="post" action="{{route('partners.registration')}}" class="col-xl-12">
        @csrf
        <h1>PARTNERS REGISTRATION</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-form-label">Name*:</label>
                    <input class="form-control form-control-sm height-40" type="text" name="name" value=""
                           placeholder="Name*:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Phone number 1*:</label>
                    <input class="form-control form-control-sm height-40" type="text" name="phonenumber1" value=""
                           placeholder="Phone number 1*:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Email (main)*:</label>
                    <input class="form-control form-control-sm height-40" type="text" name="email" placeholder="">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">ID:</label>
                    <input class="form-control form-control-sm height-40" type="text" name="id" placeholder="ID:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Address:</label>
                    <input class="form-control form-control-sm height-40" type="text" name="country"
                           placeholder="Address*:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">City:</label>
                    <input class="form-control form-control-sm height-40" type="text" name="country"
                           placeholder="City*:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Commercial *:</label>
                    <input class="form-control form-control-sm height-40" type="text" name="country"
                           placeholder="City*:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Phone number 2:</label>
                    <input class="form-control form-control-sm height-40" type="text" name="phone2"
                           placeholder="Surname:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Email (secondary):</label>
                    <input class="form-control form-control-sm height-40" type="text" name="Email(secondary)"
                           placeholder="Email(secondary)">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Company ID:</label>
                    <input class="form-control form-control-sm height-40" type="text" name="Email(secondary)"
                           placeholder="Email(secondary)">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Postal code:</label>
                    <input class="form-control form-control-sm height-40" type="text" name="email"
                           placeholder="Email (secondary):">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">State:</label>
                    <input class="form-control form-control-sm height-40" type="text" name="companyid" value=""
                           placeholder="Company ID:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Country*:</label>
                    <select id="country" name="country">
                        <option value="volvo">England</option>
                        <option value="saab">Armenia</option>
                        <option value="mercedes">Algeria</option>
                    </select>
                    <input type="submit" value="Submit">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Commercial *:</label>
                    <select id="country" name="country">
                        <option value="david_castella">Maria Gracia</option>
                        <option value="david_castella">----</option>
                        <option value="maria_gracia">Rikcy Boards</option>
                        <option value="mercedes">Carlo Del Bo</option>
                    </select>
                    <input type="submit" value="Submit">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Native language *:</label>
                    <select id="country" name="country">
                        <option value="david_castella">Maria Gracia</option>
                        <option value="david_castella">----</option>
                        <option value="maria_gracia">Rikcy Boards</option>
                        <option value="mercedes">Carlo Del Bo</option>
                    </select>
                    <input type="submit" value="Submit">
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group row">
                    <br>
                    <div class="col-md-12">
                        <label class="col-form-label col-md-2">Case description made by the client:</label>
                        <textarea class="form-control" rows="6" placeholder="Case description made by the client:"
                                  name="textbox_type_1">
                    </textarea>
                    </div>
                    <div class="col-md-12">
                        <label class="col-form-label col-md-2">Info for the manager:</label>
                        <textarea class="form-control" rows="6" placeholder="Info for the manager:"
                                  name="textbox_type_2"></textarea>
                    </div>
                    <div class="col-md-12">
                        <label class="col-form-label col-md-2">Info for the commercial:</label>
                        <textarea class="form-control" rows="6" placeholder="Info for the commercial:"
                                  name="textbox_type_3"></textarea>
                    </div>
                </div>
                <br>
            </div>
        </div>
        <div class="row -align-right">
            <button type="submit" class="form-control btn btn-green width-250">PARTNER REGISTRATION</button>
        </div>
    </form>
@endsection

@push('scripts')
    <script src="{{asset('/assets/plugins/jquery-migrate/dist/jquery-migrate.js')}}"></script>
    <script src="{{asset('/assets/plugins/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('/assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('/assets/js/demo/table-manage-default.demo.js')}}"></script>
    <script src="{{asset('assets/plugins/summernote/dist/summernote.min.js')}}"></script>
    <script src="{{asset('assets/js/demo/form-summernote.demo.js')}}"></script>
@endpush


