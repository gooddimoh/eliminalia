@extends('layouts.default')
@section('title', 'NEW USER MANAGEMENT')
@push('css')
    <link href="{{asset('assets/plugins/summernote/dist/summernote.css')}}" rel="stylesheet"/>
@endpush

@section('content')
    <div class="col-md-6">
        <p> New user data </p>
        <div class="inputs">
            <div class="col-md-6">
                <div class="form-control">
                    <label> Username: </label>
                    <input type="text" placeholder="Username:">
                </div>
                <div class="form-control">
                    <label> Name: </label>
                    <input type="text" placeholder="Username:">
                </div>
                <div class="form-control">
                    <label> Phone: </label>
                    <input type="text" placeholder="Username:">
                </div>
                <div class="form-control">
                    <label> DNI: </label>
                    <input type="text" placeholder="Username:">
                </div>
                <div class="form-control">
                    <label> Address: </label>
                    <input type="text" placeholder="Username:">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-control">
                    <label> Password: </label>
                    <input type="text" placeholder="Username:">
                </div>
                <div class="form-control">
                    <label> Surname: </label>
                    <input type="text" placeholder="Username:">
                </div>
                <div class="form-control">
                    <label> Email: </label>
                    <input type="text" placeholder="Username:">
                </div>
                <div class="form-control">
                    <label> ID: </label>
                    <input type="text" placeholder="Username:">
                </div>
                <div class="form-control">
                    <label> Postal code: </label>
                    <input type="text" placeholder="Username:">
                </div>
                <div class="form-control">
                    <label> State: </label>
                    <input type="text" placeholder="Username:">
                </div>
                <input type="text" class="btn-green" placeholder="USER REGISTER">
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <p> Search existent user </p>
        <p><input type="text" placeholder="search"></p>
        <p><input type="text" name="search_result"></p>
    </div>
    <div class="col-md-12">
        <div class="legend">
            <p>Legend</p>
            <p>
                SUPERADMIN(GENERAL): User with all permissions and access to all sections of the application. Is the
                only
                user able to delete users, clients, contacts, etc.
                SUPERADMIN (BCN): Usuario con restricciones de permisos, clientes unicamente del grupo de BARCELONA, sin
                acceso a las estadísticas, historal de acciones ni partners.
                SUPERADMIN (KIEV): Usuario con restricciones de permisos, clientes unicamente del grupo de KIEV, sin
                acceso
                a las estadísticas, historal de acciones ni partners.
                SUPERADMIN (CONSULTOR): Usuario con restricciones de permisos, sin acceso a las estadísticas, historal
                de
                acciones, partners ni los datos de facturación del cliente.
                ADMIN: User with access to the contact section, requests for completion, SEO, partners, agenda and
                customer
                billing.
                GESTOR: User with access only to the list of clients that he has assigned. He is in charge of managing
                the
                files.
                REGISTRADOR: User with access to customer registration and modify customers.
                RECEPCION: User with access to contact registration and modify contacts.
                COMERCIAL: User with access only to the contact registration, modify contacts and requests for
                information
                section.
                SEO: User who manages SEO cases with access to clients who have been opened an active SEO case.
                REGISTRADOR SEO: User who can confirm or deny requests for a client to have an active SEO case.
                PARTNER: User who has access only to customers whose partner is the same as the user.
            </p>
        </div>
    </div>
@endsection

<script type="">
    $("search").change(function () {
        // this.val  parse search input //

        var request = $.ajax({
            url: "{{route("/usermanagement/new")}}",
            method: "POST",
            data: {view: 'view'},
            dataType: "json"
        });
        request.done(function (view) {
            $("#html").html(view);
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
