<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>{{ $title ?? 'Page Title' }}</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="ArchitectUI HTML Bootstrap 4 Dashboard Template">

    <meta name="msapplication-tap-highlight" content="no">
    <link href="assets/css/main.min.css" rel="stylesheet">
</head>

<body>
  <div class="flash-data-success" data-flashdata-success="{{ session('success') }}"></div>
  <div class="flash-data-error" data-flashdata-error="{{ session('error') }}"></div>
  <div class="flash-data-warning" data-flashdata-warning="{{ session('warning') }}"></div>
    <div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100 bg-plum-plate bg-animation">
                <div class="d-flex h-100 justify-content-center align-items-center">
                    <div class="mx-auto app-login-box col-md-8">
                        <div class="app-logo-inverse mx-auto mb-3"></div>
                        <div class="modal-dialog w-50 mx-auto">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="h5 modal-title text-center">
                                        <h4 class="mt-2">
                                            <div>Welcome back,</div>
                                            <span>Please sign in to your account below.</span>
                                        </h4>
                                    </div>
                                    <form class="mx-2 py-0 my-0" action="/login" method="POST">
                                      @csrf
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <label for="email"><b>Email</b></label>
                                                <div class="position-relative form-group">
                                                    <input name="email" id="email"
                                                        placeholder="Input Email here..." type="text"
                                                        class="form-control" @required(true)>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="password"><b>Password</b></label>
                                                <div class="position-relative form-group">
                                                    <input name="password" id="password"
                                                        placeholder="Input Password here..." type="password"
                                                        class="form-control" @required(true)>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="position-relative form-check">
                                            <input name="check" id="exampleCheck" type="checkbox"
                                                class="form-check-input">
                                            <label for="exampleCheck" class="form-check-label">Keep me logged in</label>
                                        </div> --}}
                                        <div class="divider"></div>
                                        <h6 class="mb-0">No account? <a href="javascript:void(0);"
                                                class="text-primary">Sign up now</a></h6>
                                </div>
                                <div class="modal-footer clearfix flex justify-content">
                                    <div class="float-left">
                                        <a href="javascript:void(0);" class="btn-lg btn btn-link">
                                            << Back</a>
                                    </div>
                                    <div class="float-left">
                                        <a href="javascript:void(0);" class="btn-lg btn btn-link">Recover Password</a>
                                    </div>
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-primary btn-lg">Login</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="text-center text-white opacity-8 mt-3">Copyright © ArchitectUI 2019</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="assets/js/main.min.js"></script>
</body>

</html>
