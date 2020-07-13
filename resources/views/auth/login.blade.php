@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        {{-- <title>Wisata Tegal</title> --}}
        <link href="/sbadmin/dist/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Admin Wisata</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input id="inputEmailAddress" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus type="email" placeholder="Enter email address" />

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                 @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input id="inputPassword"  class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" type="password" placeholder="Enter password" />

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}/>
                                                    <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                                </div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                @if (Route::has('password.request'))
                                                    <a class="small" href="{{ route('password.request') }}">Forgot Password?</a>
                                                @endif
                                                <button type="submit" class="btn btn-primary">
                                                   Login
                                                </button>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-4 col-md-12">
                                                    <a href="{{ url('/auth/google') }}" class="small"><i class="fab fa-google"></i> Sign In With Google</a><br>
                                                    <a href="{{ url('/auth/github') }}" class="small"><i class="fab fa-github"></i>Sign In With Gitub</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small">
                                            <a href="{{ route('register') }}">Need an account? Sign up!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Website Wisata Tegal 2020</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="/sbadmin/dist/js/jquery-3.4.1.min.js"></script>
        <script src="/sbadmin/dist/js/bootstrap.bundle.min.js"></script>
        <script src="/sbadmin/dist/js/scripts.js"></script>
    </body>
</html>
@endsection
