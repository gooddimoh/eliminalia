@extends('layouts.default')

@section('title', 'USER MANAGEMENT')

@push('css')
    <link href="/assets/plugins/summernote/dist/summernote.css" rel="stylesheet"/>
@endpush

@section('content')
    <div class="inputs">
        <div class="col-md-8">
            <div class="line">
                <select class="clientes-listado8" name="year12" onchange="bc(true)">
                    <option value="TODOS" selected="">Todos</option>
                    <option value="0000">0000</option>
                    <option value="2013">2013</option>
                </select>
                <select class="clientes-listado8" name="year12" onchange="bc(true)">
                    <option value="TODOS" selected="">Todos</option>
                    <option value="0000">0000</option>
                    <option value="2013">2013</option>
                </select>
                <select class="clientes-listado8" name="year12" onchange="bc(true)">
                    <option value="TODOS" selected="">Todos</option>
                    <option value="0000">0000</option>
                    <option value="2013">2013</option>
                </select>
                <select class="clientes-listado8" name="year12" onchange="bc(true)">
                    <option value="TODOS" selected="">Todos</option>
                    <option value="0000">0000</option>
                    <option value="2013">2013</option>
                </select>
            </div>
            <div class="line">
                <select class="clientes-listado8" name="year12" onchange="bc(true)">
                    <option value="TODOS" selected="">Todos</option>
                    <option value="0000">0000</option>
                    <option value="2013">2013</option>
                </select> <select class="clientes-listado8" name="year12" onchange="bc(true)">
                    <option value="TODOS" selected="">Todos</option>
                    <option value="0000">0000</option>
                    <option value="2013">2013</option>
                </select> <select class="clientes-listado8" name="year12" onchange="bc(true)">
                    <option value="TODOS" selected="">Todos</option>
                    <option value="0000">0000</option>
                    <option value="2013">2013</option>
                </select> <select class="clientes-listado8" name="year12" onchange="bc(true)">
                    <option value="TODOS" selected="">Todos</option>
                    <option value="0000">0000</option>
                    <option value="2013">2013</option>
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <select class="clientes-listado8" name="year12" onchange="bc(true)">
                    <option value="TODOS" selected="">Todos</option>
                    <option value="0000">0000</option>
                    <option value="2013">2013</option>
                </select>
                <select class="clientes-listado8" name="year12" onchange="bc(true)">
                    <option value="TODOS" selected="">Todos</option>
                    <option value="0000">0000</option>
                    <option value="2013">2013</option>
                </select>
                <select class="clientes-listado8" name="year12" onchange="bc(true)">
                    <option value="TODOS" selected="">Todos</option>
                    <option value="0000">0000</option>
                    <option value="2013">2013</option>
                </select>
                <select class="clientes-listado8" name="year12" onchange="bc(true)">
                    <option value="TODOS" selected="">Todos</option>
                    <option value="0000">0000</option>
                    <option value="2013">2013</option>
                </select>
            </div>
            <div class="row">
                <input type="text"><input type="text"><input type="text"><input type="text">
            </div>
        </div>
    </div>

    <table>
        <tr>
            <td>
                Num. cliente
            </td>
            <td>
                Nombre y Apellidos
            </td>
            <td>
                Empresa Fecha Alta
            </td>
            <td>
                Fecha Baja
            </td>
            <td>
                Enlaces Perfil
            </td>
            <td>
                Estado
            </td>
        </tr>
        <tr>
            <td>
                172260 VOORDEWIND,
            </td>
            <td>
                CAREL JAN LOUIS
            </td>
            <td>
                Cliente particular
            </td>
            <td>
                2017-01-27
            </td>
            <td>
                ---
            </td>
            <td>
                100%
            </td>
            <td>
                100%
            </td>
            <td>
                P. PAGO
            </td>
            <td>
                MOD
            </td>
            <td>
                SEG
            </td>
            <td>
                GES
            </td>
            <td>
                CLI
            </td>
            <td>
                HIS
            </td>
            <td>
                FAC
            </td>
        </tr>
    </table>
    <div class="pagination">
        <span> << </span><span> < </span>
        <span>1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18</span>
        <span> > </span><span> >> </span>
    </div>
    <div class="legend">
        Leyenda
        <p>Activos: Clientes en curso actualmente.</p>
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
    let name, email, phone, city, response;
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
            response.forEach(myFunction);

            function myFunction(item) {
                item.id;
                item.name;
                item.email;
                item.password;
                item.approved;
                item.id;

            }
        }
    });
</script>
@push('scripts')
    <script src="/assets/plugins/summernote/dist/summernote.min.js"></script>
    <script src="/assets/js/demo/form-summernote.demo.js"></script>
@endpush
