<!DOCTYPE html>
<html dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{!! asset('assets/images/favicon.png') !!}">
    <title>Login</title>
    <link href="{!! asset('css/style.css') !!}" rel="stylesheet">
</head>
<body>
<div class="main-wrapper">
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
        <div class="auth-box bg-dark border-top border-secondary">
            <div id="loginform">
                <div class="text-center">
                    <span class="db admin-style">ADMIN PANEL</span>
                </div>
                <!-- Form -->
                <form class="form-horizontal m-t-20" id="loginform" method="post" action="{!! route('login') !!}">
                    @csrf
                    <div class="row p-b-30">
                        <div class="col-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-success text-white" id="basic-addon1"><i
                                            class="ti-user"></i></span>
                                </div>
                                <input type="email" name="email" class="form-control form-control-lg"
                                       placeholder="E-Mail" aria-label="Username" aria-describedby="basic-addon1"
                                       required>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-warning text-white" id="basic-addon2"><i
                                            class="ti-pencil"></i></span>
                                </div>
                                <input type="password" name="password" class="form-control form-control-lg" placeholder="Password"
                                       aria-label="Password" aria-describedby="basic-addon1" required>
                            </div>
                        </div>
                    </div>
                    <div class="row border-top border-secondary">
                        <div class="col-12">
                            <div class="form-group">
                                <div class="p-t-20 text-center">
                                    <button class="btn btn-success p-r-40 p-l-40 font-weight-bold font-24"
                                            type="submit">Login
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                {!! $errors->first('email', '<p class="help-block text-danger font-18">:message</p>') !!}
            </div>
        </div>
    </div>
</div>
<script src="{!! asset('assets/libs/jquery/dist/jquery.min.js') !!}"></script>
<script src="{!! asset('assets/libs/popper.js/dist/umd/popper.min.js') !!}"></script>
<script src="{!! asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') !!}"></script>
</body>
</html>
