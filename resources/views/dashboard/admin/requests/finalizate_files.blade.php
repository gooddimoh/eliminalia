@extends('layouts.default')
@section('title', 'NEW USER MANAGEMENT')
@push('css')
    <link href="{{asset('assets/plugins/summernote/dist/summernote.css')}}" rel="stylesheet"/>
@endpush

@section('content')

    <h1>FINISH CUSTOMER</h1>
    <div class="CUSTOMER">
        <form action="" id="form">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <input class="form-control m-b-5" style="width:100%;" type="text" placeholder="input1">
                    </div>
                    <div class="col-md-4">
                        <input class="form-control m-b-5" style="width:100%;" type="text" placeholder="input1">
                    </div>
                    <div class="col-md-4">
                        <input class="form-control m-b-5" style="width:100%;" type="text" placeholder="input1">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <input class="form-control m-b-5" style="width:100%;" type="text" placeholder="input1">
                    </div>
                    <div class="col-md-4">
                        <input class="form-control m-b-5" style="width:100%;" type="text" placeholder="input1">
                    </div>
                    <div class="col-md-4">
                        <input class="form-control m-b-5" style="width:100%;" type="text" placeholder="input1">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                <textarea class="form-control m-b-5" style="width:100%;" name="" id="" cols="30" rows="10">

                </textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <button class="btn btn-sm btn-primary m-r-5 btn-green" type="button">
                                COSTUMER PROFILE
                            </button>
                        </div>
                        <div class="col-md-6">
                            <div class="buttons">
                                <button class="btn btn-sm btn-primary m-r-5 btn-red" type="button">
                                    CANCEL REQUEST
                                </button>
                                <button class="btn btn-sm btn-primary m-r-5 btn-green" type="button">
                                    FINISH COSTUMER
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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
