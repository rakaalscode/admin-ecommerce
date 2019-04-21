<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Admin Mintone">
<meta name="author" content="Admin Mintone">
<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/imgs/favicon.png')}}">
<title>Admin Mintone - Bootstrap 4 Admin Template</title>
<!-- Bootstrap Core CSS -->
<link href="{{asset('plugins/vendors/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('plugins/vendors/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
<!-- Custom CSS -->
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
<!-- Page CSS -->
<link href="{{asset('assets/css/pages/to-do.css')}}" rel="stylesheet">
<link href="{{asset('plugins/vendors/bootstrap-checkbox/awesome-bootstrap-checkbox.css')}}" rel="stylesheet" type="text/css">
<!-- summernotes CSS -->
<link href="{{asset('plugins/vendors/summernote/dist/summernote.css')}}" rel="stylesheet" />
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="single-page-bg">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
  <div class="loader">
    <div class="loader__figure"></div>
    <p class="loader__label">Admin Mintone</p>
  </div>
</div>
<div id="main-wrapper">
  <div class="navbar-header mt-5 ml-5"> 
 <a class="navbar-brand" href="{{url('/')}}"> <img src="{{asset('assets/imgs/logo-t.png')}}" alt="homepage" class="dark-logo"> </a> </div>
  <div class="container">
  <div class="page-wrapper m-auto pt-5">
      <div>
        <div class="row">
          <div class="col-lg-6 col-md-6 text-center"> <img src="{{asset('assets/imgs/single-page/offline_page.png')}}" class="img-fluid" alt="" title=""> </div>
          <div class="col-lg-6 col-md-6 single-page">
            <h2 class="text-primary">Service is offline!</h2>
            <h3 class="font-18">Sorry, we’re currently working on this</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('plugins/vendors/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="{{asset('plugins/vendors/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('plugins/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('assets/js/custom.min.js')}}"></script>
<script src="{{asset('plugins/vendors/summernote/dist/summernote.min.js')}}"></script>
</body>
</html>
