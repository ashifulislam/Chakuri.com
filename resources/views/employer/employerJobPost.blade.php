
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Super Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- nalika Icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/nalika-icon.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->

    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

    <link rel="stylesheet" href="{{asset('user')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('employer')}}/css/employer.css">
</head>
@if(count($errors)>0)
    @foreach($errors->all() as $error)
        {{$error}}
    @endforeach

@endif
@if(session('successfull'))

    {{session('successfull')}}
@endif
<body>


@include('layouts/user/employerSideBar');


<div class="all-content-wrapper">

    <div class="container-fluid">

        @include('layouts/user/employerNavBar');

        <section class="job-single-content section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-content">
                            <div class="single-content1">
                                <div class="single-job mb-4 d-lg-flex justify-content-between">
                                    <div class="SignUp">
                                        <form name="jobCategory"  method="post"  action="{{url('addJobCategory')}}">
                                            {{csrf_field()}}
                                            <h3 style="color:#fff;"> <u>Post a Job </u></h3>
                                            <input type="text" placeholder="enter job responsibilities" name="responsibilities"/>
                                            <br><br>
                                            <input type="number" id="vacancy" placeholder="enter number of vacancy" name="vacancy"/>
                                            <br><br>
                                            <p>Job Category</p>
                                            <select id="category" name="categoryType">
                                                <option value=""> Choose Type</option>
                                                <option name="categoryType" value="Accounting/Finance">Account/Finance</option>
                                                <option name="categoryType" value="Software">Software</option>
                                            </select>
                                            <br><br>
                                            <p>Employement Status</p>
                                            <div id="employementStatus">
                                                <input type="radio" name="employementStauts" value="FullTime" checked> FullTime<br>
                                                <input type="radio" name="employementStauts" value="PartTime"> PartTime<br>
                                                <input type="radio" name="employementStauts" value="other"> Other
                                            </div>
                                            <br>
                                            <p>Degree</p>
                                            <select id="category" name="categoryType">
                                                <option value=""> Choose Type</option>
                                                <option name="degree" value="SSC">SSC</option>
                                                <option name="degree" value="HSC">HSC</option>
                                                <option name="degree" value="BSC ">BSC</option>
                                            </select><br><br>
                                            <input type="text" placeholder="enter job location" name="location"/><br><br>
                                            <input type="number" placeholder="enter salary" name="salary"/><br><br>
                                            <input type="text" placeholder="experience" name="experience"/><br><br>
                                            <p>Application Deadline</p>
                                            <input type="date" placeholder="application deadline" name="deadLine"/>
                                            <br><br>

                                            <br>
                                            <input type="checkbox" name="myCheck" id="myCheck">I agree with the terms and conditions<br>
                                            <input  type="submit" name="add" value="Post a Job"><br><br><br>
                                            ADD AGAIN?<a href="{{url('createJobCategory')}}"> &nbsp; ADD</a>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>


</body>

</html>
