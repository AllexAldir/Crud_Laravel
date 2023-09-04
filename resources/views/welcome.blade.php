<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>loginPage</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset ('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

<body class="login-page" style="min-height: 469.383px;">
    <div class="login-box">

        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="../../index2.html" class="h1">Fantasia</a>
            </div>
            <div class="card-body">
                {{-- <p class="login-box-msg">começar</p> --}}
                <form action="{{url('produtos')}}" method="POST">
                    @csrf
                    <!-- {{ csrf_field() }} -->
                    <div class="input-group mb-3">
                        <input name="emailUser" type="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input name="passworUser" type="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            {{-- <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div> --}}
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                        </div>

                    </div>
                </form>
                {{-- <div class="social-auth-links text-center mt-2 mb-3">
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                    </a>
                </div> --}}

                <p class="mb-1">
                    <a href="forgot-password.html">Esqueci a senha</a>
                </p>
                <p class="mb-0">
                    <a href="{{url('register')}}" class="text-center">Cadastra-se</a>

                </p>
                <span style="color: red">{{session('mensagem')}}</span>
            </div>

        </div>

    </div>


    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>

    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('dist/js/adminlte.min.js?v=3.2.0')}}"></script>

    {{-- <script src="{{asset('dist/login.js')}}"></script> --}}
</body>

</html>
