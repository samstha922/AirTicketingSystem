<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <li class="sidebar-toggler-wrapper hide">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler"> </div>
                <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>
            
            <li class="nav-item start active open">
                <a href="{{url('dashboard')}}" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                </a>

            </li>
             <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                      <i class="fa fa-user-plus"></i>
                      <span class="title"> User Management</span>
                      <span class="arrow"></span>
                   </a>
                   <ul class="sub-menu">
                       <li class="nav-item">
                           <a href="{{ url('admin/') }}" class="nav-link"><i class="fa fa-user"></i> User</a>
                       </li>
                       <li class="nav-item ">
                           <a href="{{ url('role/') }}" class="nav-link"><i class="fa fa-users"></i> Role</a>
                       </li>
                   </ul>
             </li>

            <li class="nav-item  ">

               <a href="javascript:;" class="nav-link nav-toggle">
                  <i class="fa fa-gears"></i>
                   <span class="title"> Setting</span>
                   <span class="arrow"></span>
               </a>
               <ul class="sub-menu">
                   <li class="nav-item">
                       <a href="{{ url('city/') }}" class="nav-link"><i class="fa fa-flag"></i> City Setup</a>
                   </li>
                   <li class="nav-item ">
                       <a href="{{ url('flight/') }}" class="nav-link"><i class="fa fa-plane"></i> Flight Setup</a>
                   </li>
                   <li class="nav-item ">
                       <a href="{{ url('cabin/') }}" class="nav-link"><i class="fa fa-star"></i> Cabin Setup</a>
                   </li>
                   <li class="nav-item ">
                       <a href="{{ url('rbd/') }}" class="nav-link"><i class="fa fa-tags"></i> RBD Setup</a>
                   </li>
                   <li class="nav-item ">
                       <a href="{{ url('schedule/') }}" class="nav-link"><i class="fa fa-calendar"></i> Schedule Setup</a>
                   </li>
                   <li class="nav-item ">
                       <a href="{{ url('/fare') }}" class="nav-link"><i class="fa fa-ticket"></i> Fare & Availability</a>
                   </li>
               </ul>
           </li>
            <li class="nav-item">
                    <a href="javascript:;" class="nav-link nav-toggle">
                      <i class="fa fa-users"></i>
                       <span class="title">Agent Management</span>
                       <span class="arrow"></span>
                   </a>
                   <ul class="sub-menu">
                       <li class="nav-item">
                           <a href="{{ url('agent/') }}" class="nav-link"><i class="fa fa-user-plus"></i> Agent</a>
                       </li>
                       {{-- <li class="nav-item ">
                           <a href="{{ url('agent/') }}" class="nav-link">Agent Balance</a>
                       </li> --}}
                   </ul>
             </li>
            <li class="nav-item start ">
                <a href="{{ url('scheduler/') }}" class="nav-link nav-toggle">
                    <i class="fa fa-calendar-check-o"></i>
                    <span class="title">Scheduler</span>
                    <span class="selected"></span>
                </a>

            </li>
            <li class="nav-item start ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-check-square-o"></i>
                    <span class="title">Reservation</span>
                    <span class="selected"></span>
                </a>

            </li>
            <li class="nav-item start">
                    <a href="javascript:;" class="nav-link nav-toggle">
                      <i class="fa fa-edit"></i>
                       <span class="title">Report</span>
                       <span class="arrow"></span>
                   </a>
                   <ul class="sub-menu">
                       <li class="nav-item">
                           <a href="#" class="nav-link"><i class="fa fa-money"></i> Agent A/C Summary</a>
                       </li>
                   </ul>
             </li>
            
        </ul>
        <!-- END SIDEBAR MENU -->
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
 </div>
