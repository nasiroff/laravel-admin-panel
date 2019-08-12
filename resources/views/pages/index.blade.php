@extends('inc.app')

@section('title', "Home page")

@section('content')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Dashboard</h4>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">

                        <a href="">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-worker"></i></h1>
                                <h6 class="text-white">Employee</h6>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xlg-3">
                    <div class="card card-hover">
                        <a href="">
                            <div class="box bg-success text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-ungroup"></i></h1>
                                <h6 class="text-white">Departments</h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer text-center">
            All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
        </footer>
    </div>
    </div>
    <script src="{!! asset('assets/libs/jquery/dist/jquery.min.js') !!}"></script>
    <script src="{!! asset('assets/libs/popper.js/dist/umd/popper.min.js') !!}"></script>
    <script src="{!! asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') !!}"></script>
    <script src="{!! asset('js/waves.js') !!}"></script>
    <script src="{!! asset('js/sidebarmenu.js') !!}"></script>
    <script src="{!! asset('js/custom.min.js') !!}"></script>

    </body>
    </html>
@endsection
