<!DOCTYPE html>
<html>

<!-- Mirrored from www.bootstrapdash.com/demo/justdo-laravel-pro/template/vertical-default-light/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Jul 2022 11:56:01 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <title>Dashboard::ATWAP</title>
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
	  
      <div class="main-panel">
        
		<div class="content-wrapper">
          <div>
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="row">
        <div class="col-12 col-xl-5 mb-4 mb-xl-0">
          <h4 class="font-weight-bold">
          @if(isset(Auth::user()->email))
Welcome {{ Auth::user()->name }}
@else
    <script>window.location="login";</script>
@endif

          </h4>
          <h4 class="font-weight-normal mb-0">We are ATWAP</h4>
        </div>
        <div class="col-12 col-xl-7">
          <div class="d-flex align-items-center justify-content-between flex-wrap">
            <div class="border-right pr-4 mb-3 mb-xl-0">
              <p class="text-muted">Total Dues Payment</p>
              <h4 class="mb-0 font-weight-bold"><i class="mdi mdi-currency-ngn"></i>{{number_format($totaldues,2)}}</h4>
            </div>
            <div class="border-right pr-4 mb-3 mb-xl-0">
              <p class="text-muted">{{date('F')}} Dues</p>
              <h4 class="mb-0 font-weight-bold"><i class="mdi mdi-currency-ngn"></i>{{number_format($duesmonth,2)}}</h4>
            </div>
            <div class="border-right pr-4 mb-3 mb-xl-0">
              <p class="text-muted">{{date('Y')}} Dues</p>
              <h4 class="mb-0 font-weight-bold"><i class="mdi mdi-currency-ngn"></i>{{number_format($duesyear,2)}}</h4>
            </div>
            <div class="pr-3 mb-3 mb-xl-0">
              <p class="text-muted">Total Expenses</p>
              <h4 class="mb-0 font-weight-bold"><i class="mdi mdi-currency-ngn"></i>{{number_format($totalExpenses,2)}}</h4>
            </div>
            <!--<div class="mb-3 mb-xl-0">
              <button class="btn btn-warning rounded-0 text-white">Downloads</button>
            </div>-->
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
  <div class="col-md-3 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title text-md-center text-xl-left">Number of Members</p>
          <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
            <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{$no_members}}</h3>
            <i class="ti-user icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
          </div>  
         <!-- <p class="mb-0 mt-2 text-danger">0.22% <span class="text-black ml-1"><small>(30 days)</small></span></p>-->
        </div>
      </div>
    </div>

    <div class="col-md-3 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title text-md-center text-xl-left">Number of Excos</p>
          <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
            <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{$no_excos}}</h3>
            <i class="ti-calendar icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
          </div>  
          <!--<p class="mb-0 mt-2 text-warning">2.00% <span class="text-black ml-1"><small>(30 days)</small></span></p>-->
        </div>
      </div>
    </div>
    
    <div class="col-md-3 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title text-md-center text-xl-left">Total Units</p>
          <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
            <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{ $no_units }}</h3>
            <i class="ti-agenda icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
          </div>  
          <!--<p class="mb-0 mt-2 text-success">10.00%<span class="text-black ml-1"><small>(30 days)</small></span></p>-->
        </div>
      </div>
    </div>
    <div class="col-md-3 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title text-md-center text-xl-left">Total News</p>
          <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
            <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{ $no_news }}</h3>
            <i class="ti-layers-alt icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
          </div>  
         <!-- <p class="mb-0 mt-2 text-success">22.00%<span class="text-black ml-1"><small>(30 days)</small></span></p>-->
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="card bg-primary border-0 position-relative">
        <div class="card-body">
          <p class="card-title text-white">Performance Overview</p>
          <div id="performanceOverview" class="carousel slide performance-overview-carousel position-static pt-2" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-md-4 item">
                    <div class="d-flex flex-column flex-xl-row mt-4 mt-md-0">
                      <div class="icon icon-a text-white mr-3">
                        <i class="ti-cup icon-lg ml-3"></i>
                      </div>
                      <div class="content text-white">
                        <div class="d-flex flex-wrap align-items-center mb-2 mt-3 mt-xl-1">
                          <h3 class="font-weight-light mr-2 mb-1">Revenue</h3>
                          <h3 class="mb-0">34040</h3>
                        </div>
                        <div class="col-8 col-md-7 d-flex border-bottom border-info align-items-center justify-content-between px-0 pb-2 mb-3">
                          <h5 class="mb-0">+34040</h5>
                          <div class="d-flex align-items-center">
                            <i class="ti-angle-down mr-2"></i>
                            <h5 class="mb-0">0.036%</h5>
                          </div>  
                        </div>
                        <p class="text-white font-weight-light pr-lg-2 pr-xl-5">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 item">
                    <div class="d-flex flex-column flex-xl-row mt-5 mt-md-0">
                      <div class="icon icon-b text-white mr-3">
                        <i class="ti-bar-chart icon-lg ml-3"></i>
                      </div>
                      <div class="content text-white">
                        <div class="d-flex flex-wrap align-items-center mb-2 mt-3 mt-xl-1">
                          <h3 class="font-weight-light mr-2 mb-1">Sales</h3>
                          <h3 class="mb-0">$9672471</h3>
                        </div>
                        <div class="col-8 col-md-7 d-flex border-bottom border-info align-items-center justify-content-between px-0 pb-2 mb-3">
                          <h5 class="mb-0">-7.34567</h5>
                          <div class="d-flex align-items-center">
                            <i class="ti-angle-down mr-2"></i>
                            <h5 class="mb-0">2.036%</h5>
                          </div>  
                        </div>
                        <p class="text-white font-weight-light pr-lg-2 pr-xl-5">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 item">
                    <div class="d-flex flex-column flex-xl-row mt-5 mt-md-0">
                      <div class="icon icon-c text-white mr-3">
                        <i class="ti-shopping-cart-full icon-lg ml-3"></i>
                      </div>
                      <div class="content text-white">
                        <div class="d-flex flex-wrap align-items-center mb-2 mt-3 mt-xl-1">
                          <h3 class="font-weight-light mr-2 mb-1">Purchases</h3>
                          <h3 class="mb-0">6358</h3>
                        </div>
                        <div class="col-8 col-md-7 d-flex border-bottom border-info align-items-center justify-content-between px-0 pb-2 mb-3">
                          <h5 class="mb-0">+9082</h5>
                          <div class="d-flex align-items-center">
                            <i class="ti-angle-down mr-2"></i>
                            <h5 class="mb-0">35.54%</h5>
                          </div>  
                        </div>
                        <p class="text-white font-weight-light pr-lg-2 pr-xl-5">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-md-4 item">
                    <div class="d-flex flex-column flex-xl-row mt-4 mt-md-0">
                      <div class="icon icon-a text-white mr-3">
                        <i class="ti-cup icon-lg ml-3"></i>
                      </div>
                      <div class="content text-white">
                        <div class="d-flex flex-wrap align-items-center mb-2 mt-3 mt-xl-1">
                          <h3 class="font-weight-light mr-2 mb-1">Clients</h3>
                          <h3 class="mb-0">49076</h3>
                        </div>
                        <div class="col-8 col-md-7 d-flex border-bottom border-info align-items-center justify-content-between px-0 pb-2 mb-3">
                          <h5 class="mb-0">+59238</h5>
                          <div class="d-flex align-items-center">
                            <i class="ti-angle-down mr-2"></i>
                            <h5 class="mb-0">0.056%</h5>
                          </div>  
                        </div>
                        <p class="text-white font-weight-light pr-lg-2 pr-xl-5">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 item">
                    <div class="d-flex flex-column flex-xl-row mt-5 mt-md-0">
                      <div class="icon icon-b text-white mr-3">
                        <i class="ti-bar-chart icon-lg ml-3"></i>
                      </div>
                      <div class="content text-white">
                        <div class="d-flex flex-wrap align-items-center mb-2 mt-3 mt-xl-1">
                          <h3 class="font-weight-light mr-2 mb-1">Order</h3>
                          <h3 class="mb-0">$308656</h3>
                        </div>
                        <div class="col-8 col-md-7 d-flex border-bottom border-info align-items-center justify-content-between px-0 pb-2 mb-3">
                          <h5 class="mb-0">-6.20967</h5>
                          <div class="d-flex align-items-center">
                            <i class="ti-angle-down mr-2"></i>
                            <h5 class="mb-0">2.389%</h5>
                          </div>  
                        </div>
                        <p class="text-white font-weight-light pr-lg-2 pr-xl-5">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 item">
                    <div class="d-flex flex-column flex-xl-row mt-5 mt-md-0">
                      <div class="icon icon-c text-white mr-3">
                        <i class="ti-shopping-cart-full icon-lg ml-3"></i>
                      </div>
                      <div class="content text-white">
                        <div class="d-flex flex-wrap align-items-center mb-2 mt-3 mt-xl-1">
                          <h3 class="font-weight-light mr-2 mb-1">Purchases</h3>
                          <h3 class="mb-0">6358</h3>
                        </div>
                        <div class="col-8 col-md-7 d-flex border-bottom border-info align-items-center justify-content-between px-0 pb-2 mb-3">
                          <h5 class="mb-0">+9082</h5>
                          <div class="d-flex align-items-center">
                            <i class="ti-angle-down mr-2"></i>
                            <h5 class="mb-0">35.54%</h5>
                          </div>  
                        </div>
                        <p class="text-white font-weight-light pr-lg-2 pr-xl-5">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#performanceOverview" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#performanceOverview" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  <div class="row">
    <div class="col-md-7 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title mb-0">Top Products</p>
          <div class="table-responsive">
            <table class="table table-striped table-borderless">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Price</th>
                  <th>Date</th>
                  <th>Status</th>
                </tr>  
              </thead>
              <tbody>
                <tr>
                  <td>Search Engine Marketing</td>
                  <td class="font-weight-bold">$362</td>
                  <td>21 Sep 2018</td>
                  <td class="font-weight-medium text-success">Completed</td>
                </tr>
                <tr>
                  <td>Search Engine Optimization</td>
                  <td class="font-weight-bold">$116</td>
                  <td>13 Jun 2018</td>
                  <td class="font-weight-medium text-success">Completed</td>
                </tr>
                <tr>
                  <td>Display Advertising</td>
                  <td class="font-weight-bold">$551</td>
                  <td>28 Sep 2018</td>
                  <td class="font-weight-medium text-warning">Pending</td>
                </tr>
                <tr>
                  <td>Pay Per Click Advertising</td>
                  <td class="font-weight-bold">$523</td>
                  <td>30 Jun 2018</td>
                  <td class="font-weight-medium text-warning">Pending</td>
                </tr>
                <tr>
                  <td>E-Mail Marketing</td>
                  <td class="font-weight-bold">$781</td>
                  <td>01 Nov 2018</td>
                  <td class="font-weight-medium text-danger">Cancelled</td>
                </tr>
                <tr>
                  <td>Referral Marketing</td>
                  <td class="font-weight-bold">$283</td>
                  <td>20 Mar 2018</td>
                  <td class="font-weight-medium text-warning">Pending</td>
                </tr>
                <tr>
                  <td>Social media marketing</td>
                  <td class="font-weight-bold">$897</td>
                  <td>26 Oct 2018</td>
                  <td class="font-weight-medium text-success">Completed</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-5 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">To Do Lists</h4>
          <div class="list-wrapper pt-2">
            <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
              <li>
                <div class="form-check form-check-flat">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox">
                    Meeting with Urban Team
                  </label>
                </div>
                <i class="remove ti-close"></i>
              </li>
              <li class="completed">
                <div class="form-check form-check-flat">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox" checked>
                    Duplicate a project for new customer
                  </label>
                </div>
                <i class="remove ti-close"></i>
              </li>
              <li>
                <div class="form-check form-check-flat">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox">
                    Project meeting with CEO
                  </label>
                </div>
                <i class="remove ti-close"></i>
              </li>
              <li class="completed">
                <div class="form-check form-check-flat">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox" checked>
                    Follow up of team zilla
                  </label>
                </div>
                <i class="remove ti-close"></i>
              </li>
              <li>
                <div class="form-check form-check-flat">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox">
                    Level up for Antony
                  </label>
                </div>
                <i class="remove ti-close"></i>
              </li>
            </ul>
          </div>
          <div class="add-items d-flex mb-0 mt-2">
            <input type="text" class="form-control todo-list-input"  placeholder="Add new task">
            <button class="add btn btn-icon text-primary todo-list-add-btn bg-transparent"><i class="ti-location-arrow"></i></button>
          </div>
        </div>
      </div>
    </div>
  </div>

        </div>
       
<!-- Footer starts here -->
@include('Admin/include.footer')
<!-- footer ends here -->

	   </div>

       
	   </div>
    </div>
  </div>

 <!-- base js -->
  <script src="{{asset('../js/app.js')}}"></script>
  <script src="{{asset('../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
  <!-- end base js -->

  <!-- plugin js -->
    <script src="{{asset('../assets/plugins/chartjs/chart.min.js')}}"></script>
  <script src="{{asset('../assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
  <script src="{{asset('../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
  <!-- end plugin js -->

  <!-- common js -->
  <script src="{{asset('../assets/js/off-canvas.js')}}"></script>
  <script src="{{asset('../assets/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('../assets/js/misc.js')}}"></script>
  <script src="{{asset('../assets/js/settings.js')}}"></script>
  <script src="{{asset('../assets/js/todolist.js')}}"></script>
  <!-- end common js -->

    <script src="{{asset('../assets/js/dashboard.js')}}"></script>
</body>
</html>