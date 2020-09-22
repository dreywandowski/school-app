

@extends('layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Student Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!--{{ __('You are logged in!') }}-->
                </div>
            </div>
        </div>
    </div>
</div>




    

        <center><p> Hey <?php //echo "$first_name" ." ". "$last_name"?>, welcome!!<br><br>
         This is your dashboard. Pls avail yourself as
        you please. 
    </p><br></center>
       

@content
    

<div id="result"></div>
    

<button id="picChange" class="green button"> Update picture</button>



<div  id="nav">
    <div id="nav_wrapper">
    <ul>
        <li><button id="prompt">Update your profile</button></li><br>
        <li><a href="/school/courses"> Download Courses</a></li><br>
        <li><a href="/school/fees"> Pay School Fees</a></li><br>
        <li><a href="view_bills.php"> Payment History</a></li><br>
        <li><a href="/school/exams" target="_blank"> Exam Portal</a></li><br>
        <li><a href="exams.php">Examination Results</a></li><br>
        <li><a href="../forgot_pwd.php"> Reset Password </a></li><br>
</ul>
    </ol>
</div>

</div>



</body>


@endsection




