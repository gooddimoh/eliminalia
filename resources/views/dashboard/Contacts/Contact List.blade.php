@extends('layouts.default')

@section('title', 'Basic Tables')

@section('content')
    <div class="col-xl-12">
        <div class="row">
            <div class="col-md-6">
                <label class="col-form-label ">Email address</label>
                <input class="form-control form-control-sm" type="text">
                <label class="col-form-label ">Email address</label>
                <input class="form-control form-control-sm" type="text">
                <label class="col-form-label ">Email address</label>
                <input class="form-control form-control-sm" type="text">
                <label class="col-form-label ">Email address</label>
                <input class="form-control form-control-sm" type="text">
                <label class="col-form-label ">Email address</label>
                <input class="form-control form-control-sm" type="text">
                <label class="col-form-label ">Email address</label>
                <input class="form-control form-control-sm" type="text">
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
                <input class="form-control form-control-sm" type="text">
                <label class="col-form-label ">Name:</label>
                <input class="form-control form-control-sm" type="text">
                <label class="col-form-label ">Phone:</label>
                <input class="form-control form-control-sm" type="text">
                <label class="col-form-label ">DNI:</label>
                <input class="form-control form-control-sm" type="text">
                <label class="col-form-label ">Address:</label>
                <input class="form-control form-control-sm" type="text">
                <label class="col-form-label ">City</label>
                <input class="form-control form-control-sm" type="text">
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
                    <input type="text" class="btn btn-red" value="DELETE USER">
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="/assets/plugins/highlight.js/highlight.min.js"></script>
    <script src="/assets/js/demo/render.highlight.js"></script>
@endpush
