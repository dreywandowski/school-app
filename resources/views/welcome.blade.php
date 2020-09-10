@extends('layout.app')

@section('content')
    
    <div class="topnav">
  <a class="active" href="#home">HOME</a>
   <a href="#about">ABOUT</a>
  <a href="#contact">CONTACT</a>
 
</div>

        <div class="first-content"><p><center><b> <h1>SCHOOLIFY</h1></b>
     
    Our app automates the processess involved in school.<br>
Accept payments, upload course material, take/grade exams, etc.<br>
Its a full package! Lorem ipsum dolor sit amet, consectetur adipiscing elit.
 Mauris mi dui, ornare nec accumsan eu, viverra vel neque. Nullam congue lorem risus, nec vehicula turpis posuere ac. 
Aliquam feugiat nulla ut est vehicula pharetra. Praesent ac tincidunt dui, non pulvinar sapien. Quisque fringilla mi nec egestas euismod</b></center></p></div><br/><br>
</center></p>

<a href="/login">Login</a> | 
<a href="/register">Register</a>


<div class="second-content">
    <img id='img' src="/img/stud.jpg">
</div>



    @endsection