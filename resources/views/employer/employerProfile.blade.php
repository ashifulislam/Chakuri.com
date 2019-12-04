<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>Job Single</title>


    <link rel="shortcut icon" href="{{asset('user/images/logo/favicon.png')}}" type="image/x-icon">



    <link rel="stylesheet" href="{{asset('user')}}/css/bootstrap-4.1.3.min.css">


    <link rel="stylesheet" href="{{asset('user')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('employer')}}/css/employer.css">
</head>
@if(count($errors)>0)
 @foreach($errors->all() as $error)
     {{$error}}
 @endforeach

@endif

@if(session('emailExists'))
    {{session('emailExists')}}
@endif
@if(session('passNotMatch'))

   {{session('passNotMatch')}}
@endif
   @if(session('successfull'))

   {{session('successfull')}}
@endif
<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Header Area Starts -->


      @include('layouts/user/headerCreateEmployer')


    <!-- Header Area End -->

    <!-- Job Single Content Starts -->
    <section class="job-single-content section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-content">
                        <div class="single-content1">
                            <div class="single-job mb-4 d-lg-flex justify-content-between">
                               <div class="SignUp">
        <form name="employerProfile"  method="post" action="{{url('addEmployerOperation')}}" >
                    {{csrf_field()}}
                <h1 style="color:orange;"> Create Profile</h1><br>

                  <div>
               <div class="einfo">

                    <h3 style="color:#fff;"> <u> Personal Info</u></h3>
                <input type="text" placeholder="enter First Name" name="firstName">
                <br><br>
                <input type="text" placeholder="enter Last Name" name="lastName">
                <br><br>
                <input type="email" placeholder="enter email" name="email" >
                <br><br>
                <input type="password" placeholder="enter password" name="password" onchange="checkMatchPassword();" >
                <br><br>
                <input type="password" placeholder="enter  retTypePassword" name="reType" onchange="checkMatchPassword();" >

                 </div>

               <div class="einfo">
                    <h3 style="color:#fff;"> <u> Company's Info</u></h3>

                <input type="text" placeholder="enter company name" name="companyName" >
                <br><br>
                <textarea  name="companyDetails" row="7" cols="40" placeholder="Enter company Details"></textarea>

               </div>

                <div class="einfo">
                    <h3 style="color:#fff;"> <u> Company's Address</u></h3>

                <input type="text" placeholder="enter company's country" name="companyCountry" >
                <br><br>
                 <input type="text" placeholder="enter company's state" name="companyState" >
                <br><br>
                 <input type="number" placeholder="enter company's zip Code" name="companyZipCode" >
                <br><br>
                </div>
                  </div>
               <div class="center-block" >

                <input type="checkbox" name="myCheck" id="myCheck">I agree with the terms and conditions<br>
                 </div>
                <input class="center-block" type="submit" name="signup" value="SIGNUP"><br><br><br>
                Already registered?<a href="{{url('employer/login')}}"> &nbsp; LOGIN</a>



            </form>
        </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Job Single Content End -->


    <!-- Newsletter Area Starts -->
    <section class="newsletter-area job-single section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top text-center">
                        <h2>Get job information daily</h2>
                        <p>Subscribe to our newsletter and get a coupon code!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="#">
                        <input type="email" placeholder="Your email here" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email here'" required>
                        <button type="submit" class="template-btn">subscribe now</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter Area End -->


    <!-- Footer Area Starts -->
    @include('layouts/user/footer')
        <!-- Footer Area End -->


    <!-- Javascript -->
    <script src="user/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="user/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="user/js/vendor/wow.min.js"></script>
    <script src="user/js/vendor/owl-carousel.min.js"></script>
    <script src="user/js/vendor/jquery.nice-select.min.js"></script>
    <script src="user/js/vendor/ion.rangeSlider.js"></script>
    <script src="user/js/main.js"></script>
</body>
</html>
