<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <title>View {{$dist->unit}}</title>
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
@include('Admin/include.menu')
<!-- menu ends here --> 
@if(!isset(Auth::user()->email))
<script>window.location="login";</script>
@endif

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
  <div class="card-body">
    <h4>{{$dist->unit}} with total of {{$numbermembers}} Members</h4>
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
    <div class="row">
      <div class="col-12">
        <div class="table-responsive">
            <table id="order-listing" class="table">
              <thead>
                <tr>
                  <th>SN</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Unit</th>
                  <th>Member Type</th>
                  
                  <th>View</th>
				  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($posts as $post)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$post->name}}</td>
                  <td>{{$post->email}}</td>
                  <td>{{$post->phone}}</td>
                  <td>{{$post->unit}}</td>
                  <td>{{$post->usertype}}</td>
                  <!--<td>
                    <label class="badge badge-info">On hold</label>
                  </td>-->
                  <td>
                    <a href="{{url('Admin/MemberProfile/'.$post->id)}}" class="btn btn-outline-primary">View</a>
                  </td>
				   <td><a class="pe-2" href="{{url('Admin/EditMember/'.$post->id)}}"> <i class="mdi mdi-table-edit"></i></a> <a href="{{url('Admin/DeleteMember/'.$post->id)}}" onclick="return confirm('Are you sure you want to delete this Member Profile?')"> <i class="mdi mdi-delete"></i></a></td>
                </tr>
                @endforeach
               
              </tbody>
            </table>
          </div>
        </div>
    </div>
  </div>
</div>
        </div>
     <!--  footer -->
        @include('Admin/include.footer')
        <!--=================================
        footer -->

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