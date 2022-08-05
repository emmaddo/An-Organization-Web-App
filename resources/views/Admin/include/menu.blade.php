<div class="container-scroller" id="app">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo mr-5" href="https://www.bootstrapdash.com/demo/justdo-laravel-pro/template/vertical-default-light"><img src="{{asset('../assets/images/logo.png')}}" class="mr-2" alt="logo"/></a>
   <!-- <a class="navbar-brand brand-logo-mini" href="https://www.bootstrapdash.com/demo/justdo-laravel-pro/template/vertical-default-light"><img src="{{asset('../assets/images/logo.png')}}" alt="logo"/></a>-->
   <a class="navbar-brand brand-logo-mini" href="https://www.bootstrapdash.com/demo/justdo-laravel-pro/template/vertical-default-light"><img src="{{asset('../assets/images/logoo.svg')}}" alt="logo"/></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="ti-layout-grid2"></span>
    </button>
    <ul class="navbar-nav mr-lg-2">
      <li class="nav-item nav-search d-none d-lg-block">
        <div class="input-group">
          <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
            <span class="input-group-text" id="search">
              <i class="ti-search"></i>
            </span>
          </div>
          <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
        </div>
      </li>
    </ul>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item dropdown mr-1">
        <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
          <i class="ti-email mx-0"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
          <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
                <img src="{{asset('../assets/images/faces/face4.jpg')}}" alt="image" class="profile-pic">
            </div>
            <div class="preview-item-content flex-grow">
              <h6 class="preview-subject ellipsis font-weight-normal">David Grey
              </h6>
              <p class="font-weight-light small-text text-muted mb-0">
                The meeting is cancelled
              </p>
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
                <img src="{{asset('../assets/images/faces/face2.jpg')}}" alt="image" class="profile-pic">
            </div>
            <div class="preview-item-content flex-grow">
              <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
              </h6>
              <p class="font-weight-light small-text text-muted mb-0">
                New product launch
              </p>
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
                <img src="{{asset('../assets/images/faces/face3.jpg')}}" alt="image" class="profile-pic">
            </div>
            <div class="preview-item-content flex-grow">
              <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
              </h6>
              <p class="font-weight-light small-text text-muted mb-0">
                Upcoming board meeting
              </p>
            </div>
          </a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
          <i class="ti-bell mx-0"></i>
          <span class="count"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
          <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-success">
                <i class="ti-info-alt mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject font-weight-normal">Application Error</h6>
              <p class="font-weight-light small-text mb-0 text-muted">
                Just now
              </p>
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-warning">
                <i class="ti-settings mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject font-weight-normal">Settings</h6>
              <p class="font-weight-light small-text mb-0 text-muted">
                Private message
              </p>
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-info">
                <i class="ti-user mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject font-weight-normal">New user registration</h6>
              <p class="font-weight-light small-text mb-0 text-muted">
                2 days ago
              </p>
            </div>
          </a>
        </div>
      </li>
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
          <img src="{{asset('../assets/images/faces/face28.jpg')}}" alt="profile"/>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a class="dropdown-item">
            <i class="ti-settings text-primary"></i>
            @if(isset(Auth::user()->email))
Welcome {{ Auth::user()->email }}
@endif
          </a>
          <a class="dropdown-item" href="{{url('../logout')}}">
            <i class="ti-power-off text-primary"></i>
            Logout
          </a>
        </div>
      </li>
      <li class="nav-item nav-settings d-none d-lg-flex">
        <a class="nav-link" href="#">
          <i class="ti-more"></i>
        </a>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="ti-layout-grid2"></span>
    </button>
  </div>
</nav>   
 <div class="container-fluid page-body-wrapper">
      <div class="theme-setting-wrapper">
  <div id="theme-settings" class="settings-panel">
    <i class="settings-close ti-close"></i>
    <p class="settings-heading">SIDEBAR SKINS</p>
    <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
    <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
    <p class="settings-heading mt-2">HEADER SKINS</p>
    <div class="color-tiles mx-0 px-4">
      <div class="tiles success"></div>
      <div class="tiles warning"></div>
      <div class="tiles danger"></div>
      <div class="tiles info"></div>
      <div class="tiles dark"></div>
      <div class="tiles default"></div>
    </div>
  </div>
</div>
<div id="right-sidebar" class="settings-panel">
  <i class="settings-close ti-close"></i>
  <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
    </li>
  </ul>
  <div class="tab-content" id="setting-content">
    <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
     <div class="p-3">
      <div class="list-wrapper">
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
      <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
      <div class="events pt-4 px-3">
        <div class="wrapper d-flex mb-2">
          <i class="ti-control-record text-primary mr-2"></i>
          <span>Feb 11 2018</span>
        </div>
        <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
        <p class="text-gray mb-0">The total number of sessions</p>
      </div>
      <div class="events pt-4 px-3">
        <div class="wrapper d-flex mb-2">
          <i class="ti-control-record text-primary mr-2"></i>
          <span>Feb 7 2018</span>
        </div>
        <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
        <p class="text-gray mb-0 ">Call Sarah Graves</p>
      </div>
    </div>
    <!-- To do section tab ends -->
    <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
      <div class="d-flex align-items-center justify-content-between border-bottom">
        <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
        <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
      </div>
      <ul class="chat-list">
        <li class="list active">
          <div class="profile"><img src="{{asset('../assets/images/faces/face1.jpg')}}" alt="image"><span class="online"></span></div>
          <div class="info">
            <p>Thomas Douglas</p>
            <p>Available</p>
          </div>
          <small class="text-muted my-auto">19 min</small>
        </li>
        <li class="list">
          <div class="profile"><img src="{{asset('../assets/images/faces/face2.jpg')}}" alt="image"><span class="offline"></span></div>
          <div class="info">
            <div class="wrapper d-flex">
              <p>Catherine</p>
            </div>
            <p>Away</p>
          </div>
          <div class="badge badge-success badge-pill my-auto mx-2">4</div>
          <small class="text-muted my-auto">23 min</small>
        </li>
        <li class="list">
          <div class="profile"><img src="{{asset('../assets/images/faces/face3.jpg')}}" alt="image"><span class="online"></span></div>
          <div class="info">
            <p>Daniel Russell</p>
            <p>Available</p>
          </div>
          <small class="text-muted my-auto">14 min</small>
        </li>
        <li class="list">
          <div class="profile"><img src="{{asset('../assets/images/faces/face4.jpg')}}" alt="image"><span class="offline"></span></div>
          <div class="info">
            <p>James Richardson</p>
            <p>Away</p>
          </div>
          <small class="text-muted my-auto">2 min</small>
        </li>
        <li class="list">
          <div class="profile"><img src="{{asset('../assets/images/faces/face5.jpg')}}" alt="image"><span class="online"></span></div>
          <div class="info">
            <p>Madeline Kennedy</p>
            <p>Available</p>
          </div>
          <small class="text-muted my-auto">5 min</small>
        </li>
        <li class="list">
          <div class="profile"><img src="{{asset('../assets/images/faces/face6.jpg')}}" alt="image"><span class="online"></span></div>
          <div class="info">
            <p>Sarah Graves</p>
            <p>Available</p>
          </div>
          <small class="text-muted my-auto">47 min</small>
        </li>
      </ul>
    </div>
    <!-- chat tab ends -->
  </div>
</div>     
 <nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
  <li class="nav-item">
  <form class="forms-sample" method="POST" action="{{url('searchdata')}}" enctype="multipart/form-data">
        @csrf 
        <div class="input-group">
          <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
           
          </div>
          <input type="text" name="search" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
          <button type="submit">Search</button>
        </div>
</form>
    </li>

    <li class="nav-item active">
      <a class="nav-link" href="{{url('Admin/Dashboard')}}">
        <i class="ti-home menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <!--<li class="nav-item ">
      <a class="nav-link" href="widgets.html">
        <i class="ti-settings menu-icon"></i>
        <span class="menu-title">Widgets</span>
      </a>
    </li>-->
    <li class="nav-item ">
        <a class="nav-link" data-toggle="collapse" href="#basic-ui" aria-expanded="false" aria-controls="basic-ui">

        <i class="ti-palette menu-icon"></i>
        <span class="menu-title">Registration Manager</span>
        <i class="menu-arrow"></i>
      </a>
       <div class="collapse " id="basic-ui">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="{{url('Admin/RegMember')}}">Register Member</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{url('Admin/ViewMembers')}}">View/Edit Members</a>
          </li>
          
        </ul>
      </div>
    </li>
    <li class="nav-item ">
        <a class="nav-link" data-toggle="collapse" href="#advanced-ui" aria-expanded="false" aria-controls="advanced-ui">

        <i class="ti-view-list menu-icon"></i>
        <span class="menu-title">News Manager</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="advanced-ui">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="{{url('Admin/AddNews')}}">Add News</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{url('Admin/ViewNews')}}">View/Edit News</a>
          </li>
          
        </ul>
      </div>
    </li>
    <li class="nav-item  ">
        <a class="nav-link" data-toggle="collapse" href="#forms" aria-expanded="false" aria-controls="forms">
        <i class="ti-clipboard menu-icon"></i>
        <span class="menu-title">Unit Manager</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="forms">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="{{url('Admin/RegUnit')}}">Register Unit</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{url('Admin/ViewUnits')}}">View/Edit Units</a>
          </li>
          
        </ul>
      </div>
    </li>
    <li class="nav-item ">
        <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
        <i class="ti-eraser menu-icon"></i>
        <span class="menu-title">Minutes Manager</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="editors">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="{{url('Admin/AddMinutes')}}">Add Minutes</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{url('Admin/ViewMinutes')}}">View/Edit Minutes</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item  ">
      <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
        <i class="ti-layout menu-icon"></i>
        <span class="menu-title">Memo Manager</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="tables">
        <ul class="nav flex-column sub-menu">
        <li class="nav-item ">
            <a class="nav-link" href="{{url('Admin/AddMemo')}}">Add Memo</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{url('Admin/ViewMemo')}}">View/Edit Memo</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{url('Admin/EmailBroadcast')}}">Email Broadcast</a>
          </li>
         
        </ul>
      </div>
    </li>
    <li class="nav-item  ">
        <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">

        <i class="ti-bar-chart-alt menu-icon"></i>
        <span class="menu-title">Dues Report Manager</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="charts">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="{{url('Admin/ByIndividual')}}">By Individual</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{url('Admin/ByUnit')}}">By Units</a>
          </li>
          
        </ul>
      </div>
    </li>
    
    <li class="nav-item ">
      <a class="nav-link" href="notifications.html">
        <i class="ti-bell menu-icon"></i>
        <span class="menu-title">Notifications</span>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
        <i class="ti-face-smile menu-icon"></i>
        <span class="menu-title">Icons</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="icons">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="icons/material.html">Material</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="icons/flag-icons.html">Flag Icons</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="icons/font-awesome.html">Font Awesome</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="icons/simple-line-icons.html">Simple Line Icons</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="icons/themify.html">Themify</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item ">
      <a class="nav-link" data-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
        <i class="ti-map menu-icon"></i>
        <span class="menu-title">Maps</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="maps">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="maps/vector-map.html">Vector Map</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="maps/mapael.html">Mapael</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="maps/google-maps.html">Google Maps</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item ">
      <a class="nav-link" data-toggle="collapse" href="#user-pages" aria-expanded="false" aria-controls="user-pages">
        <i class="ti-layers-alt menu-icon"></i>
        <span class="menu-title">User Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="user-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="user-pages/login.html">Login</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="user-pages/login-2.html">Login 2</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="user-pages/multi-step-login.html">Multi Step Logins</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="user-pages/register.html">Register</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="user-pages/register-2.html">Register 2</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="user-pages/lock-screen.html">Lock Screen</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item ">
      <a class="nav-link" data-toggle="collapse" href="#error-pages" aria-expanded="false" aria-controls="error-pages">
        <i class="ti-help-alt menu-icon"></i>
        <span class="menu-title">Error pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="error-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="error-pages/error-404.html">404</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="error-pages/error-500.html">500</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item ">
      <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
        <i class="ti-layers menu-icon"></i>
        <span class="menu-title">General Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="general-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="general-pages/blank-page.html">Blank Page</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="general-pages/profile.html">Profile</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="general-pages/faq.html">FAQ</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="general-pages/faq-2.html">FAQ 2</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="general-pages/news-grid.html">News Grid</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="general-pages/timeline.html">Timeline</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="general-pages/search-results.html">Search Results</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="general-pages/portfolio.html">Portfolio</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="general-pages/user-listing.html">User Listing</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item ">
      <a class="nav-link" data-toggle="collapse" href="#ecommerce" aria-expanded="false" aria-controls="ecommerce">
        <i class="ti-shopping-cart menu-icon"></i>
        <span class="menu-title">E-commerce</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="ecommerce">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="ecommerce/invoice.html">Invoice</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="ecommerce/invoice-2.html">Invoice 2</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="ecommerce/pricing.html">Pricing</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="ecommerce/product-catalogue.html">Product Catalogue</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="ecommerce/project-list.html">Project List</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="ecommerce/orders.html">Orders</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item ">
      <a class="nav-link" data-toggle="collapse" href="#apps" aria-expanded="false" aria-controls="apps">
        <i class="mdi mdi-cart-arrow-down menu-icon"></i>
        <span class="menu-title">Apps</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="apps">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="apps/kanban-board.html">Kanban Board</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="apps/todo-list.html">Todo List</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="apps/tickets.html">Tickets</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="apps/chats.html">Chats</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="apps/calendar.html">Calendar</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="apps/email.html">Email</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="apps/gallery.html">Gallery</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://www.bootstrapdash.com/demo/justdo-laravel-pro/documentation/documentation.html">
        <i class="ti-write menu-icon"></i>
        <span class="menu-title">Documentation</span>
      </a>
    </li>
  </ul>
</nav>