@extends('inc.app')

@section('title', "Create employee")

@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <form action="{!! route('create.employee') !!}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            <div class="card-body">
                                <h4 class="card-title">Create new employee</h4>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">First Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="{{ old('name') }}" name="name" class="form-control" id="fname" placeholder="First Name Here">
                                        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Last Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="{{ old('last_name') }}" name="last_name" class="form-control" id="lname" placeholder="Last Name Here">
                                        {!! $errors->first('last_name', '<p class="help-block">:message</p>') !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" value="{{ old('email') }}" name="email" class="form-control" id="email1" placeholder="Email here">
                                        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="department" class="col-sm-3 text-right control-label col-form-label">Department</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="department" id="department">
                                            <option value="">Select one</option>
                                            @foreach($departments as $department)
                                                <option @if(old('department') == $department->id) selected @endif value="{{ $department->id }}">{{$department->name}}</option>
                                            @endforeach
                                        </select>
                                        {!! $errors->first('department', '<p class="help-block">:message</p>') !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Phone</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="{{ old('phone') }}" name="phone" class="form-control" id="cono1" placeholder="Contact No Here">
                                        {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Date of birth</label>
                                    <div class="col-sm-9">
                                        <input type="date" value="{{ old('date_of_birth') }}" name="date_of_birth" class="form-control" id="cono1" placeholder="Date of birth here">
                                        {!! $errors->first('date_of_birth', '<p class="help-block">:message</p>') !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="photo" class="col-sm-3 text-right control-label col-form-label">Photo</label>
                                    <div class="col-sm-9">
                                        <input type="file" accept=".jpg, .jpeg, .png" name="photo" class="form-control" id="photo" placeholder="Contact No Here">
                                        {!! $errors->first('photo', '<p class="help-block">:message</p>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </div>
                            </div>
                        </form>
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
