<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Product List | Nalika - Material Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('user/showEmployer')}}/img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('user/showEmployer')}}/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('user/showEmployer')}}/css/font-awesome.min.css">
	<!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('user/showEmployer')}}/css/nalika-icon.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('user/showEmployer')}}/css/owl.carousel.css">
    <link rel="stylesheet" href="{{asset('user/showEmployer')}}/css/owl.theme.css">
    <link rel="stylesheet" href="{{asset('user/showEmployer')}}/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('user/showEmployer')}}/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('user/showEmployer')}}/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('user/showEmployer')}}/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('employer')}}/css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('user/showEmployer')}}/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('user/showEmployer')}}/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('employer')}}/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="{{asset('user/showEmployer')}}/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('user/showEmployer')}}/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="{{asset('user/showEmployer')}}/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('user/showEmployer')}}/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('user/showEmployer')}}/css/responsive.css">
     <link rel="shortcut icon" href="{{asset('user/images/logo/favicon.png')}}" type="image/x-icon">
      <link rel="stylesheet" href="{{asset('user')}}/css/bootstrap-4.1.3.min.css">
        <link rel="stylesheet" href="{{asset('user')}}/css/style.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
  @if(session('success'))
          {{session('success')}}
        @endif
    @if(session('emailExists'))
      {{session('emailExists')}}
    @endif
 @if(session('DeleteSuccess'))
 {{session('DeleteSuccess')}}
 @endif

<body>


        <div class="header-advance-area">


            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-wp">
											<div class="breadcomb-icon">
												<i class="icon nalika-home"></i>
											</div>
											<div class="breadcomb-ctn">
												<h2>Employer Details</h2>
												<p>Welcome to Your Profile <span class="bread-ntd">Admin Template</span></p>
											</div>
										</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-report">
											<button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="icon nalika-download"></i></button>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Employer List</h4>
                            <div class="add-product">
                                <a href="{{route('employer.show')}}">Back To Your Profile</a>
                            </div>
                            <table>
                                <tr>
                                    <th>ID</th>
                                    <th>FirstName</th>
                                    <th>LastName</th>
                                    <th>Email</th>
                                    <th>CompanyName</th>
                                    <th>CompanyDetails</th>
                                    <th>CompanyCountry</th>
                                    <th>CompanyState</th>
                                    <th>CompanyZipCode</th>

                                </tr>

                              <tr>

                    <td>
                         {{$viewSingleInfo->id}}
                    </td>
                    <td>
                         {{$viewSingleInfo->firstName}}
                    </td>
                    <td>
                        {{$viewSingleInfo->lastName}}
                    </td>
                      <td>
                        {{$viewSingleInfo->email}}
                    </td>
                      <td>
                        {{$viewSingleInfo->companyName}}
                    </td>
                      <td>
                        {{$viewSingleInfo->companyDetails}}
                    </td>
                      <td>
                        {{$viewSingleInfo->companyCountry}}
                    </td>
                      <td>
                        {{$viewSingleInfo->companyState}}
                    </td>

                  <td>
                        {{$viewSingleInfo->companyZipCode}}
                    </td>


                 </tr>

                            </table>
                            <div class="custom-pagination">
								<ul class="pagination">
									<li class="page-item"><a class="page-link" href="#">Previous</a></li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">Next</a></li>
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


</body>

</html>
