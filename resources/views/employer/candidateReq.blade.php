<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Job Single</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('user/images/logo/favicon.png')}}" type="image/x-icon">

    <!-- CSS Files -->
<!--
    <link rel="stylesheet" href="{{asset('user')}}/css/animate-3.7.0.css">
    <link rel="stylesheet" href="{{asset('employer')}}/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="user/fonts/flat-icon/flaticon.css">
-->
    <link rel="stylesheet" href="{{asset('user')}}/css/bootstrap-4.1.3.min.css">
<!--    <link rel="stylesheet" href="{{asset('user')}}/css/owl-carousel.min.css">-->
<!--    <link rel="stylesheet" href="{{asset('user')}}/css/nice-select.css">-->
<!--
    <link rel="stylesheet" href="{{asset('user')}}/css/ion.rangeSlider.css">
    <link rel="stylesheet" href="{{asset('user')}}/css/ion.rangeSlider.skinFlat.css">
-->
    <link rel="stylesheet" href="{{asset('user')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('user')}}/css/employerLogIn.css">
</head>
<body>
@if(count($errors)>0)
    @foreach($errors->all() as $errors)
        {{$errors}}
    @endforeach
@endif
@if(session('successfull'))

    {{session('successfull')}}

@endif



@include('layouts/user/headerCreateEmployer')

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
                                    <h3 style="color:#fff;"> <u>Education Information</u></h3>

                                    <p style="color:aliceblue">Degree</p>
                                    <select id="education" name="education">
                                        <option value=""> Choose Type</option>
                                        <option name="education" value="SSC">SSC</option>
                                        <option name="education" value="HSC">HSC</option>
                                    </select>
                                    <br><br>
                                    <p style="color:aliceblue">Area of study</p>
                                    <select id="area" name="area">
                                        <option value=""> Choose Type</option>
                                        <option name="area" value="science">science</option>
                                        <option name="area" value="commerce">commerce</option>
                                    </select>
                                    <br><br>
                                    <h3 style="color:#fff;"> <u>Experience Requirements</u></h3>
                                    <input type="number" placeholder="years of experience" name="year"/>
                                    <br><br>
                                    <input type="text" placeholder="area of experience" name="area"/><br><br>
                                    <h3 style="color:#fff;"> <u>Skill Requirements</u></h3>
                                    <input type="text" placeholder="write skills" name="skill"/>

                                    <br><br>
                                    <h3 style="color:#fff;"> <u>Additional Requirements</u></h3>
                                    <input type="text" placeholder="write req" name="add"/><br><br>
                                    <h3 style="color:#fff;"> <u>Personal Requirements</u></h3>
                                    <p style="color:aliceblue">Gender</p>
                                    <input type="radio" name="gender" value="Male" > Male<br>
                                    <input type="radio" name="gender" value="Female"> Female<br>
                                    <input type="radio" name="gender" value="other"> Others<br>
                                    <input type="number" placeholder="enter age" name="age"/><br><br>

                                    <input type="checkbox" name="myCheck" id="myCheck">I agree with the terms and conditions<br>
                                    <input class="center-block" type="submit" name="add" value="ADD"><br><br><br>
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
@include('layouts/user/footer')
</body>
</html>
