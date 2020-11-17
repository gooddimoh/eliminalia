<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('includes.head')
</head>
@php
    $bodyClass = (!empty($boxedLayout)) ? 'boxed-layout' : '';
    $bodyClass .= (!empty($paceTop)) ? 'pace-top ' : '';
    $bodyClass .= (!empty($bodyExtraClass)) ? $bodyExtraClass . ' ' : '';
    $sidebarHide = (!empty($sidebarHide)) ? $sidebarHide : '';
    $sidebarTwo = (!empty($sidebarTwo)) ? $sidebarTwo : '';
    $sidebarSearch = (!empty($sidebarSearch)) ? $sidebarSearch : '';
    $topMenu = (!empty($topMenu)) ? $topMenu : '';
    $footer = (!empty($footer)) ? $footer : '';

    $pageContainerClass = (!empty($topMenu)) ? 'page-with-top-menu ' : '';
    $pageContainerClass .= (!empty($sidebarRight)) ? 'page-with-right-sidebar ' : '';
    $pageContainerClass .= (!empty($sidebarLight)) ? 'page-with-light-sidebar ' : '';
    $pageContainerClass .= (!empty($sidebarWide)) ? 'page-with-wide-sidebar ' : '';
    $pageContainerClass .= (!empty($sidebarHide)) ? 'page-without-sidebar ' : '';
    $pageContainerClass .= (!empty($sidebarMinified)) ? 'page-sidebar-minified ' : '';
    $pageContainerClass .= (!empty($sidebarTwo)) ? 'page-with-two-sidebar ' : '';
    $pageContainerClass .= (!empty($contentFullHeight)) ? 'page-content-full-height ' : '';

    $contentClass = (!empty($contentFullWidth) || !empty($contentFullHeight)) ? 'content-full-width ' : '';
    $contentClass .= (!empty($contentInverseMode)) ? 'content-inverse-mode ' : '';
@endphp
<body class="{{ $bodyClass }}">
@include('includes.component.page-loader')

<div id="page-container" class="page-container fade page-sidebar-fixed page-header-fixed {{ $pageContainerClass }}">

    @include('includes.header')

    @includeWhen($topMenu, 'includes.top-menu')

    @includeWhen(!$sidebarHide, 'includes.sidebar')

    @includeWhen($sidebarTwo, 'includes.sidebar-right')

    <div id="content" class="content {{ $contentClass }}">
        @yield('content')
    </div>

    @includeWhen($footer, 'includes.footer')

    @include('includes.component.theme-panel')

    @include('includes.component.scroll-top-btn')

</div>

<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js')}}"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js')}}"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js')}}"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js')}}"></script>
<script src="{{ asset('https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{ asset('https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js')}}"></script>
<script src="{{ asset('https://cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js')}}"></script>
<script src="{{ asset('https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js')}}"></script>
<script src="{{ asset('https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js')}}"></script>
<script src="{{ asset('https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js')}}"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js')}}"></script>
<script src="{{ asset('https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js')}}"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js')}}"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js')}}"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js')}}"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js')}}"></script>

@include('includes.page-js')
</body>
</html>
