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
         
		 <form class="forms-sample" method="POST" action="{{url('searchdata')}}" enctype="multipart/form-data">
        @csrf 
        <div class="input-group">
          <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
           
          </div>
          <input type="text" name="search" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
         <!-- <input type="submit">-->
        </div>
</form>
		 
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
           <!-- <div class="preview-thumbnail">
                <img src="{{asset('../assets/images/faces/face4.jpg')}}" alt="image" class="profile-pic">
            </div>-->
            <div class="preview-item-content flex-grow">
              <h6 class="preview-subject ellipsis font-weight-normal">Registration Alert
              </h6>
              <p class="font-weight-light small-text text-muted mb-0">
                A new member was recently registered
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
              <div class="preview-icon bg-info">
                <i class="ti-user mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject font-weight-normal">New member registration</h6>
              <p class="font-weight-light small-text mb-0 text-muted">
                2 days ago
              </p>
            </div>
          </a>
        </div>
      </li>
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
        @if(isset(Auth::user()->email))
        <img src="{{ url('../storage/front/images/members/'.Auth::user()->image_name) }}" alt="profile"/>
       @endif
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
   <!-- <li class="nav-item">
      <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
    </li>-->
  </ul>
  <div class="tab-content" id="setting-content">
    <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
     <div class="p-3">
      <div class="list-wrapper">
        <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
          <!--<li>
            <div class="form-check form-check-flat">
              <label class="form-check-label">
                <input class="checkbox" type="checkbox">
                Attend to Pending Emails
              </label>
            </div>
            <i class="remove ti-close"></i>
          </li>-->
          
         
          
        </ul>
      </div>
     
     </div>
      
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
        <span class="menu-title">Location/Unit Manager</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="forms">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="{{url('Admin/RegLocation')}}">Register Location</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{url('Admin/ViewLocations')}}">View Locations</a>
          </li>
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

          <li class="nav-item ">
            <a class="nav-link" href="{{url('Admin/ByLocation')}}">By Locations</a>
          </li>
                  </ul>
      </div>
    </li>
    
    <li class="nav-item ">
      <a class="nav-link" data-toggle="collapse" href="#ecommerce" aria-expanded="false" aria-controls="ecommerce">
        <i class="ti-shopping-cart menu-icon"></i>
        <span class="menu-title">Expenses Manager</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="ecommerce">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="{{url('Admin/AddExpenses')}}">Add Expenses</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{url('Admin/ViewExpenses')}}">View Expenses</a>
          </li>
         
        </ul>
      </div>
    </li>

  </ul>
</nav>