@extends('layouts.default')
@section('title', 'NEW USER MANAGEMENT')
@push('css')
    <link href="{{asset('assets/plugins/summernote/dist/summernote.css')}}" rel="stylesheet"/>
@endpush

@section('content')
    <form method="post" action="{{route('contacts.registration')}}" class="col-xl-12">
        @csrf
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-3">
                <h4>New User Data</h4>
                <div class="form-group row">
                    <label class="col-form-label">Username:</label>
                    <input class="form-control form-control-sm" type="text" name="username" placeholder="Username:" value="">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Name:</label>
                    <input class="form-control form-control-sm" type="text" name="name" placeholder="Name:" value="">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Phone:</label>
                    <input class="form-control form-control-sm" type="text" name="phone" placeholder="Phone:" value="">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">DNI:</label>
                    <input class="form-control form-control-sm" type="text" name="dni" placeholder="DNI:" value="">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Address:</label>
                    <input class="form-control form-control-sm" type="text" name="address" placeholder="Address:" value="">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">City:</label>
                    <input class="form-control form-control-sm" type="text" name="city" placeholder="City:" value="">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Permission Level:</label>
                    <select class="form-control form-control-sm" name="name" value="">
                        <option value="0">SUPERADMIN:</option>
                        <option value="1">ADMIN SUCURSAL:</option>
                        <option value="1">ALTA CONTRATOS</option>
                        <option value="1">RASTREADOR</option>
                        <option value="1">COMERCIAL</option>
                        <option value="1">PARTNER</option>
                        <option value="1">MANAGER</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <h4>&nbsp;</h4>
                <div class="form-group row">
                    <label class="col-form-label ">Password:</label>
                    <input class="form-control form-control-sm" type="text" value="" name="password"  placeholder="Password:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label ">Surname:</label>
                    <input class="form-control form-control-sm" type="text" value="" name="surname" placeholder="Surname:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Email:</label>
                    <input class="form-control form-control-sm" type="text" value="" name="email" placeholder="Email (main)*:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">ID:</label>
                    <input class="form-control form-control-sm" type="text" value="" name="id" placeholder="ID:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">Postal code:</label>
                    <input class="form-control form-control-sm" type="text" value="" name="postalcode" placeholder="Postal code:">
                </div>
                <div class="form-group row">
                    <label class="col-form-label">State:</label>
                    <input class="form-control form-control-sm" type="text" value="" name="state" placeholder="State:">
                </div>
                <div class="form-group row ">
                    <div class="row-align-right">
                        <button type="submit" class="form-control btn btn-green m-t-40 m-l-40"
                                style="margin-left:130px!important; margin-top:34px!important; border-radius:0px!important; padding-top:8px">
                            CONTACT REGISTER
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ui-sortable">
                <h1>Search existent user</h1>
                <div class="panel" data-sortable-id="table-basic-7" data-init="true" style="">
                    <!-- begin panel-heading -->
                    <div class="panel-heading ui-sortable-handle">
                        <h4 class="panel-title">List of all Users<span
                                    class="label label-success m-l-5 t-minus-1"> NEW </span></h4>
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default
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
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-body">
                        <p>Time Line</p>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="legend">
        <h1>Legend</h1>
        <p>
        <p>SUPERADMIN; Acceso total a la app</p>
        <p>ADMIN SUCURSAL: Puede ver clientes de esa sucursal, comerciales de esa sucursal, partners de esa sucursal y
            facturación de de los clientes de esa sucursal. (Ver me refiero a ver y modificar) cualquier Eliminación que
            quiera hacer llega siempre a SUPER ADMIN. El admin de sucursal puede ver toda la cola de rastreos que están
            pedidas al rastreador.</p>
        <p>ALTA CONTRATOS: Solo puede dar de clientes y generar contratos en .pdf, modificar clientes, pero
            evidentemente solamente de la sucursal a a que está asignado.</p>
        <p>
            RASTREADOR: Solo hacer rastreos y añadir rastreos al sistema. Es como una cola de pedidos, los comerciales
            asignados a este rastreador, le piden rastros y el responde con los links. Esto tiene que funcionar como una
            cola de pedidos; el comercial o rastreador piden un rastreo y llega el aviso al rastreador, cuando el
            rastreador completa el rastreo le llega una viso a la persona que le había pedido el rastreo. Cuando doy de
            alta un rastreador tengo que decir a que persona asigno ese rastreador. (A que comercial y parteras)
        </p>
        <p>COMERCIAL: Puede añadir contactos y estos convertirlos a clientes, ver facturación de sus clientes, ver
            estado de clientes como si fuera un manager, pero no puede ver las gestiones internas. Tiene que poder hacer
            contactos y contratos y poner más de un contrato a un cliente. Tiene que poder hacer seguimiento a todos los
            rastreos que el comercia envíe a usuario RASTREADOR.</p>
        <p>PARTNER; Puede ver los clientes de sus comerciales, su facturación y cómo avanza el expediente como si fuera
            manager pero sin ver gestiones internas.</p>
        <p>MANAGER: Puede ver todos sus clientes, hacer gestiones internas, publicas, subir documentos. Finalizar un
            cliente, Rescindir un cliente. No puede ver facturación, tampoco puede modificar los datos de un cliente, ni
            eliminar un cliente. Cuando un cliente se pone pendiente de pago, tiene que llegar una aviso al "comercial
            de ese cliente e Partner si lo tuviera" también al admin de la sucursal. ¿Quién puede decir si el pago ya
            está recibido o no? Solo el SUPER ADMIN.</p>
    </div>
@endsection
<script>
    $("search").change(function () {
        let data = "data";
        var request = $.ajax({
            url: "{{route("usermanagement.new")}}",
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
