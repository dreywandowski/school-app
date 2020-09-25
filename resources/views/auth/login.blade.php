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
                        <i class="fa fa-user icon"></i><input type="email" id="email" value="{{ old('email') }}" name="email" required autocomplete="email" autofocus class="e-mail" placeholder="Enter Email Address">
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
                    <button class="login">
                    {{ __('Login') }}
                </button>

                 @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif


                </form>
                <p class="form-footer">Don't have an account? <a href="register">Register here.</a></p>
            </div>
        
        </div>
            
        <footer class="footer">
            <p>Copyright &COPY; ADURAMIMO, 2020.</p>
        </footer>
    </div>
    </div>

    <br><br>
    <a href="/school/"> Go Home</a>
</body>
</html>




