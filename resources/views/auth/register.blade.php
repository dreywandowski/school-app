@extends('layout.application')

@section('content')
    <title>REGISTER</title>
</head>
<body>
    <div class="container">
        <div class="container-ii">
        <header>
            <div class="logo">
                <a href="/school"><h2></h2></a>
                <a href="/school"><img src="/img/drey42.jpg" alt=""></a>
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
                <h3>Sign up here</h3>
                <form name="register" class="register" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="input-form">
                        <input type="text" class="frstName form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full Name" required>

                        <br>  @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                   
                    <div class="input-form">
                        <select name="gender" id="gender">
                            <option value="none">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Prefer not to say</option>
                        </select>
                    </div>


                    <div class="input-form">
                        <input type="email" class="e-mail form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Enter Email Address" required>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                    <div class="input-form">
                        <select name="role" id="acctType">
                            <option value="">Choose account type</option>
                            <option value="student">Student</option>
                            <option value="teacher">Teacher</option>
                            
                        </select>
                    </div>


                    <div class="input-form">
                        <input type="text" class="user" name="username" placeholder="Preferred Username" required>
                        @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                
                    </div>

                    <div class="input-form">
                        <input type="password" class="login-pwd form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter Password" required>      @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                
                    </div>


                    <div class="input-form">
                        <input type="password" class="login-pwd" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" required>
                    </div>
                    <div class="input-form" id="consent">
                        <label class="consent"><input type="checkbox" class="remember" required>I accept the terms and conditions of use</label>
                    </div>
                    <p></p>
                    <button class="login" type="submit">
                    {{ __('Register') }}</button>
                </form>
                <p class="form-footer">Have an account already? <a href="/login">Sign in here.</a></p>
            </div>
        
        </div>
           @endsection





