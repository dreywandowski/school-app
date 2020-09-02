
<?php
 session_start();
 ?>


<!doctype html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> School Management System</title>
        <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="index.css">

<script type="text/javascript" src="jquery-3.2.1.js"></script>
<script type="text/javascript" src="ajax.js"></script>
</head>


<body id="all">

    <p><center><b> Welcome to the online attendance management system for
        students and staff<br/><br>
</center></p>


    <div>
        <p> <h3> Please login here</h3>
    <button id="log"> Login</button>
    
</div>

<p id="result">  </p>


<form id="login" action="validate_login.php"  method="POST">
    <label for="User Name"><h3> User Name </h3></label>
    <input type="text" id="user" name="username"  placeholder="user_name" class="first_name"  required><br><br>

<label for="Password"><h3> Password</h3></label>
    <input type="password" id="passd" name="password"  placeholder="password" class="password"  required><br>
    <span id="ajax"></span>
    
     
<br>
    <br>

    <button type="submit"  name="sub" onclick="valuation()" id="login_user"> Login</button>
<p> Have no account yet?  
<button id="reg"> Create new account</button></p>

<a href="forgot_pwd.php"> Forgot Password? </a><br>
</form>




<!--  register form -->
<form action="redirect.php" enctype="multipart/form-data" method="POST" class="hidden" name="reg" id="register">
        <div>
        <h3><u> Sign Up Form</u></h3>
    </div>
    <label>Name</label><br>
        <input type="text" name="first_name" placeholder="first name" class="first_name"  required><br>
        <input type="text" name="last_name" placeholder="last name" required>
        <br>
        <br>
    <label> E-mail</label><br>
        <input type="email" name="email" placeholder="example@gmail.com" required>
        <br>
        <br>

    <label>Create a username</label><br>
        <input type="text" name="username" id="username" minlength="5" required>
        <br>
        <br>
<span id="usercheck"></span>

    
        
    <label>Create a password</label><br>
        <input class="password" id="pwd1" type="password" name="password" minlength="8" required>
        <br>
        <br>
    <label> Confirm password</label><br>
        <input type="password" id="pwd2" name="password1" minlength="8" required><br>
        <br>

    <label>Choose account type:</label><br>

    
    <input type="radio" id="teacher" name="staff_type"  value="teacher" /> Teacher
    <input type="radio" id="student" name="staff_type"  value="student"/> Student
    </div>
    <br><br>

<input type="checkbox" name="agree" required>I agree to the terms and conditions<br>
    <button id="submit" name= "all" type="submit"> Sign Up</button>

</form>


<script type="text/javascript" src="index.js"></script>

</body>


</html>
