@extends('layouts.default')
@section('title', 'NEW USER MANAGEMENT')
@push('css')
    <link href="{{asset('assets/plugins/summernote/dist/summernote.css')}}" rel="stylesheet"/>
@endpush

@section('content')
    <form id="form" method="post" action="{{route('usermanagement.create')}}" class="col-xl-12">
        @csrf
        {{ csrf_field() }}
        <h4>New User Data</h4>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group row">
                    <label class="col-form-label">Name:</label>
                    <input class="form-control form-control-sm height-40 m-r-10" type="text" name="name"
                           placeholder="Name:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Phone:</label>
                    <input class="form-control form-control-sm height-40 m-r-10" type="text" name="phone"
                           placeholder="Phone:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Password Confirm:</label>
                    <input class="form-control form-control-sm height-40 m-r-10" type="text" placeholder="Password:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">DNI:</label>
                    <input class="form-control form-control-sm height-40 m-r-10" type="text" name="dni"
                           placeholder="dni:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Address:</label>
                    <input class="form-control form-control-sm height-40 m-r-10" type="text" name="address"
                           placeholder="Address:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Permission Level:</label>
                    <select class="form-control form-control-sm height-40 m-r-10" name="permission_level">
                        <option value="0">Permission Level</option>
                        <option value="1">-----</option>
                        <option value="2">SUPERADMIN:</option>
                        <option value="3">ADMIN SUCURSAL:</option>
                        <option value="4">ALTA CONTRATOS</option>
                        <option value="5">RASTREADOR</option>
                        <option value="6">COMERCIAL</option>
                        <option value="7">PARTNER</option>
                        <option value="8">MANAGER</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group row">
                    <label class="col-form-label ">Surname:</label>
                    <input class="form-control form-control-sm height-40 m-r-10" type="text" name="surname"
                           placeholder="Surname:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label ">Password:</label>
                    <input class="form-control form-control-sm height-40 m-r-10" type="text" name="password"
                           placeholder="Password:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Email:</label>
                    <input id="email" class="form-control form-control-sm height-40 m-r-10" type="email" name="email"
                           placeholder="Email (main)*:">
                </div>
                <div class="form-group row">
                    <p><label class="col-form-label">&nbsp;</label></p>
                    <label class="col-form-label">City:</label>
                    <input class="form-control form-control-sm height-40 m-r-10" type="text" name="city"
                           placeholder="City:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">State:</label>
                    <input class="form-control form-control-sm height-40 m-r-10" type="text" name="state"
                           placeholder="State:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Postal code:</label>
                    <input class="form-control form-control-sm height-40 m-r-10" type="text" name="postalcode"
                           placeholder="Postal code:">
                </div>
                <div class="form-group row ">
                    <div class="row-align-right">
                        <button type="submit" class="form-control btn btn-green m-t-40 m-l-40"
                                style="margin-left: 155px!important;margin-top:34px!important;border-radius:0px!important;padding-top:8px;">
                            NEW USER
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ui-sortable">
                <div class="dataTables_filter">
                    <label class="flex-row">
                        <h4 class="float-left">Search Existing user</h4>
                    </label>
                </div>
                <h1>Search existent user</h1>
                <div class="panel" data-sortable-id="table-basic-7" data-init="true" style="">
                    <!-- begin panel-heading -->
                    <div class="panel-heading ui-sortable-handle">
                        <h4 class="panel-title">List of all Users<span
                                    class="label label-success m-l-5 t-minus-1"> NEW </span></h4>
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                               data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                               data-click="panel-reload"><i class="fa fa-redo"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-cUsername: circle btn-warning"
                               data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-Username: danger"
                               data-click="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <table id="data-table-default"
                           class="table table-striped table-bordered table-td-valign-middle dataTable no-footer dtr-inline"
                           role="grid" aria-describedby="data-table-default_info" width="100%">
                        <thead>
                        <tr role="row">
                            <th width="1%" class="sorting_asc" tabindex="0" aria-controls="data-table-default"
                                rowspan="1" colspan="1" style="width: 0px;" aria-sort="ascending"
                                aria-label=": activate to sort column descending">ID
                            </th>
                            <th width="1%" data-orderable="false" class="sorting_disabled" rowspan="1" colspan="1"
                                style="width: 30px;" aria-label="">IMG
                            </th>
                            <th class="text-nowrap sorting" tabindex="0" aria-controls="data-table-default"
                                rowspan="1" colspan="1" style="width: 272px;"
                                aria-label="Rendering engine: activate to sort column ascending">Email
                            </th>
                            <th class="text-nowrap sorting" tabindex="0" aria-controls="data-table-default"
                                rowspan="1" colspan="1" style="width: 329px;"
                                aria-label="Browser: activate to sort column ascending">Username:
                            </th>
                            <th class="text-nowrap sorting" tabindex="0" aria-controls="data-table-default"
                                rowspan="1" colspan="1" style="width: 329px;"
                                aria-label="Browser: activate to sort column ascending">Role:
                            </th>
                        </tr>
                        </thead>
                        <tbody id="tbody">
                        @foreach($users as $user)
                            <tr onclick="redirect();">
                                <td>{{$user->id}}</td>
                                <td class="with-img">
                                    <img src="" class="img-rounded height-30" alt="img">
                                </td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->name}}</td>
                                <td>SUPERADMIN{{$user->role}}</td>
                                <td><a class="btn btn-yellow m-r-5 m-b-5" style="cursor: pointer;"
                                       onclick="customajax('edit','{{$user->id}}')">Edit </a></td>
                                <td><a class="btn btn-danger m-r-5 m-b-5" style="cursor: pointer;"
                                       onclick="customajax('delete','{{$user->id}}')"> Delete </a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </form>
    <div class="panel-body">
        <h5>Legend</h5>
        <div class="panel panel-body">
            <h1>h1. Heading 1</h1>
            <p>list of roles</p>
        </div>
    </div>
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
<script type="">
    let action = 'new';

    function customajax(action, id) {
        $.ajaxSetup({
            headers: {
                'X-CSSRF-TOKEN': '{{csrf_token()}}'
            }
        });
        var request = $.ajax({
            url: "{{route('usermanagement')}}/" + action,
            method: "POST",
            data: {action: action, id: id, _token: '{{csrf_token()}}'},
            dataType: "html"
        });
        request.done(function (view) {
            $("tbody#tbody").html(view);
        });
        request.fail(function (jqXHR, textStatus) {
            alert("Request failed: " + textStatus);
        });
    }
</script>