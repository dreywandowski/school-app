@extends('layout.dashboard')

@section('content')



     <title>Student Dashboard</title>
</head>
<body>
    <div class="mainContainer">
        <div class="headerContent">
            <header>
                <h2 class="top">My Portal</h2>
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
                    <p class="update"><a href="#">Update Profile
                        <i class="fas fa-user-edit"></i>
                    </a></p>
                </div>
            </div>
            <hr>
            <div class="quickLinks">
                <a href="#">Pay Fees</a>
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

    


@endsection




