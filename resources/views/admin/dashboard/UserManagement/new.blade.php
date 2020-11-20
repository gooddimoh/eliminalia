@extends('layouts.default')
@section('title', 'NEW USER MANAGEMENT')
@push('css')
    <link href="{{asset('assets/plugins/summernote/dist/summernote.css')}}" rel="stylesheet"/>
@endpush

@section('content')
    <form method="post" action="{{route('contacts')}}" class="col-xl-12">
        @csrf
        <h4>New user data</h4>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group row">
                    <label class="col-form-label">Username:</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Username:" value="">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Name:</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Password:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Phone:</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Email (main)*:" value="">
                </div>

                <div class="form-group row">
                    <label class="col-form-label">DNI:</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Surname:" value="">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Address:</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Address:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">City:</label>
                    <input class="form-control form-control-sm" type="text" placeholder="City:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Permission Level:</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Country*:">
                </div>
            </div>
            <div class="col-md-3">[]
                <div class="form-group row">
                    <label class="col-form-label ">Password:</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Surname:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label ">Surname:</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Phone number 2:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label ">Email:</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Email (secondary):">
                </div>
                <div class="form-group row">
                    <label class="col-form-label ">ID:</label>
                    <input class="form-control form-control-sm" type="text" value="" placeholder="Company ID:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label ">Postal code:</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Postal code:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Address:</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Commercial*:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label ">State:</label>
                    <input class="form-control form-control-sm" type="text" placeholder="State:">
                </div>
            </div>
            <div class="col-md-6">
                <div class="table-responsive">
                    <table class="table table-td-valign-middle">
                        <tbody>
                        <tr>
                            <td class="with-img">
                                <img src="../assets/img/user/user-1.jpg" class="img-rounded height-30">
                            </td>
                            <td>Nicky Almera</td>
                            <td>nicky@hotmail.com</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row-align-right">
            <br>
            <button type="submit" class="form-control btn btn-green col-md-6">CONTACT REGISTER</button>
        </div>
    </form>
    <div class="legend">
        <h1>Legend</h1>
        <p>
            SUPERADMIN(GENERAL): User with all permissions and access to all sections of the application. Is the only
            user able to delete users, clients, contacts, etc.
            SUPERADMIN (BCN): Usuario con restricciones de permisos, clientes unicamente del grupo de BARCELONA, sin
            acceso a las estadísticas, historal de acciones ni partners.
            SUPERADMIN (KIEV): Usuario con restricciones de permisos, clientes unicamente del grupo de KIEV, sin acceso
            a las estadísticas, historal de acciones ni partners.
            SUPERADMIN (CONSULTOR): Usuario con restricciones de permisos, sin acceso a las estadísticas, historal de
            acciones, partners ni los datos de facturación del cliente.
            ADMIN: User with access to the contact section, requests for completion, SEO, partners, agenda and customer
            billing.
            GESTOR: User with access only to the list of clients that he has assigned. He is in charge of managing the
            files.
            REGISTRADOR: User with access to customer registration and modify customers.
            RECEPCION: User with access to contact registration and modify contacts.
            COMERCIAL: User with access only to the contact registration, modify contacts and requests for information
            section.
            SEO: User who manages SEO cases with access to clients who have been opened an active SEO case.
            REGISTRADOR SEO: User who can confirm or deny requests for a client to have an active SEO case.
            PARTNER: User who has access only to customers whose partner is the same as the user.
        </p>
    </div>
@endsection

<script type="">
    $("search").change(function () {
        // this.val  parse search input //
        var request = $.ajax({
            url: "{{route("usermanagementnew")}}",
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
