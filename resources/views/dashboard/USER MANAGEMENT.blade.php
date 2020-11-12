@extends('layouts.default')

@section('title', 'USER MANAGEMENT')

@push('css')
    <link href="/assets/plugins/summernote/dist/summernote.css" rel="stylesheet"/>
@endpush

@section('content')
    <div class="row">
        <div class="col-xl-6">
            <div class="row">
                <div class="col-md-6">
                    <label class="col-form-label ">Email address</label>
                    <input class="form-control form-control-sm" type="text"/>
                    <label class="col-form-label ">Email address</label>
                    <input class="form-control form-control-sm" type="text"/>
                    <label class="col-form-label ">Email address</label>
                    <input class="form-control form-control-sm" type="text"/>
                    <label class="col-form-label ">Email address</label>
                    <input class="form-control form-control-sm" type="text"/>
                    <label class="col-form-label ">Email address</label>
                    <input class="form-control form-control-sm" type="text"/>
                    <label class="col-form-label ">Email address</label>
                    <input class="form-control form-control-sm" type="text"/>
                    <label class="col-form-label ">Permissions Level:</label>
                    <select class="form-control form-control-sm">
                        <option value="">SUPERADMIN</option>
                        <option value="">---</option>
                        <option value="">MANAGER</option>
                        <option value="">MANAGER</option>
                        <option value="">MANAGER</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="col-form-label ">Username:</label>
                    <input class="form-control form-control-sm" type="text"/>
                    <label class="col-form-label ">Name:</label>
                    <input class="form-control form-control-sm" type="text"/>
                    <label class="col-form-label ">Phone:</label>
                    <input class="form-control form-control-sm" type="text"/>
                    <label class="col-form-label ">DNI:</label>
                    <input class="form-control form-control-sm" type="text"/>
                    <label class="col-form-label ">Address:</label>
                    <input class="form-control form-control-sm" type="text"/>
                    <label class="col-form-label ">City</label>
                    <input class="form-control form-control-sm" type="text"/>
                    <label class="col-form-label form-control-sm"></label>
                    <button type="button" class="form-control btn btn-green">USER REGISTER</button>
                    <div class="modify-user-button-groups">
                        <div class="checkbox checkbox-css">
                            <input type="checkbox" id="cssCheckbox1" value="" checked="">
                            <label for="cssCheckbox1">Banned</label>
                        </div>
                        <label class="col-form-label ">Permissions Level:</label>
                        <select class="form-control form-control-sm">
                            <option value="">GENERAL</option>
                            <option value="">BARSELONA</option>
                            <option value="">KIEV</option>
                            <option value="">CONSULTOR</option>
                        </select>

                        <input type="text" class="btn btn-green" value="MODIFY USER">
                        <input type="text" class="btn btn-red" VALUE="DELETE USER">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 ui-sortable">
            <div class="panel-body">
                <div class="col-xl-12 ui-sortable">
                    <div class="panel panel-inverse" style="">
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <div id="data-table-combine_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="dataTables_wrapper dt-bootstrap">
                                    <div class="row">
                                        <div class="col-xl-7 d-block d-sm-flex d-xl-block justify-content-center">
                                            <div class="d-block d-lg-inline-flex mr-0 mr-sm-3">
                                                <div class="dataTables_length" id="data-table-combine_length"><label>Show
                                                        <select name="data-table-combine_length"
                                                                aria-controls="data-table-combine"
                                                                class="custom-select custom-select-sm form-control form-control-sm">
                                                            <option value="10">10</option>
                                                            <option value="25">25</option>
                                                            <option value="50">50</option>
                                                            <option value="100">100</option>
                                                        </select> entries</label></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-5 d-flex d-xl-block justify-content-center">
                                            <div id="data-table-combine_filter" class="dataTables_filter"><label>Search:<input
                                                            type="search" class="form-control form-control-sm"
                                                            placeholder="" aria-controls="data-table-combine"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <table id="data-table-responsive_wrapper"
                                           class="table table-striped table-bordered table-td-valign-middle dataTable nod-footer dtr-inline"
                                           role="grid" aria-describedby="data-table-combine_info"
                                           style="position: relative; width: auto;">
                                        <thead>
                                        <tr role="row">
                                            <th width="1%" class="sorting_asc" tabindex="0"
                                                aria-controls="data-table-combine" rowspan="1" colspan="1"
                                                style="width: 0px;" data-column-index="0" aria-sort="ascending"
                                                aria-label=": activate to sort column descending"></th>
                                            <th width="1%" data-orderable="false" class="sorting_disabled" rowspan="1"
                                                colspan="1" style="width: 30px;" data-column-index="1"
                                                aria-label=""></th>
                                            <th class="text-nowrap sorting" tabindex="0"
                                                aria-controls="data-table-combine" rowspan="1" colspan="1"
                                                style="width: 215px;" data-column-index="2"
                                                aria-label="Rendering engine: activate to sort column ascending">
                                                Name
                                            </th>
                                            <th class="text-nowrap sorting" tabindex="0"
                                                aria-controls="data-table-combine" rowspan="1" colspan="1"
                                                style="width: 270px;" data-column-index="3"
                                                aria-label="Browser: activate to sort column ascending">Role
                                            </th>
                                            <th class="text-nowrap sorting" tabindex="0"
                                                aria-controls="data-table-combine" rowspan="1" colspan="1"
                                                style="width: 270px;" data-column-index="3"
                                                aria-label="Browser: activate to sort column ascending">Approved
                                            </th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($users as $user)
                                            <tr class="gradeC even" role="row">
                                                <td width="1%" class="f-w-600 text-inverse dtr-control sorting_1"
                                                    tabindex="0">
                                                    {{ $user->id }}
                                                </td>
                                                <td width="1%" class="with-img">
                                                    <img src="{{'http://127.0.0.1:8000/assets/img/user/user-13.jpg'}}"
                                                         class="img-rounded height-30">
                                                </td>
                                                <td>{{ $user->name }}</td>
                                                <td>
                                                    @foreach($user->roles as $key => $item)
                                                        <span class="label label-info label-many">{{ $item->title }}</span>
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @if($user->approved == 1)
                                                        Yes
                                                    @endif
                                                    @if($user->approved == 0)
                                                        No
                                                    @endif
                                                </td>
                                                <td class="with-btn" nowrap="">
                                                    <a href="#" class="btn btn-sm btn-primary width-60 m-r-2">Edit</a>
                                                    <a href="#" class="btn btn-sm btn-white width-60">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end panel-body -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12" style="margin:20px auto">
            <div class="card border-0">
                <div class="card-body">
                    <h4 class="card-title">Legend</h4>
                    <p class="card-text">
                        <b>SUPERADMIN (BCN):</b> Usuario con restricciones de permisos, clientes unicamente del grupo de
                        BARCELONA, sin acceso a las estadísticas, historal de acciones ni partners.
                    </p>
                    <p class="card-text">
                        <b>ADMIN:</b> User with access to the contact section, requests for completion, SEO, partners,
                        agenda and customer billing.
                    </p>
                    <p class="card-text">
                        <b>GESTOR:</b> User with access only to the list of clients that he has assigned. He is in
                        charge of managing the files.
                    </p>
                    <p class="card-text">
                        <b>REGISTRADOR:</b> User with access to customer registration and modify customers.
                    </p>
                    <p class="card-text">
                        <b>RECEPCION:</b> User with access to contact registration and modify contacts.
                    </p>
                    <p class="card-text">
                        <b>COMERCIAL:</b> User with access only to the contact registration, modify contacts and
                        requests for information section.
                    </p>
                    <p class="card-text">
                        <b>SEO:</b> User who manages SEO cases with access to clients who have been opened an active SEO
                        case.
                    </p>
                    <p class="card-text">
                        <b>REGISTRADOR SEO:</b> User who can confirm or deny requests for a client to have an active SEO
                        case.
                    </p>
                    <p class="card-text">
                        <b> PARTNER:</b> User who has access only to customers whose partner is the same as the user.
                    </p>
                </div>
            </div>
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
@endpush
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $('#data-table-combine').DataTable();
    });
</script>
<script>
    let name, email, phone, city, response, trline;
    $.ajax({
        url: "http://127.0.0.1:8000/UserResource?type=1",
        type: "GET",
        data: {
            _token: $("#csrf").val(),
            type: 1,
            name: name,
            email: email,
            phone: phone,
            city: city
        },
        success: function (response) {
            $.each(response, function (i, item) {
                trline +=
                    "<td width=\"1%\" class=\"f-w-600 text-inverse dtr-control sorting_1\">" + item.id + "<td>" +
                    "<td width=\"1%\" class=\"with-img\">" + item.name + "<td>" +
                    "<td>" + item.email + "<td>" +
                    "<td>" + item.password + "<td>";
                    item.approved == 0 ? trline += "<td>no<td>" :
                    item.approved == 1 ? trline += "<td>yes<td>" :

                        $(".appendtd").append(trline);
            });
        }
    });
</script>
@push('scripts')
    <script src="/assets/plugins/summernote/dist/summernote.min.js"></script>
    <script src="/assets/js/demo/form-summernote.demo.js"></script>
@endpush
