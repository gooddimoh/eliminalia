@extends('layouts.default')

@section('title', 'Basic Tables')

@section('content')
    <div class="col-xl-12">
        <div class="row">
            <form action="register" method="post" class="col-xl-12" style="	display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: center; align-content: space-between;">
                @foreach ($users as $user)
                    <div class="col-md-6">
                        <label class="col-form-label ">{{ $user->id }}*</label>
                        <input class="form-control form-control-sm" type="text">
                        <label class="col-form-label ">Phone number 1*:</label>
                        <input class="form-control form-control-sm" type="text">
                        <label class="col-form-label ">Email(main)*:</label>
                        <input class="form-control form-control-sm" type="text">
                        <label class="col-form-label ">ID:</label>
                        <input class="form-control form-control-sm" type="text">
                        <label class="col-form-label ">Address:</label>
                        <input class="form-control form-control-sm" type="text">
                        <label class="col-form-label ">City:</label>
                        <input class="form-control form-control-sm" type="text">
                        <label class="col-form-label ">Country*:</label>
                        <input class="form-control form-control-sm" type="text">
                        <label class="col-form-label ">Commercial:*</label>
                        <input class="form-control form-control-sm" type="text">
                    </div>
                    <div class="col-md-6">
                        <label class="col-form-label ">Surename:</label>
                        <input class="form-control form-control-sm" type="text">
                        <label class="col-form-label ">Phone number 2:</label>
                        <input class="form-control form-control-sm" type="text">
                        <label class="col-form-label ">Email (secondary):</label>
                        <input class="form-control form-control-sm" type="text">
                        <label class="col-form-label ">Postal code:</label>
                        <input class="form-control form-control-sm" type="text">
                        <label class="col-form-label ">State</label>
                        <input class="form-control form-control-sm" type="text">
                        <label class="col-form-label ">Native language*:</label>
                        <input class="form-control form-control-sm" type="text">
                        <label class="col-form-label ">Permissions Level:</label>
                        <select class="form-control form-control-sm">
                            <option value="">SUPERADMIN</option>
                            <option value="">---</option>
                            <option value="">MANAGER</option>
                            <option value="">MANAGER</option>
                            <option value="">MANAGER</option>
                        </select>
                        <label class="col-form-label form-control-sm">Native language*:</label>
                        <button type="button" class="form-control btn btn-green">USER REGISTER</button>
                    </div>
                @endforeach
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="/assets/plugins/highlight.js/highlight.min.js"></script>
    <script src="/assets/js/demo/render.highlight.js"></script>
@endpush

{{--Legend--}}

{{--Not signed: Contacts that have not signed a contract and therefore are not yet customers.--}}
{{--Signed: Contacts that have signed contracts and are officially customers.--}}
{{--Discarded: Contacts that have been discarded as potential customers.--}}
{{--All: Listing of all unsigned, signed and discarded contacts.--}}
{{--No tracking (T): Contacts that have not yet been crawled for the initial search (if selected).--}}
{{--No budget (B): Contacts that have not yet been budgeted (if selected).--}}
{{--Doc. not sended (D): Contacts that have not yet been sent the required documentation (if selected).--}}
{{--With tracking (T): Contacts that have been crawled for the initial search (if selected).--}}
{{--With budget (B): Contacts that have been budgeted (if selected).--}}
{{--Doc. sended (D): Contacts that have been sent the required documentation (if selected).--}}