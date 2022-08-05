<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <title>Individual Detailed Report</title>
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
  <link media="all" type="text/css" rel="stylesheet" href="{{asset('../assets/plugins/perfect-scrollbar/perfect-scrollbar.css')}}">
  <!-- end plugin css -->

    <link media="all" type="text/css" rel="stylesheet" href="{{asset('../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('../assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
  <!-- common css -->
  <link media="all" type="text/css" rel="stylesheet" href="{{asset('../css/app.css')}}">
  <!-- end common css -->



  </head>
<body data-base-url="https://www.bootstrapdash.com/demo/justdo-laravel-pro/template/vertical-default-light">

  <!-- menu starts here -->
@include('Admin/include.menu')
<!-- menu ends here --> 
@if(!isset(Auth::user()->email))
<script>window.location="{{url('Admin/login')}}"</script>
@endif

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
  <div class="card-body">
    <h4 class="card-title">Individual Detailed Report</h4>
    <div class="table-responsive">
    <form id="form1" method="POST" action="{{url('Admin/postbyindividualdetails/'.$ind->email)}}" enctype="multipart/form-data">
    @csrf  
    <table class="table table-striped table-bordered table-hover table-green">
<tr>
<td width="35%"><center><strong>Start Date</strong></center></td>
<td width="33%"><center><strong>End Date</strong></center></td>
<td width="32%"><center><strong>Generate</strong></center></td>

</tr>
<tr>
<td>  <input value="YYYY-MM-DD" class="form-control" type="date" name="startdate" id="textfield" required />
</td>
<td>  <input value="YYYY-MM-DD" class="form-control" type="date" name="enddate" id="textfield" required />
</td>
<td><input type="submit" class="btn btn-primary" value="Generate Report">
</td>

</tr>

</table>
</form> 
</div> 
<br> 
<p>Name: {{$ind->name}}<br>
Total Paid: {{number_format($totalamount,2)}}

</p>
<br>            
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
                  <th>Amount</th>
                  <th>Month</th>
                  <th>Year</th>
                  <th>Date Paid</th>
                  
				  
                </tr>
              </thead>
              <tbody>
                @foreach($eachpayment as $due)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$due->name}}</td>
                  <td>{{number_format($due->amount,2)}}</td>
                  <td>{{$due->month}}</td>
                  <td>{{$due->year}}</td>
                  <td>{{$due->created_at}}</td>
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
  <script src="{{asset('../assets/plugins/datatables.net/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('../assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
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
  <script src="{{asset('../assets/js/data-table.js')}}"></script>
</body>
</html>