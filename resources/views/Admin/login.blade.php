<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <title>Login::ATWAP</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- CSRF Token -->
  <meta name="_token" content="iOFHvxnnvQTiXxlCQ4HnHbqv8OWeGmpesk0fqKkI">
  
  <link rel="shortcut icon" href="{{asset('../assets/images/favicon.ico')}}">

  <!-- plugin css -->
  <link media="all" type="text/css" rel="stylesheet" href="{{asset('../assets/plugins/%40mdi/font/css/materialdesignicons.min.css')}}">
  <link media="all" type="text/css" rel="stylesheet" href="{{asset('../assets/plugins/perfect-scrollbar/perfect-scrollbar.css')}}">
  <!-- end plugin css -->

  <!-- plugin css -->
    <!-- end plugin css -->

  <!-- common css -->
  <link media="all" type="text/css" rel="stylesheet" href="{{asset('../css/app.css')}}">
  <!-- end common css -->

  </head>
<body data-base-url="https://www.bootstrapdash.com/demo/justdo-laravel-pro/template/vertical-default-light">

  <div class="container-scroller" id="app">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      
<div class="content-wrapper d-flex align-items-center auth">
  <div class="row flex-grow">
    <div class="col-lg-4 mx-auto">
      <div class="auth-form-light text-left p-5">
        <div class="brand-logo">
         <center> <img src="{{asset('../assets/images/logo.png')}}"></center>
        </div>
        <h4>Hello! let's get started</h4>
        <h6 class="font-weight-light">Sign in to continue.</h6>
        @if(isset(Auth::user()->email))
<script>window.location="Dashboard";</script>
  @endif

          @if(Session::get('success'))
            <div class="alert alert-success">

            {{Session::get('success')}}
            </div>
          @endif

          @if(session::get('fail'))
            <div class="alert alert-danger">

            {{session::get('fail')}}
            </div>
          @endif
        <form action="checklogin" method="post" class="pt-3">
        @csrf
          <div class="form-group">
            <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Enter Email">
            <span style="color:red">@error('email'){{$message}} @enderror</span> 
        </div>
          <div class="form-group">
            <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Enter Password">
            <span style="color:red">@error('password'){{$message}} @enderror</span> 
        </div>
          <div class="mt-3">
            <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" >LOGIN</button>
          </div>
          <div class="my-2 d-flex justify-content-between align-items-center">
            <div class="form-check">
              <label class="form-check-label text-muted">
                <input type="checkbox" class="form-check-input"><i class="input-helper"></i> Keep me signed in </label>
            </div>
            <a href="#" class="auth-link text-black">Forgot password?</a>
          </div>
         <!-- <div class="mb-2">
            <button type="button" class="btn btn-block btn-facebook auth-form-btn">
              <i class="mdi mdi-facebook mr-2"></i>Connect using facebook </button>
          </div>-->
          <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="register-3.html" class="text-primary">Create</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

    </div>
  </div>

    <!-- base js -->
    <script src="{{asset('../js/app.js')}}"></script>
    <!-- end base js -->

    <!-- plugin js -->
        <!-- end plugin js -->

    </body>

</html>