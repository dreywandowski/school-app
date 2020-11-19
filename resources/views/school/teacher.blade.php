@extends('layout.dashboard')

@section('content')

 <p> {{session('msg')}}</p>

     <title>Student Dashboard</title>
</head>
<body>


     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
    <div class="mainContainer">

        <div class="headerContent">
            <header>
                <h2 class="top">My Portal</h2>
                <a href="javascript:void(0);" class="menu-icon" onclick="menuFunction()"><i class="fas fa-bars"></i></a>
            </header>
        </div>


        <div class="left-nav">
            <div class="user-summary">
                <div class="profile-picture">

                    <img src= "{{ Auth::user()->file_path }}" alt="profile pic">
                </div>
                <div class="userName">
                    <p class="mainUserName">{{ Auth::user()->name }}</p> 
                    <p class="userFooter">Student Username: {{ Auth::user()->username }}</p>
                    <p class="update" id="pic"><a href="#"> Change Profile Picture
                        <i class="fas fa-user-edit"></i>
                    </a></p>
                </div>
            </div>

            <form id="picForm" style="display: none;" action="/school/pic" method="POST" enctype="multipart/form-data">
                 @csrf
        <input type="file" id="actual_img" name="image">
        <!--<input type="text" id="text" name="text">-->
        <input type="submit" id="picture" value="Upload File">
    </form>

            <hr>
            <div class="quickLinks">
                <a href="/school/fees">Upload Lecture Notes</a>
                <a href="#">Upload Exam Questions</a>
                <a href="#">Reset Password</a>
               
                <p>&nbsp;</p>
                <p>&nbsp;</p>
            </div>
        </div>

    


<script type="text/javascript" src="/js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="/js/picture.js"></script>


@endsection





