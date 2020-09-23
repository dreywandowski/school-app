<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&family=Noto+Sans+KR&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/login.css">
    <title>LOGIN</title>
</head>
<body>
    <div class="container">
        <div class="container-ii">
        <header>
            <div class="logo">
                <a href="/school/"><h2>DREY COLLEGE</h2></a>
                <a href="/school/"><img src="/img/drey42.jpg" alt=""></a>
            </div>

            <div class="today"><p>DD/MMM/YYYY<p></div>

            <div class="header-text">
                <h1>School Portal</h1>
            </div>
            <div class="other-object">
                <p>Other stuff goes in here...</p>
            </div>
        </header>

        <div class="mainForm">
            <div class="form">
                <h4>Enter your credentials</h4>
                <form name="sign-in" class="sign-in" action="{{ route('login') }}" method="POST">
                      @csrf

                    <div class="input-form">
                        <i class="fa fa-user icon"></i><input type="email" id="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="e-mail" placeholder="Enter Email Address">
                         @error('email')
                                    <span  role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                    </div>
                    <div class="input-form">
                        <i class="fa fa-key icon"></i><input type="password" id="password" class="login-pwd" placeholder="Enter Password"  name="password" required autocomplete="current-password">   

                        @error('password')
                                    <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                    </div>
                    <div class="input-form" id="rem-box">
                        <label class="rem-me"><input type="checkbox" name="remember" class="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>Remember me</label>
                        <label class="pwd">
                    </div>
                    <p></p>
                    <button class="login">Sign In 
                    {{ __('Login') }}
                </button>

                 @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif


                </form>
                <p class="form-footer">Don't have an account? <a href="register.html">Register here.</a></p>
            </div>
        
        </div>
            
        <footer class="footer">
            <p>Copyright &COPY; ADURAMIMO, 2020.</p>
        </footer>
    </div>
    </div>
</body>
</html>




<!--
@extends('layout.app')
 <link rel="stylesheet" href="/css/login.css">

@section('content')




<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" class="sign-in"  action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br> <br>

    <a href="/school/"> Go Home</a>

@endsection
