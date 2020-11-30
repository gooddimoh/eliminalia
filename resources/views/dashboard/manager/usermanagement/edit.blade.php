@extends('layouts.default')
@section('title', 'NEW USER MANAGEMENT')
@push('css')
    <link href="{{asset('assets/plugins/summernote/dist/summernote.css')}}" rel="stylesheet"/>
@endpush

@section('content')
    <form method="post" action="{{route('contactsupdate')}}" class="col-xl-12">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <h4>New user data</h4>
                <div class="panel" data-sortable-id="table-basic-7" data-init="true" style="">
                    <div class="col-md-3">
                        <div class="form-group row">
                            <label class="col-form-label">Username:</label>
                            <input class="form-control form-control-sm" type="text" value="" name="" placeholder="Username:">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label">Name:</label>
                            <input class="form-control form-control-sm" type="text" name="" placeholder="Password:">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label">Phone:</label>
                            <input class="form-control form-control-sm" type="text" value="" name=""  placeholder="Email (main)*:" value="">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label">DNI:</label>
                            <input class="form-control form-control-sm" type="text" value="" name=""
                                   placeholder="Surname:">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label">Address:</label>
                            <input class="form-control form-control-sm" type="text" value="" name=""
                                   placeholder="Address:">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label">City:</label>
                            <input class="form-control form-control-sm" type="text" value="" name=""
                                   placeholder="City:">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label">Permission Level:</label>
                            <input class="form-control form-control-sm" type="text" value="" name=""
                                   placeholder="Country*:">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group row">
                            <label class="col-form-label ">Password:</label>
                            <input class="form-control form-control-sm" type="text" value="" name=""
                                   placeholder="Surname:">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label ">Surname:</label>
                            <input class="form-control form-control-sm" type="text" value="" name=""
                                   placeholder="Phone number 2:">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label">Email:</label>
                            <input class="form-control form-control-sm" type="text" value="" name=""
                                   placeholder="Email (secondary):">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label ">ID:</label>
                            <input class="form-control form-control-sm" type="text" value="" name=""
                                   placeholder="Company ID:">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label">Postal code:</label>
                            <input class="form-control form-control-sm" type="text" value="" name=""
                                   placeholder="Postal code:">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label ">State:</label>
                            <input class="form-control form-control-sm" type="text" value="" name=""
                                   placeholder="State:">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h1>Search existent user</h1>
                <div class="panel" data-sortable-id="table-basic-7" data-init="true" style="">
                    <!-- begin panel-heading -->
                    <div class="panel-heading ui-sortable-handle">
                        <h4 class="panel-title">List of all Users <span
                                    class="label label-success m-l-5 t-minus-1">NEW</span>
                        </h4>
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
                    <!-- end panel-heading -->
                    <!-- begin panel-body -->
                    <div class="panel-body">
                        <!-- begin table-responsive -->
                        <div class="table-responsive">
                            <table class="table table-striped m-b-0 overflow-hidden">
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td class="with-img">
                                            <img src="../assets/img/user/user-1.jpg" class="img-rounded height-30">
                                        </td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->role}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
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
            SUPERADMIN; Acceso total a la app
            ADMIN SUCURSAL: Puede ver clientes de esa sucursal, comerciales de esa sucursal, partners de esa sucursal y
            facturación de de los clientes de esa sucursal. (Ver me refiero a ver y modificar) cualquier Eliminación que
            quiera hacer llega siempre a SUPER ADMIN. El admin de sucursal puede ver toda la cola de rastreos que están
            pedidas al rastreador.
            ALTA CONTRATOS: Solo puede dar de clientes y generar contratos en .pdf, modificar clientes, pero
            evidentemente solamente de la sucursal a a que está asignado.
            RASTREADOR: Solo hacer rastreos y añadir rastreos al sistema. Es como una cola de pedidos, los comerciales
            asignados a este rastreador, le piden rastros y el responde con los links. Esto tiene que funcionar como una
            cola de pedidos; el comercial o rastreador piden un rastreo y llega el aviso al rastreador, cuando el
            rastreador completa el rastreo le llega una viso a la persona que le había pedido el rastreo. Cuando doy de
            alta un rastreador tengo que decir a que persona asigno ese rastreador. (A que comercial y parteras)
            COMERCIAL: Puede añadir contactos y estos convertirlos a clientes, ver facturación de sus clientes, ver
            estado de clientes como si fuera un manager, pero no puede ver las gestiones internas. Tiene que poder hacer
            contactos y contratos y poner más de un contrato a un cliente. Tiene que poder hacer seguimiento a todos los
            rastreos que el comercia envíe a usuario RASTREADOR.
            PARTNER; Puede ver los clientes de sus comerciales, su facturación y cómo avanza el expediente como si fuera
            manager pero sin ver gestiones internas.
            MANAGER: Puede ver todos sus clientes, hacer gestiones internas, publicas, subir documentos. Finalizar un
            cliente, Rescindir un cliente. No puede ver facturación, tampoco puede modificar los datos de un cliente, ni
            eliminar un cliente. Cuando un cliente se pone pendiente de pago, tiene que llegar una aviso al "comercial
            de ese cliente e Partner si lo tuviera" también al admin de la sucursal. ¿Quién puede decir si el pago ya
            está recibido o no? Solo el SUPER ADMIN.
        </p>
    </div>
@endsection
<script type="">
    $("search").change(function () {
        let data = "data";
        var request = $.ajax({
            url: "{{route("usermanagementnew")}}",
            method: "post",
            data: {view: 'view'},
            dataType: "html"
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