<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <title>Member Profile</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- CSRF Token -->
  <meta name="_token" content="iOFHvxnnvQTiXxlCQ4HnHbqv8OWeGmpesk0fqKkI">
  
  <link rel="shortcut icon" href="{{asset('../favicon.ico')}}">

  <!-- plugin css -->
  <link media="all" type="text/css" rel="stylesheet" href="{{asset('../assets/plugins/%40mdi/font/css/materialdesignicons.min.css')}}">
  <link media="all" type="text/css" rel="stylesheet" href="{{asset('../assets/plugins/ti-icons/css/themify-icons.css')}}">
  <link media="all" type="text/css" rel="stylesheet" href="{{asset('../assets/plugins/perfect-scrollbar/perfect-scrollbar.css')}}">
  <!-- end plugin css -->

    <link media="all" type="text/css" rel="stylesheet" href="{{asset('../assets/plugins/jquery-bar-rating/dist/themes/css-stars.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('../assets/plugins/icheck/skins/all.css')}}">
  <link media="all" type="text/css" rel="stylesheet" href="{{asset('../assets/plugins/select2/css/select2.min.css')}}">
  <!-- common css -->
  <link media="all" type="text/css" rel="stylesheet" href="{{asset('../css/app.css')}}">
  <!-- end common css -->

  </head>
<body data-base-url="https://www.bootstrapdash.com/demo/justdo-laravel-pro/template/vertical-default-light">

<!-- menu starts here -->
@include('Admin/include.menu');
<!-- menu ends here --> 
@if(!isset(Auth::user()->email))
<script>window.location="{{url('Admin/login')}}";</script>
@endif
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
  <div class="col-12">
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
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-4">
            <div class="border-bottom text-center pb-4">
              <img src="{{ url('../storage/front/images/members/'.$viewmember->image_name) }}" alt="profile" class="img-lg rounded-circle mb-3" />
             <!-- <p>Bureau Oberhaeuser is a design bureau focused on Information- and Interface Design. </p>-->
              <div class="d-flex justify-content-between">
                <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal-4">Send Email</button>
                <a href="{{url('Admin/EditMember/'.$viewmember->id)}}" class="btn btn-success">Update Profile</a>
              </div>
            </div>
            
            
            <div class="py-4">
              <p class="clearfix">
                <span class="float-left"> Status </span>
                <span class="float-right text-muted"> Active </span>
              </p>
              <p class="clearfix">
                <span class="float-left"> Phone </span>
                <span class="float-right text-muted"> {{$viewmember->phone}} </span>
              </p>
              <p class="clearfix">
                <span class="float-left"> Mail </span>
                <span class="float-right text-muted"> {{$viewmember->email}} </span>
              </p>
              <!--<p class="clearfix">
                <span class="float-left"> Facebook </span>
                <span class="float-right text-muted">
                  <a href="#">David Grey</a>
                </span>
              </p>
              <p class="clearfix">
                <span class="float-left"> Twitter </span>
                <span class="float-right text-muted">
                  <a href="#">@davidgrey</a>
                </span>
              </p>-->
            </div>
           <!-- <button class="btn btn-primary btn-block">Preview</button>-->
          </div>
          <div class="col-lg-8">
            <div class="d-flex justify-content-between">
              <div>
                <h3>{{$viewmember->name}}</h3>
                <div class="d-flex align-items-center">
                  <h5 class="mb-0 mr-2 text-muted">{{$viewmember->position}}</h5>
                 
                </div>
              </div>
              <div>
                <!--<button class="btn btn-outline-secondary btn-icon">
                  <i class="mdi mdi-comment-processing"></i>
                </button>-->
                <button class="btn btn-primary">Send SMS</button>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal-5" data-whatever="@mdo">Pay for Dues</button>
              </div>
            </div>



           
    
        
        <div class="modal fade" id="exampleModal-4" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">New Email to {{$viewmember->name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <form id="search_form" class="forms-sample" method="POST" action="/postmembermail" enctype="multipart/form-data">
        @csrf 
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Recipient Email:</label>
                    <input type="text" name="email" value="{{$viewmember->email}}" class="form-control" id="recipient-name" readonly>
                  </div>

                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Recipient name:</label>
                    <input type="text" name="name" value="{{$viewmember->name}}" class="form-control" id="recipient-name" readonly>
                  </div>

                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Subject:</label>
                    <input type="text" name="subject"  class="form-control" id="recipient-name" placeholder="Enter Subject" required>
                  </div>


                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Message:</label>
                    <textarea name="content" class="form-control" id="message-text" required></textarea>
                  </div>
                
              </div>
              <div class="modal-footer">
                <button onclick="form_submit()" class="btn btn-success">Send Mail</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
              </div>
              </form>
            </div>
          </div>
        </div>




        <div class="modal fade" id="exampleModal-5" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Payment of Dues for {{$viewmember->name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <form id="search_form_dues" class="forms-sample" method="POST" action="/postduepayment" enctype="multipart/form-data">
        @csrf 
                     <input type="hidden" name="email" value="{{$viewmember->email}}" class="form-control" id="recipient-name" readonly>
                     <input type="hidden" name="name" value="{{$viewmember->name}}" class="form-control" id="recipient-name" readonly>
                     <input type="hidden" name="unit" value="{{$viewmember->unit}}" class="form-control" id="recipient-name" readonly>
                 
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Amount</label>
                    <input type="text" name="amount" value="1500" class="form-control" id="recipient-name" placeholder="Enter Amount" readonly>
                  </div>

                  <div class="form-group">
          <label>Select Month</label>
          <select name="month[]" class="js-example-basic-multiple w-100" multiple="multiple" width="400" style="width: 400px" required>
            <option value="January">January</option>
            <option value="February">February</option>
            <option value="March">March</option>
            <option value="April">April</option>
            <option value="May">May</option>
            <option value="June">June</option>
            <option value="July">July</option>
            <option value="August">August</option>
            <option value="September">September</option>
            <option value="October">October</option>
            <option value="November">November</option>
            <option value="December">December</option>
          </select>
        </div>

        <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Select Year</label>
                    <select name="year"  class="form-control" id="recipient-name" required>
                  <option>Select Year</option>
                  <option option="2022">2022</option>
                  <option option="2020">2020</option>
                  <option option="2021">2021</option>
                  <option option="2022">2022</option>
                  <option option="2023">2023</option>
                  <option option="2024">2024</option>
                  <option option="2025">2025</option>
                  </select>  
                  </div>
                
                  
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Remarks</label>
                    <input type="text" name="remarks" class="form-control" id="recipient-name" placeholder="Enter Remarks">
                  </div>
              </div>


              <div class="modal-footer">
                <button  onclick="form_submit_dues()" class="btn btn-success">Make Payment</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
              </div>
              </form>
            </div>
          </div>
        </div>
        
    
        


            <div class="mt-4 py-2 border-top border-bottom">
              <ul class="nav profile-navbar">
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <i class="mdi mdi-account-outline"></i> Info </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="#">
                    <i class="mdi mdi-newspaper"></i> Feed </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <i class="mdi mdi-calendar"></i> Agenda </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <i class="mdi mdi-attachment"></i> Resume </a>
                </li>
              </ul>
            </div>
            <div class="profile-feed">
              <div class="d-flex align-items-start profile-feed-item">
                <!--<img src="../assets/images/faces/face13.jpg" alt="profile" class="img-sm rounded-circle" />-->
                <div class="ml-4">
                  
                  <p> No outstanding bill for name </p>
                  <p class="small text-muted mt-2 mb-0">
                    <span>
                      <i class="mdi mdi-star mr-1"></i>4 </span>
                    <span class="ml-2">
                      <i class="mdi mdi-comment mr-1"></i>11 </span>
                    <span class="ml-2">
                      <i class="mdi mdi-reply"></i>
                    </span>
                  </p>
                </div>
              </div>
                           
            </div>
           
          </div>
                  </div>
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
    <script src="{{asset('../assets/plugins/jquery-bar-rating/jquery.barrating.js')}}"></script>
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
  <script src="{{asset('../assets/js/iCheck.js')}}"></script>
  <script src="{{asset('../assets/js/select2.js')}}"></script>
  <script src="{{asset('../assets/js/typeahead.js')}}"></script>
  <!-- end common js -->

    <script src="{{asset('../assets/js/profile-demo.js')}}"></script>
    <script type="text/javascript">
  function form_submit() {
    document.getElementById("search_form").submit();
   } 
   
   function form_submit_dues() {
    document.getElementById("search_form_dues").submit();
   } 
  </script>
</body>

</html>