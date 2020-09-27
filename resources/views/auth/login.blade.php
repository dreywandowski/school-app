@extends('layout.application')

@section('content')
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
                <h1>Online Portal</h1>
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
                        <i class="fa fa-user icon"></i><input type="text" id="username"  name="username" required autocomplete="username" autofocus class="e-mail" placeholder="Enter Username">
                         @error('username')
                                    <span  role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                    </div>

                    <!--
                    <div class="input-form">
                        <i class="fa fa-user icon"></i><input type="email" id="email" value="{{ old('email') }}" name="email" required autocomplete="email" autofocus class="e-mail" placeholder="Enter Email Address">
                         @error('email')
                                    <span  role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                    </div>-->

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
                    <button class="login">
                    {{ __('Login') }}
                </button>

                 <br><br>
                 @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                         <i> Forgot Your Password?</i>
                                    </a>
                                @endif
                            


                </form>
                <br><br>
                <h3><p class="form-footer">Don't have an account? <a href="register">Register here</a></p></h3>
            </div>
        
        </div>
            
      @endsection




