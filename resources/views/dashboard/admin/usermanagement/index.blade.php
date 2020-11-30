@extends('layouts.default')
@section('title', 'USER MANAGEMENT LIST')
@push('css')
    <link href="{{asset('assets/plugins/summernote/dist/summernote.css')}}" rel="stylesheet"/>
@endpush
@section('content')
    <div class="panel">
        <div class="panel-heading">
            <h4 class="panel-title">UserManagement List</h4>
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand">
                    <i class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload">
                    <i
                            class="fa fa-redo"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i
                            class="fa fa-minus"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove">
                    <i class="fa fa-times"></i></a>
            </div>
        </div>
        <div class="panel-body">
            <div id="data-table-default_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="data-table-default"
                               class="table table-striped table-bordered table-td-valign-middle dataTable no-footer dtr-inline"
                               role="grid" aria-describedby="data-table-default_info" style="width: 1609px;">
                            <thead>
                            <tr role="row">
                                <th width="1%" class="sorting_asc" tabindex="0" aria-controls="data-table-default"
                                    rowspan="1" colspan="1" style="width: 0px;" aria-sort="ascending"
                                    aria-label=": activate to sort column descending"></th>
                                <th width="1%" data-orderable="false" class="sorting_disabled" rowspan="1" colspan="1"
                                    style="width: 30px;" aria-label=""></th>
                                <th class="text-nowrap sorting" tabindex="0" aria-controls="data-table-default"
                                    rowspan="1" colspan="1" style="width: 272px;"
                                    aria-label="Rendering engine: activate to sort column ascending">Rendering engine
                                </th>
                                <th class="text-nowrap sorting" tabindex="0" aria-controls="data-table-default"
                                    rowspan="1" colspan="1" style="width: 329px;"
                                    aria-label="Browser: activate to sort column ascending">Username:
                                </th>
                                <th class="text-nowrap sorting" tabindex="0" aria-controls="data-table-default"
                                    rowspan="1" colspan="1" style="width: 305px;"
                                    aria-label="Platform(s): activate to sort column ascending">Platform(s)
                                </th>
                                <th class="text-nowrap sorting" tabindex="0" aria-controls="data-table-default"
                                    rowspan="1" colspan="1" style="width: 239px;"
                                    aria-label="Engine version: activate to sort column ascending">Engine version
                                </th>
                                <th class="text-nowrap sorting" tabindex="0" aria-controls="data-table-default"
                                    rowspan="1" colspan="1" style="width: 183px;"
                                    aria-label="CSS grade: activate to sort column ascending">CSS grade
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr class="gradeA even" role="row">
                                    <td class="f-w-600 text-inverse dtr-control sorting_1" tabindex="0">{{$user->id}}</td>
                                    <td class="with-img">
                                        <img src="{{$user->id}}" class="img-rounded height-100">
                                    </td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->password}}</td>
                                    <td>{{$user->id}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        $.ajax({
            url: "{{route("usermanagement.list")}}",
            method: "post",
            dataType: "html"
        });
        request.done(function (view) {
            $("#table").html(view);
        });
        request.fail(function (jqXHR, textStatus) {
            alert("Request failed: " + textStatus);
        });
    </script>
@stop
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
