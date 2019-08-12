


@section('css-imports')
    <link href="{!! asset('assets/libs/flot/css/float-chart.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/style.css') !!}" rel="stylesheet">
    <link href="{!! asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css?=1') !!}" rel="stylesheet">
@endsection


@section("js-imports")
    <script src="{!! asset('assets/libs/jquery/dist/jquery.min.js') !!}"></script>
    <script src="{!! asset('assets/libs/popper.js/dist/umd/popper.min.js') !!}"></script>
    <script src="{!! asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') !!}"></script>
    <script src="{!! asset('assets/extra-libs/sparkline/sparkline.js') !!}"></script>
    <script src="{!! asset('js/waves.js') !!}"></script>
    <script src="{!! asset('js/sidebarmenu.js') !!}"></script>
    <script src="{!! asset('js/custom.min.js') !!}"></script>
    <script src="{!! asset('assets/libs/flot/excanvas.js') !!}"></script>
    <script src="{!! asset('assets/libs/flot/jquery.flot.js') !!}"></script>
    <script src="{!! asset('assets/libs/flot/jquery.flot.pie.js') !!}"></script>
    <script src="{!! asset('assets/libs/flot/jquery.flot.time.js') !!}"></script>
    <script src="{!! asset('assets/libs/flot/jquery.flot.stack.js') !!}"></script>
    <script src="{!! asset('assets/libs/flot/jquery.flot.crosshair.js') !!}"></script>
    <script src="{!! asset('assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js') !!}"></script>
    <script src="{!! asset('js/pages/chart/chart-page-init.js') !!}"></script>
@endsection
