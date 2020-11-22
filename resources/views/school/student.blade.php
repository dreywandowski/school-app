@extends('layout.dashboard')

@section('content')

 <p> {{session('msg')}}</p>

     <title>Student Dashboard</title>
</head>
<body>

  <div class="mainContainer">
        <div class="headerContent" id="headerContent">
            <header>
                <div class="h2"><h1 class="top">Dashboard</h1></div>
            </header>
        </div>

        <div class="headerContent-II" id="header-content">
            <div class="profile-picture-II">
                <a class="menu-icon"><i class="fas fa-bars" id="myBtn"></i></a>
            </div>
            <div class="dashboard">
            <a href="index.html"><h2 class="">Dashboard</h2></a>
            </div>
        </div>

        <!-- Menu -->
        <div id="myMenu" class="menu">
        <div class="menu-content">

            <div class="left-nav" id="myLinks">
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

            <hr class="no-display">
                <div class="quickLinks">
                    <a href="/school/fees">Pay Fees</a>
                <a href="#">Payment History</a>
                    <hr>
                    <a href="/school/courses">Manage Courses</a>
                <a href="#">Download Courses</a>
                    <hr>
                    <a href="/school/exams">Exam Portal</a>
                <a href="#">Exam Schedule</a>
                <a href="#">Exam Results</a>
                    <hr>
                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
 </div>
            </div>
        </div>
        </div>

                                    <div class="midContent">
            <div>
                <h4>This is the mid content</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu neque vitae magna malesuada porttitor. Mauris maximus dui et rutrum tristique. Nulla facilisi. Ut lacinia nec elit nec viverra. Sed ut ex fermentum, placerat enim non, venenatis turpis. Nullam lectus odio, euismod a auctor id, malesuada euismod arcu. Duis scelerisque interdum velit rutrum mollis. Nullam risus tortor, maximus maximus odio eu, mattis accumsan risus. Donec rutrum, ex ac porta semper, dui eros pretium leo, nec tempus sem odio id urna. Praesent sollicitudin ligula in ante pretium, eu ornare lacus finibus. Etiam purus erat, ultricies id quam id, lacinia tincidunt nisi.
                </p>
             </div>
        </div>

        


    


<script type="text/javascript" src="/js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="/js/picture.js"></script>
<script type="text/javascript" src="/js/app.js"></script>


@endsection




