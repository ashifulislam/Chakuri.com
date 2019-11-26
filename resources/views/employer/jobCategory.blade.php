<!DOCTYPE html>
 <html>
     <head>
         <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>Job Single</title>


    <link rel="shortcut icon" href="{{asset('user/images/logo/favicon.png')}}" type="image/x-icon">



    <link rel="stylesheet" href="{{asset('user')}}/css/bootstrap-4.1.3.min.css">


    <link rel="stylesheet" href="{{asset('user')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('employer')}}/css/jobCategory.css">
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
    {{$email}}

       <header class="header-area single-page">
      @include('layouts/user/headerCreateEmployer')
        <div class="page-title text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <h2>Job Category</h2>
                        <p> Add a Job Category for further opportunitites</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
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
             <h3 style="color:#fff;"> <u> Add Job Category</u></h3>
             <input type="text" placeholder="enter category name" name="categoryName"/>
             <br><br>
             <select id="category" name="categoryType">
                 <option value=""> Choose Type</option>
                 <option name="categoryType" value="Functional">Functional</option>
                 <option name="categoryType" value="Media">Media</option>
             </select>
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
