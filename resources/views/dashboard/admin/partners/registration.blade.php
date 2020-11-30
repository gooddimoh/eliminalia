@extends('layouts.default')

@section('title', 'Basic Tables')
{{--There output Contacts data --}}

@section('content')
    <form method="post" action="{{route('partners.registration')}}" class="col-xl-12">
        @csrf
        <h1>PARTNERS REGISTRATION</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group row">
                    <label class="col-form-label">Name*:</label>
                    <input class="form-control form-control-sm" type="text" name="name" value="" placeholder="Name*:">
                </div>
            </div>
            <div class="col-md-6">
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
                    <label class="col-form-label">Address:</label>
                    <input class="form-control form-control-sm" type="text" name="id" placeholder="ID:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">City:</label>
                    <input class="form-control form-control-sm" type="text" name="country" placeholder="Country*:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Country*:</label>
                    <label for="country">Choose a country:</label>
                    <select id="country" name="country">
                        <option value="volvo">England</option>
                        <option value="saab">Armenia</option>
                        <option value="mercedes">Algeria</option>
                    </select>
                    <input type="submit" value="Submit">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-form-label">Phone number 2:</label>
                    <input class="form-control form-control-sm" type="text" name="surname" placeholder="Surname:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Email (secondary):</label>
                    <input class="form-control form-control-sm" type="text" name="phonenumber2"
                           placeholder="Phone number 2:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Postal code:</label>
                    <input class="form-control form-control-sm" type="text" name="email"
                           placeholder="Email (secondary):">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">State:</label>
                    <input class="form-control form-control-sm" type="text" name="companyid" value=""
                           placeholder="Company ID:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">State:</label>
                    <input class="form-control form-control-sm" type="text" name="state" placeholder="State:">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group row">
                    <br>
                    <label class="col-form-label col-md-2">Case description made by the client:</label>
                    <textarea class="form-control" rows="6" placeholder="Case description made by the client:"
                              name="textbox_type_1">
                        Case description made by the client:
                    </textarea>
                    <label class="col-form-label col-md-2">Info for the manager:</label>
                    <textarea class="form-control" rows="6" placeholder="Info for the manager:"
                              name="textbox_type_2"></textarea>
                    <label class="col-form-label col-md-2">Info for the commercial:</label>
                    <textarea class="form-control" rows="6" placeholder="Info for the commercial:"
                              name="textbox_type_3"></textarea>
                </div>
                <br>
            </div>
        </div>
        <div class="row -align-right">
            <button type="submit" class="form-control btn btn-green">PARTNER REGISTRATION</button>
        </div>
    </form>
@endsection
<script>
    $("search").change(function () {
        let data = "data";
        var request = $.ajax({
            url: "{{route("usermanagementnew")}}",
            method: "post",
            data: {view: 'view'},
            dataType: "html"
        });
        request.done(function (view) {
            $("#html").html(view);
        });
        request.fail(function (jqXHR, textStatus) {
            alert("Request failed: " + textStatus);
        });
    });
</script>

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
