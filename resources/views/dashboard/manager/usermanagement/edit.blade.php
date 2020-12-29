@extends('layouts.default')
@section('title', 'NEW USER MANAGEMENT')
@push('css')
    <link href="{{asset('assets/plugins/summernote/dist/summernote.css')}}" rel="stylesheet"/>
@endpush

@section('content')
    <form method="post" action="{{route('contactsupdate')}}" class="col-xl-12">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <h4>New user data</h4>
                <div class="panel" data-sortable-id="table-basic-7" data-init="true" style="">
                    <div class="col-md-3">
                        <div class="form-group row">
                            <label class="col-form-label">Username:</label>
                            <input class="form-control form-control-sm" type="text" value="" name=""
                                   placeholder="Username:">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label">Name:</label>
                            <input class="form-control form-control-sm" type="text" name="" placeholder="Password:">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label">Phone:</label>
                            <input class="form-control form-control-sm" type="text" value="" name=""
                                   placeholder="Email (main)*:" value="">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label">DNI:</label>
                            <input class="form-control form-control-sm" type="text" value="" name=""
                                   placeholder="Surname:">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label">Address:</label>
                            <input class="form-control form-control-sm" type="text" value="" name=""
                                   placeholder="Address:">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label">City:</label>
                            <input class="form-control form-control-sm" type="text" value="" name=""
                                   placeholder="City:">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label">Permission Level:</label>
                            <input class="form-control form-control-sm" type="text" value="" name=""
                                   placeholder="Country*:">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group row">
                            <label class="col-form-label ">Password:</label>
                            <input class="form-control form-control-sm" type="text" value="" name=""
                                   placeholder="Surname:">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label ">Surname:</label>
                            <input class="form-control form-control-sm" type="text" value="" name=""
                                   placeholder="Phone number 2:">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label">Email:</label>
                            <input class="form-control form-control-sm" type="text" value="" name=""
                                   placeholder="Email (secondary):">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label ">ID:</label>
                            <input class="form-control form-control-sm" type="text" value="" name=""
                                   placeholder="Company ID:">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label">Postal code:</label>
                            <input class="form-control form-control-sm" type="text" value="" name=""
                                   placeholder="Postal code:">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label ">State:</label>
                            <input class="form-control form-control-sm" type="text" value="" name=""
                                   placeholder="State:">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h1>Search existent user</h1>
                <div class="panel" data-sortable-id="table-basic-7" data-init="true" style="">
                    <!-- begin panel-heading -->
                    <div class="panel-heading ui-sortable-handle">
                        <h4 class="panel-title">List of all Users <span
                                    class="label label-success m-l-5 t-minus-1">NEW</span>
                        </h4>
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                               data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                               data-click="panel-reload"><i class="fa fa-redo"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-cUsername: circle btn-warning"
                               data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
                               data-click="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <!-- end panel-heading -->
                    <!-- begin panel-body -->
                    <div class="panel-body">
                        <!-- begin table-responsive -->
                        <div class="table-responsive">
                            <table class="table table-striped m-b-0 overflow-hidden">
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td class="with-img">
                                            <img src="../assets/img/user/user-1.jpg" class="img-rounded height-30">
                                        </td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->role}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-align-right">
            <br>
            <button type="submit" class="form-control btn btn-green col-md-6">CONTACT REGISTER</button>
        </div>
    </form>
@endsection

@section('legend')
    <h1>Legend</h1>
@endsection

<script type="">
    $("search").change(function () {
        let data = "data";
        var request = $.ajax({
            url: "{{route("usermanagementnew")}}",
            method: "post",
            data: {view: 'view'},
            dataType: "html"
        });
        request.done(function (html) {
            $("#html").html(html);
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
