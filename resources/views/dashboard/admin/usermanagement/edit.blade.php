@extends('layouts.default')
@section('title', 'NEW USER MANAGEMENT')
@push('css')
    <link href="{{asset('assets/plugins/summernote/dist/summernote.css')}}" rel="stylesheet"/>
@endpush

@section('content')
    <form method="post" action="{{route('usermanagement.update')}}" class="col-xl-12">
        {{-- <form method="post" action="{{route('usermanagement.update')}}" class="col-xl-12"> --}}
        @csrf
        <div class="row">
            <div class="col-md-3">
                <h4>New User Data</h4>
                <div class="form-group row">
                    <label class="col-form-label">Name:</label>
                    <input class="form-control form-control-sm height-40 m-r-10" type="text" name="name"
                           placeholder="Name:"
                           value="{{$user->name}}">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Phone:</label>
                    <input class="form-control form-control-sm height-40 m-r-10" type="text" name="phone"
                           placeholder="Phone:"
                           value="{{$user->phone}}">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">DNI:</label>
                    <input class="form-control form-control-sm height-40 m-r-10" type="text" name="dni"
                           placeholder="DNI:"
                           value="{{$user->dni}}">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Address:</label>
                    <input class="form-control form-control-sm height-40 m-r-10" type="text" name="address"
                           placeholder="Address:"
                           value="{{$user->address}}">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">City:</label>
                    <input class="form-control form-control-sm height-40 m-r-10" type="text" name="city"
                           placeholder="City:"
                           value="{{$user->city}}">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Permission Level:</label>
                    <select class="form-control form-control-sm height-40 m-r-10" name="permission_level">
                        <option value="0">SUPERADMIN:</option>
                        <option value="1">ADMIN SUCURSAL:</option>
                        <option value="3">ALTA CONTRATOS:</option>
                        <option value="4">RASTREADOR</option>
                        <option value="5">COMERCIAL</option>
                        <option value="6">PARTNER</option>
                        <option value="7">MANAGER</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <h4>&nbsp;</h4>
                <div class="form-group row">
                    <label class="col-form-label ">Password:</label>
                    <input class="form-control form-control-sm height-40 m-r-10" type="text" name="password"
                           placeholder="Password:" value="{{$user->password}}">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Email:</label>
                    <input class="form-control form-control-sm height-40 m-r-10" type="text" value="" name="email"
                           placeholder="Email (main)*:" value="{{$user->email}}">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">ID:</label>
                    <input class="form-control form-control-sm height-40 m-r-10" type="text" value="" name="id"
                           placeholder="ID:" value="{{$user->id}}">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Postal code:</label>
                    <input class="form-control form-control-sm height-40 m-r-10" type="text" value="" name="postalcode"
                           placeholder="Postal code:" value="">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">State:</label>
                    <input class="form-control form-control-sm height-40 m-r-10" type="text" value="" name="state"
                           placeholder="State:" value="{{$user->state}}">
                </div>
                <div class="form-group form-control-sm flex-column align-items-end bottom justify-content-end height-40 m-r-10"
                     style="position: relative">
                    <div class="banned" style="position:absolute; top:40px; right:0px;">
                        <span class="text">BANNED</span>
                        <input class="ui-checkboxradio-checked" style="cursor:pointer;" type="checkbox"
                               {{--                               value="{{$user->banned}}"--}}
                               checked name="banned">

                    </div>
                </div>
                <div class="form-group row ">
                    <div class="row-align-right">
                        <button type="submit" class="form-control btn btn-green m-t-40 m-l-40"
                                style="margin-left:130px!important; margin-top:34px!important; border-radius:0px!important; padding-top:8px">
                            CONTACT EDIT && UPDATE
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ui-sortable">
                <div id="data-table-default_filter" class="dataTables_filter">
                    <label>Search:
                        <input type="search" class="form-control form-control-sm" placeholder=""
                               aria-controls="data-table-default">
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
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
                               data-click="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <table class="table">
                        <tbody>
                        @foreach($users as $user)
                            <tr href="http://loc.eliminalia.com/dashboard/usermanagement/new?delete={{$user->id}}">
                                <th class="width-60">{{$user->id}}</th>
                                <th class="width-60">{{$user->name}}</th>
                                <th class="width-60">{{$user->permission_level}}</th>
                                <th class="width-60">{{$user->email}}</th>
                                <th class="width-60">&nbsp;</th>
                                <th class="width-60">
                                    <a class="red"
                                       href="http://loc.eliminalia.com/dashboard/usermanagement/new?delete={{$user->id}}">
                                        Delete
                                    </a>
                                </th>
                                <th class="width-60">
                                    <a class="red"
                                       href="http://loc.eliminalia.com/dashboard/usermanagement/edit?edit={{$user->id}}">
                                        Edit
                                    </a>
                                </th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="panel-body">
                        <!-- begin table-responsive -->
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-body">
                        <div id="timeline">
                            <p>Time Line</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="legend">
        Legend
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
