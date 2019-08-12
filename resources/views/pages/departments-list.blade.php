@extends('inc.app')

@section('title', "Department list")

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
                <div class="table-responsive">
                    @if (session('message'))
                        <div class="alert-success alert">
                            {{ session('message') }}
                        </div>
                    @endif
                    @isset($departments)
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Department name</th>
                                <th>Description</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($departments as $department)
                                <tr>
                                    <td>{{$department->id}}</td>
                                    <td>{{$department->name}}</td>
                                    <td>{{$department->description}}</td>
                                    <td>
                                        <a href="{!! url("department/edit/{$department->id}") !!}"
                                           class="btn btn-facebook">EDIT</a>
                                    </td>
                                    @if (\Illuminate\Support\Facades\Auth::user()->role_id < \App\Constants\RoleConstants::ROLE_MANAGER)
                                        <td>
                                            <a href="{!! url("department/delete/{$department->id}") !!}"
                                               class="btn btn-danger">DELETE</a>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endisset
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="align-content-center">{{$departments->links()}}</div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer text-center">
        All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
    </footer>
    </div>
    <script src="{!! asset('assets/libs/jquery/dist/jquery.min.js') !!}"></script>
    <script src="{!! asset('assets/libs/popper.js/dist/umd/popper.min.js') !!}"></script>
    <script src="{!! asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') !!}"></script>
    <script src="{!! asset('assets/extra-libs/sparkline/sparkline.js') !!}"></script>
    <script src="{!! asset('js/waves.js') !!}"></script>
    <script src="{!! asset('js/sidebarmenu.js') !!}"></script>
    <script src="{!! asset('js/custom.min.js') !!}"></script>
    </body>
    </html>
@endsection
