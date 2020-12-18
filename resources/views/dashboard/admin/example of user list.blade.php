@extends('layouts.default')

@section('title', 'Example Of User List')

@push('css')
    <link href="{{ asset('/assets/plugins/summernote/dist/summernote.css')}}" rel="stylesheet"/>
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
@push('scripts')
    <script src="/assets/plugins/summernote/dist/summernote.min.js"></script>
    <script src="/assets/js/demo/form-summernote.demo.js"></script>
@endpush
