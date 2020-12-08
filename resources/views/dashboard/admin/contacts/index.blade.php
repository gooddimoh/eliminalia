@extends('layouts.default')
@section('title', 'Basic Tables')

@push('css')
    <link href="{{'assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css'}}" rel="stylesheet"/>
    <link href="{{'assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css'}}" rel="stylesheet"/>
    <link href="{{'assets/plugins/ion-rangeslider/css/ion.rangeSlider.min.css'}}" rel="stylesheet"/>
    <link href="{{'assets/plugins/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css'}}" rel="stylesheet"/>
    <link href="{{'assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css'}}" rel="stylesheet"/>
    <link href="{{'assets/plugins/@danielfarrell/bootstrap-combobox/css/bootstrap-combobox.css'}}" rel="stylesheet"/>
    <link href="{{'assets/plugins/bootstrap-select/dist/css/bootstrap-select.min.css'}}" rel="stylesheet"/>
    <link href="{{'assets/plugins/tag-it/css/jquery.tagit.css'}}" rel="stylesheet"/>
    <link href="{{'assets/plugins/bootstrap-daterangepicker/daterangepicker.css'}}" rel="stylesheet"/>
    <link href="{{'assets/plugins/select2/dist/css/select2.min.css'}}" rel="stylesheet"/>
    <link href="{{'assets/plugins/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css'}}"
          rel="stylesheet"/>
    <link href="{{'assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css'}}" rel="stylesheet"/>
    <link href="{{'assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.css'}}" rel="stylesheet"/>
    <link href="{{'assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker-fontawesome.css'}}"
          rel="stylesheet"/>
    <link href="{{'assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker-glyphicons.css'}}"
          rel="stylesheet"/>
@endpush

@section('content')
    <div class="panel-body">
        <h4 class="panel-title">CONTACT LIST</h4>
        <div class="pagination">
            <div class="panel panel-inverse">
                <div class="panel-body">
                    {{--  Contact ID	Date	Name and surname	Company	Commercial	Status	T	B	D --}}
                    <div id="data-table-default_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_length" id="data-table-default_length"><label>Show
                                        <select name="data-table-default_length" aria-controls="data-table-default"
                                                class="custom-select custom-select-sm form-control form-control-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries</label></div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div id="data-table-default_filter" class="dataTables_filter">
                                    <label> Search: <input type="search" class="form-control form-control-sm"
                                                           placeholder="Search:"
                                                           aria-controls="data-table-default"></label></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="data-table-default"
                                       class="table table-striped table-bordered table-td-valign-middle dataTable no-footer dtr-inline"
                                       role="grid" aria-describedby="data-table-default_info" style="width: 1609px;">
                                    <thead>
                                    <tr role="row">
                                        <th width="1%" class="sorting_asc" tabindex="0"
                                            aria-controls="data-table-default" rowspan="1" colspan="1"
                                            style="width: 0px;" aria-sort="ascending"
                                            aria-label=": activate to sort column descending">Avatar
                                        </th>
                                        <th width="1%" data-orderable="false" class="sorting_disabled" rowspan="1"
                                            colspan="1" style="width: 30px;" aria-label=""></th>
                                        <th class="text-nowrap sorting" tabindex="0" aria-controls="data-table-default"
                                            rowspan="1" colspan="1" style="width: 272px;"
                                            aria-label="Rendering engine: activate to sort column ascending">id
                                        </th>
                                        <th class="text-nowrap sorting" tabindex="0" aria-controls="data-table-default"
                                            rowspan="1" colspan="1" style="width: 339px;"
                                            aria-label="Browser: activate to sort column ascending">Name
                                        </th>
                                        <th class="text-nowrap sorting" tabindex="0" aria-controls="data-table-default"
                                            rowspan="1" colspan="1" style="width: 306px;"
                                            aria-label="Platform(s): activate to sort column ascending">Email
                                        </th>
                                        <th class="text-nowrap sorting" tabindex="0" aria-controls="data-table-default"
                                            rowspan="1" colspan="1" style="width: 235px;"
                                            aria-label="Engine version: activate to sort column ascending"> Email
                                        </th>
                                        <th class="text-nowrap sorting" tabindex="0" aria-controls="data-table-default"
                                            rowspan="1" colspan="1" style="width: 176px;"
                                            aria-label="CSS grade: activate to sort column ascending">Email
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {{--                                    @foreach($users as $user)--}}
                                    {{--                                        <tr class="gradeX odd" role="row">--}}
                                    {{--                                            <td width="1%" class="f-w-600 text-inverse dtr-control sorting_1" tabindex="0">--}}
                                    {{--                                                1--}}
                                    {{--                                            </td>--}}
                                    {{--                                            <td width="1%" class="with-img">--}}
                                    {{--                                                <img src="../assets/img/user/user-1.jpg" class="img-rounded height-30">--}}
                                    {{--                                            </td>--}}
                                    {{--                                            <td>{{$user->id}}</td>--}}
                                    {{--                                            <td>{{$user->id}}</td>--}}
                                    {{--                                            <td>{{$user->id}}</td>--}}
                                    {{--                                            <td>{{$user->count}}</td>--}}
                                    {{--                                            <td>{{$user->id}}</td>--}}
                                    {{--                                        </tr>--}}
                                    {{--                                    @endforeach--}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="data-table-default_info" role="status"
                                     aria-live="polite">Showing 1 to 10 of 57 entries
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="data-table-default_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled"
                                            id="data-table-default_previous"><a href="#"
                                                                                aria-controls="data-table-default"
                                                                                data-dt-idx="0" tabindex="0"
                                                                                class="page-link">Previous</a></li>
                                        <li class="paginate_button page-item active"><a href="#"
                                                                                        aria-controls="data-table-default"
                                                                                        data-dt-idx="1" tabindex="0"
                                                                                        class="page-link">1</a></li>
                                        <li class="paginate_button page-item "><a href="#"
                                                                                  aria-controls="data-table-default"
                                                                                  data-dt-idx="2" tabindex="0"
                                                                                  class="page-link">2</a></li>
                                        <li class="paginate_button page-item "><a href="#"
                                                                                  aria-controls="data-table-default"
                                                                                  data-dt-idx="3" tabindex="0"
                                                                                  class="page-link">3</a></li>
                                        <li class="paginate_button page-item "><a href="#"
                                                                                  aria-controls="data-table-default"
                                                                                  data-dt-idx="4" tabindex="0"
                                                                                  class="page-link">4</a></li>
                                        <li class="paginate_button page-item "><a href="#"
                                                                                  aria-controls="data-table-default"
                                                                                  data-dt-idx="5" tabindex="0"
                                                                                  class="page-link">5</a></li>
                                        <li class="paginate_button page-item "><a href="#"
                                                                                  aria-controls="data-table-default"
                                                                                  data-dt-idx="6" tabindex="0"
                                                                                  class="page-link">6</a></li>
                                        <li class="paginate_button page-item next" id="data-table-default_next">
                                            <a href="#" aria-controls="data-table-default" data-dt-idx="7"
                                               tabindex="0" class="page-link">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{'assets/plugins/highlight.js/highlight.min.js'}}"></script>
    <script src="{{'assets/js/demo/render.highlight.js'}}"></script>
    <script src="{{'assets/plugins/jquery-migrate/dist/jquery-migrate.min.js'}}"></script>
    <script src="{{'assets/plugins/moment/moment.js'}}"></script>
    <script src="{{'assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js'}}"></script>
    <script src="{{'assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js'}}"></script>
    <script src="{{'assets/plugins/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js'}}"></script>
    <script src="{{'assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js'}}"></script>
    <script src="{{'assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js'}}"></script>
    <script src="{{'assets/plugins/pwstrength-bootstrap/dist/pwstrength-bootstrap.min.js'}}"></script>
    <script src="{{'assets/plugins/@danielfarrell/bootstrap-combobox/js/bootstrap-combobox.js'}}"></script>
    <script src="{{'assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js'}}"></script>
    <script src="{{'assets/plugins/tag-it/js/tag-it.min.js'}}"></script>
    <script src="{{'assets/plugins/bootstrap-daterangepicker/daterangepicker.js'}}"></script>
    <script src="{{'assets/plugins/select2/dist/js/select2.min.js'}}"></script>
    <script src="{{'assets/plugins/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js'}}"></script>
    <script src="{{'assets/plugins/bootstrap-show-password/dist/bootstrap-show-password.js'}}"></script>
    <script src="{{'assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js'}}"></script>
    <script src="{{'assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.js'}}"></script>
    <script src="{{'assets/plugins/clipboard/dist/clipboard.min.js'}}"></script>
    <script src="{{'assets/js/demo/form-plugins.demo.js'}}"></script>
@endpush
