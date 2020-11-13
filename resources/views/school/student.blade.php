@extends('layout.dashboard')

@section('content')

 <p> {{session('msg')}}</p>

     <title>Student Dashboard</title>
</head>
<body>
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
                    <img src="/img/male-profile-picture.jpg">
                </div>
                <div class="userName">
                    <p class="mainUserName">Captain Rogers</p>
                    <p class="userFooter">Student ID: #1234FY82K2</p>
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
                <a href="/school/fees">Pay Fees</a>
                <a href="#">Payment Status</a>
                <a href="#">Payment History</a>
                <a href="#">Manage Courses</a>
                <a href="#">Download Courses</a>
                <a href="#">Exam Portal</a>
                <a href="#">Exam Schedule</a>
                <a href="#">Exam Results</a>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
            </div>
        </div>

    


<script type="text/javascript" src="/js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="/js/picture.js"></script>


@endsection




