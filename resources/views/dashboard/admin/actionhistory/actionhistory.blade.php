@extends('layouts.default')
@section('title', 'NEW USER MANAGEMENT')
@push('css')
    <link href="{{asset('assets/plugins/summernote/dist/summernote.css')}}" rel="stylesheet"/>
@endpush

@section('content')
    <div class="row">
        <div class="flex-column">
            <h1>ACTION HISTORY</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="row form-group">
                <div class="col-md-4 form-group row m-b-15">
                    <label class="col-form-label col-md-3">Month</label>
                    <div class="col-md-9">
                        <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 form-group row m-b-15">
                    <label class="col-form-label col-md-3">Year</label>
                    <div class="col-md-9">
                        <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 form-group row m-b-15">
                    <label class="col-form-label col-md-3">Manager</label>
                    <div class="col-md-9">
                        <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="panel panel-inverse" data-sortable-id="table-basic-4" data-init="true" style="">
                <!-- begin panel-heading -->
                <div class="panel-heading ui-sortable-handle">
                    <h4 class="panel-title">Responsive Table</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                           data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                           data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
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
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th nowrap="">Name</th>
                                <th nowrap="">Action taken</th>
                                <th nowrap="">Date</th>
                                <th nowrap="">Time</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datas as $data)
                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->action_taken}}</td>
                                    <td>{{$data->date}}</td>
                                    <td>{{$data->Time}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- end table-responsive -->
                </div>
            </div>
        </div>
    </div>
    <div class="result">
        <table>
            <caption>Council budget (in £) 2018</caption>
            <thead>
            <tr>
                <th scope="col">Items</th>
                <th scope="col">Expenditure</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">Name</th>
                <th scope="row">Action Taken</th>
                <td>3,000</td>
            </tr>
            <tr>
                <th scope="row">Date</th>
                <th scope="row">Time</th>
                <td>18,000</td>
            </tr>
            </tbody>
        </table>
        <div class="result">
            Result number: 138536
        </div>
    </div>
    <div class="paggination">
        {{$item = 10}}
        <a href="">{{$item}}</a>
        <a href="">{{$item}}</a>
        <a href="">{{$item}}</a>
        <a href="">{{$item}}</a>
    </div>
    <div class="results">
        {{$count = 10}}
        Result number: {{ $count }}
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
