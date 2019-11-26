

<!DOCTYPE>
<html lan="en">
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

        <link rel="stylesheet" href="{{asset('user')}}/css/style1.css">

    </head>
    <body>
    @include('layouts/user/header')

    <section class="job-single-content section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-content">
                        <div class="single-content1">
                            <div class="single-job mb-4 d-lg-flex justify-content-between">

        <div id="main">
            <h1 class="h">Post A Job</h1>
                   <ul >
                       <li><a href="{{url('primaryJobInfo')}}">Primary Job Information</a>
                       </li>
                        <li><a href="{{url('additionalJobInfo')}}">Additional Requirements</a> </li>
                       <li><a href="{{url('candidateReq')}}">Candidate Requirements</a> </li>



                   </ul>
        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    </body>
    @include('layouts/user/footer')
</html>
