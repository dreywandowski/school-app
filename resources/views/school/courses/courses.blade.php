<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/dashboard.css">

    <title>Student Dashboard :: Courses</title>
</head>
<body>
    <div class="mainContainer">
        <div class="headerContent" id = "headerContent">
            <header>
                <div class="h2"><h2 class="top">Student Dashboard</h2></div>
            </header>
        </div>

        <div class="headerContent-II" id="header-content">
            <div class="profile-picture-II">
                <a class="menu-icon"><i class="fas fa-bars" id="myBtn"></i></a>
            </div>
            <div class="dashboard">
            <a href="./index.html"><h2 class="">Dashboard</h2></a>
            </div>
        </div>

        <!-- Menu -->
        <div id="myMenu" class="menu">
            <div class="menu-content">
    
                <div class="left-nav" id="myLinks">
                    <div class="user-summary">
                        <div class="profile-picture">
                            <img src="{{ Auth::user()->file_path }}" alt="profile pic">
                        </div>
                        <div class="userName">
                            <p class="mainUserName">{{ Auth::user()->name }}</p>
                            <p class="userFooter">Student ID: #1234FY82K2</p>
                            <p class="update"><a href="#">Update Profile
                                <i class="fas fa-user-edit"></i>
                            </a></p>
                        </div>
                    </div>
                    <hr class="no-display">
                    <div class="quickLinks">
                        <a href="./pay_fees.html">Pay Fees</a>
                        <a href="#">Payment Status</a>
                        <a href="#">Payment History</a>
                        <hr>
                        <a href="./courses.html">Manage Courses</a>
                        <a href="#">Download Courses</a>
                        <hr>
                        <a href="#">Exam Portal</a>
                        <a href="#">Exam Schedule</a>
                        <a href="#">Exam Results</a>
                        <hr>
                        <a href="#">Logout</a>
                    </div>
                </div>
            </div>
            </div>

            <div class="main">
                <div class="searchBar">
                    <form action="" class="search">
                        <input type="text" id="search" class="search" placeholder="Search Courses">
                    </form>
                </div>

                <div class="table" id="table-courses">
                    <table class="courses">
                        <tr>
                            <th class="course-code">Course Code</th>
                            <th class="course-title" style="text-align: center;">Course Title</th>
                            <th class="course-units" style="text-align: right;">Units</th>
                        </tr>
                        
                        <tr>
                            <td class="course-code">AZ-104</td>
                            <td class="course-title">Azure Cloud Administrator</td>
                            <td class="course-units">3.0</td>
                        </tr>
                        <tr>
                            <td class="course-code">MS-203</td>
                            <td class="course-title">Microsoft Messaging</td>
                            <td class="course-units">5.0</td>
                        </tr>
                        <tr>
                            <td class="course-code">MAT-241</td>
                            <td class="course-title">Ordinary Differential Equations</td>
                            <td class="course-units">4.0</td>
                        </tr>
                        <tr>
                            <td class="course-code">MAT-704</td>
                            <td class="course-title">Functional Analysis: Theory and Modern-Day Applications </td>
                            <td class="course-units">3.0</td>
                        </tr>
                        <tr>
                            <td class="course-code">CSC-809</td>
                            <td class="course-title">Deep Machine Learning: From Novice to Expert</td>
                            <td class="course-units">3.0</td>
                        </tr>
                        <tr>
                            <td class="course-code">JS-404</td>
                            <td class="course-title">You Definitely Don't Know JavaScript</td>
                            <td class="course-units">6.0</td>
                        </tr>
                        <tr>
                            <td class="course-code">RCT-104</td>
                            <td class="course-title">ReactJS Fundamentals</td>
                            <td class="course-units">3.0</td>
                        </tr>
                        <tr>
                            <td class="course-code">DSC-704</td>
                            <td class="course-title">Introduction to Python For Data Science</td>
                            <td class="course-units">4.5</td>
                        </tr>
                        <tr class="total">
                            <td class="course-code">Total</td>
                            <td></td>
                            <td class="course-units">0.0</td>
                        </tr>
                    </table>
                </div>
               
             </div>

        <div class="footerContent">
            <p>Copyright &COPY; Dreywandowski College, 2020.</p>
        </div>
    </div>
    <script src="../../script/app.js"></script>
</body>
</html>