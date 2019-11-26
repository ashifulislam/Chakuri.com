<header class="header-area main-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo-area">
                        <a href="index.html"><img style="height:50;width:100px;
                        margin-top:-17px;" src="user/images/logo.png" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="custom-navbar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>  
                    <div class="main-menu">
                        <ul>
                            <li class="active"><a href="index.html">home</a></li>
                            <li><a href="about.html">about us</a></li>
                            <li><a href="job-category.html">category</a></li>
                            <li><a href="#">Employer</a>
                                <ul class="sub-menu">
                                    <li><a href="{{url('employerProfile')}}">Create Profile</a></li>
                                    <li><a href="blog-details.html">Post Job Type </a></li>
                                    <li><a href="blog-details.html">Post Job Category </a></li>
                                     <li><a href="blog-details.html">Post Job Responsibilities </a></li>
                                </ul>
                            </li>
                             <li><a href="#">Candidate</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-home.html">Create Profile</a></li>
                                    <li><a href="{{url('jobApplication')}}">Apply Job </a></li>
                                   
                                </ul>
                            </li>
                           
                            <li class="menu-btn">
                                <a href="#" class="login">log in</a>
                                <a href="{{url('employerProfile')}}" class="template-btn">sign up</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>