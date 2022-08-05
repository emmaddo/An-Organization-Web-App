<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <title>Register Member</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- CSRF Token -->
  <meta name="_token" content="iOFHvxnnvQTiXxlCQ4HnHbqv8OWeGmpesk0fqKkI">
  
 <link rel="shortcut icon" href="{{asset('../assets/images/favicon.ico')}}">

  <!-- plugin css -->
  <link media="all" type="text/css" rel="stylesheet" href="{{asset('../assets/plugins/%40mdi/font/css/materialdesignicons.min.css')}}">
  <link media="all" type="text/css" rel="stylesheet" href="{{asset('../assets/plugins/ti-icons/css/themify-icons.css')}}">
  <link media="all" type="text/css" rel="stylesheet" href="{{asset('../assets/plugins/perfect-scrollbar/perfect-scrollbar.css')}}">
  <!-- end plugin css -->

    <link media="all" type="text/css" rel="stylesheet" href="{{asset('../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}">

  <!-- common css -->
  <link media="all" type="text/css" rel="stylesheet" href="{{asset('../css/app.css')}}">
  <!-- end common css -->

  </head>
<body data-base-url="https://www.bootstrapdash.com/demo/justdo-laravel-pro/template/vertical-default-light">

<!-- menu starts here -->
@include('Admin/include.menu');
<!-- menu ends here --> 
@if(!isset(Auth::user()->email))
<script>window.location="login";</script>
@endif
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">

  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Register Member</h4>
        <!--<p class="card-description">
          Basic form elements
        </p>-->
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
        <form class="forms-sample" method="POST" action="{{url('/posteditmember/'.$editmember->id)}}" enctype="multipart/form-data">
        @csrf  
        <center><img src="{{ url('../storage/front/images/members/'.$editmember->image_name) }}" alt="profile" class="img-lg rounded-circle mb-3" />
             </center> 
        <div class="form-group">
            <label for="exampleInputName1">Name</label>
            <input type="text" name="name" value="{{$editmember->name}}" class="form-control" id="exampleInputName1" placeholder="Enter Name">
          </div>
          
          <div class="form-group">
            <label for="exampleInputEmail3">Phone</label>
            <input type="text" name="phone" value="{{$editmember->phone}}" class="form-control" id="exampleInputEmail3" placeholder="Enter Phone">
          </div>
          
          <div class="form-group">
            <label for="exampleSelectGender">Gender</label>
              <select class="form-control" name="gender" id="exampleSelectGender">
              <option value="{{$editmember->gender}}">{{$editmember->gender}}</option>  
              <option value="Male">Male</option>
                <option Value="Female">Female</option>
              </select>
            </div>
            <div class="form-group">
            <label for="exampleSelectGender">Member Type</label>
              <select class="form-control" name="usertype" id="exampleSelectGender">
              <option value="{{$editmember->usertype}}">{{$editmember->usertype}}</option>  
              <option value="Exco">Exco</option>
                <option Value="Member">Member</option>
              </select>
            </div>
            <div class="form-group">
            <label for="exampleInputEmail3">Exco Positon (If Applicable)</label>
            <input type="text" name="position" value="{{$editmember->position}}" class="form-control" id="exampleInputEmail3" placeholder="Enter Exco Position">
          </div>
            <div class="form-group">
            <label for="exampleSelectGender">Unit</label>
              <select name="unit" class="form-control" id="exampleSelectGender">
              <option value="{{$editmember->unit}}">{{$editmember->unit}}</option> 
              <option value="Unit 1">Unit 1</option>
                <option value="Unit 2">Unit 2</option>
              </select>
            </div>
            
          <div class="form-group">
            <label>Upload Image</label>
            
            <div class="input-group col-xs-12">
              <input type="file" name="image_name" class="form-control file-upload-info" placeholder="Upload Image">
              <span style="color:red">@error('image_name'){{$message}} @enderror</span>  
            </div>
          </div>
          
         <!-- <div class="form-group">
            <label for="exampleTextarea1">Textarea</label>
            <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
          </div>-->
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>

</div>
        </div>
       
<!-- Footer starts here -->
@include('Admin/include.footer');
<!-- footer ends here -->
	   </div>
    </div>
  </div>

 <!-- base js -->
  <script src="{{asset('../js/app.js')}}"></script>
  <script src="{{asset('../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
  <!-- end base js -->

  <!-- plugin js -->
    <script src="{{asset('../assets/plugins/icheck/icheck.min.js')}}"></script>
  <script src="{{asset('../assets/plugins/select2/js/select2.min.js')}}"></script>
  <script src="{{asset('../assets/plugins/typeaheadjs/typeahead.bundle.min.js')}}"></script>
  <!-- end plugin js -->

  <!-- common js -->
  <script src="{{asset('../assets/js/off-canvas.js')}}"></script>
  <script src="{{asset('../assets/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('../assets/js/misc.js')}}"></script>
  <script src="{{asset('../assets/js/settings.js')}}"></script>
  <script src="{{asset('../assets/js/todolist.js')}}"></script>
  <!-- end common js -->

    <script src="{{asset('../assets/js/file-upload.js')}}"></script>
  <script src="{{asset('../assets/js/iCheck.js')}}"></script>
  <script src="{{asset('../assets/js/select2.js')}}"></script>
  <script src="{{asset('../assets/js/typeahead.js')}}"></script>
</body>
</html>