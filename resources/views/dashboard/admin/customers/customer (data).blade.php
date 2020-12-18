@extends('layouts.default')
@section('title', 'Basic Tables')

@push('css')
    <link href="{{'assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css'}}" rel="stylesheet"/>
    <link href="{{'assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css'}}" rel="stylesheet"/>
    <link href="{{'assets/plugins/ion-rangeslider/css/ion.rangeSlider.min.css'}}" rel="stylesheet"/>
    <link href="{{'assets/plugins/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css'}}" rel="stylesheet"/>
    <link href="{{'assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css'}}" rel="stylesheet"/>
    <link href="{{'assets/plugins/@danielfarrell/bootstrap-combobox/css/bootstrap-combobox.css'}}" rel="stylesheet"/>
    <link href="{{'assets/plugins/bootstrap-select/dist/css/bootstrap-select.min.css'}}" rel="stylesheet"/>
    <link href="{{'assets/plugins/tag-it/css/jquery.tagit.css'}}" rel="stylesheet"/>
    <link href="{{'assets/plugins/bootstrap-daterangepicker/daterangepicker.css'}}" rel="stylesheet"/>
    <link href="{{'assets/plugins/select2/dist/css/select2.min.css'}}" rel="stylesheet"/>
    <link href="{{'assets/plugins/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css'}}" rel="stylesheet"/>
    <link href="{{'assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css'}}" rel="stylesheet"/>
    <link href="{{'assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.css'}}" rel="stylesheet"/>
    <link href="{{'assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker-fontawesome.css'}}" rel="stylesheet"/>
    <link href="{{'assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker-glyphicons.css'}}" rel="stylesheet"/>
@endpush

@section('content')
    <div class="heading">
        <h1>CUSTOMER DATA</h1>
    </div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
@endsection

@push('scripts')
    <script src="{{'assets/plugins/highlight.js/highlight.min.js'}}"></script>
    <script src="{{'assets/js/demo/render.highlight.js'}}"></script>
    <script src="{{'assets/plugins/jquery-migrate/dist/jquery-migrate.min.js'}}"></script>
    <script src="{{'assets/plugins/moment/moment.js'}}"></script>
    <script src="{{'assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js'}}"></script>
    <script src="{{'assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js'}}"></script>
    <script src="{{'assets/plugins/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js'}}"></script>
    <script src="{{'assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js'}}"></script>
    <script src="{{'assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js'}}"></script>
    <script src="{{'assets/plugins/pwstrength-bootstrap/dist/pwstrength-bootstrap.min.js'}}"></script>
    <script src="{{'assets/plugins/@danielfarrell/bootstrap-combobox/js/bootstrap-combobox.js'}}"></script>
    <script src="{{'assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js'}}"></script>
    <script src="{{'assets/plugins/tag-it/js/tag-it.min.js'}}"></script>
    <script src="{{'assets/plugins/bootstrap-daterangepicker/daterangepicker.js'}}"></script>
    <script src="{{'assets/plugins/select2/dist/js/select2.min.js'}}"></script>
    <script src="{{'assets/plugins/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js'}}"></script>
    <script src="{{'assets/plugins/bootstrap-show-password/dist/bootstrap-show-password.js'}}"></script>
    <script src="{{'assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js'}}"></script>
    <script src="{{'assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.js'}}"></script>
    <script src="{{'assets/plugins/clipboard/dist/clipboard.min.js'}}"></script>
    <script src="{{'assets/js/demo/form-plugins.demo.js'}}"></script>
@endpush
