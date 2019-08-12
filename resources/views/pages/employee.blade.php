@extends("inc.app")


@section('title', "Employee list")



@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <h5 class="card-title">Basic Datatable</h5>
                <div class="table-responsive">
                    @if (session('message'))
                        <div class="alert-success alert">
                            {{ session('message') }}
                        </div>
                    @endif
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Department</th>
                            <th>Email</th>
                            <th>Date of birth</th>
                            <th>Photo</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @isset($employees)
                            @foreach($employees as $employee)
                                <tr>
                                    <td>{{$employee->id}}</td>
                                    <td>{{$employee->first_name}}</td>
                                    <td>{{$employee->last_name}}</td>
                                    <td>{{$employee->department->name}}</td>
                                    <td>{{$employee->email}}</td>
                                    <td>{{$employee->date_of_birth}}</td>
                                    <td>
                                        <img
                                            src="{!! \Illuminate\Support\Facades\Storage::url('photos/'.$employee->photo) !!} "
                                            width="30" height="40" alt="">
                                    </td>
                                    <td>
                                        <a href="{!! url("employee/edit/{$employee->id}") !!}" class="btn btn-facebook">EDIT</a>
                                    </td>
                                    @if (\Illuminate\Support\Facades\Auth::user()->role_id < \App\Constants\RoleConstants::ROLE_MANAGER)
                                        <td>
                                            <a href="{!! url("employee/delete/{$employee->id}") !!}"
                                               class="btn btn-danger">DELETE</a>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        @endisset
                        </tbody>
                    </table>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="align-content-center">{{$employees->links()}}</div>
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
