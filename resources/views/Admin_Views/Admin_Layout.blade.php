<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('Pages/img/logo2.jpg')}}">
    <title>VIETRIP Admin</title>
    <!-- Custom CSS -->
    <link href="{{asset('Admins/libs/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('Admins/extra-libs/c3/c3.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('Admins/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('Admins/css/morris.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header">
                <!-- This is for the sidebar toggle which is visible on mobile only -->
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <a class="navbar-brand" href="">
                    <!-- Logo icon -->
                    <b class="logo-icon">
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src="{{asset('Admins/img/logo-icon.png')}}" alt="homepage" class="dark-logo" />
                        <!-- Light Logo icon -->
                        <img src="{{asset('Admins/img/logo-light-icon.png')}}" alt="homepage" class="light-logo" />
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span class="logo-text">
                             <!-- dark Logo text -->
                             <img src="{{asset('Admins/img/logo-text.png')}}" alt="homepage" class="dark-logo" />
                        <!-- Light Logo text -->
                             <img src="{{asset('Admins/img/logo-light-text.png')}}" class="light-logo" alt="homepage" />
                        </span>
                </a>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Toggle which is visible on mobile only -->
                <!-- ============================================================== -->
                <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse collapse" id="navbarSupportedContent">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-left mr-auto">
                    <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                    <!-- ============================================================== -->
                    <!-- mega menu -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown mega-dropdown"><a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="d-none d-md-block">Mega <i class="fa fa-angle-down"></i></span>
                            <span class="d-block d-md-none"><i class="mdi mdi-dialpad font-24"></i></span>
                        </a>
                        <div class="dropdown-menu animated bounceInDown">
                            <div class="mega-dropdown-menu row">
                                <div class="col-lg-3 col-xlg-2 m-b-30">
                                    <h4 class="m-b-20">CAROUSEL</h4>
                                    <!-- CAROUSEL -->
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <div class="container p-0"> <img class="d-block img-fluid" src="{{asset('Admins/img/big/img1.jpg')}}" alt="First slide"></div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="container p-0"><img class="d-block img-fluid" src="{{asset('Admins/img/big/img2.jpg')}}" alt="Second slide"></div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="container p-0"><img class="d-block img-fluid" src="{{asset('Admins/img/big/img3.jpg')}}" alt="Third slide"></div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                    </div>
                                    <!-- End CAROUSEL -->
                                </div>
                                <div class="col-lg-3 m-b-30">
                                    <h4 class="m-b-20">ACCORDION</h4>
                                    <!-- Accordian -->
                                    <div id="accordion">
                                        <div class="card m-b-5">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Collapsible Group Item #1
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card m-b-5">
                                            <div class="card-header" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Collapsible Group Item #2
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card m-b-5">
                                            <div class="card-header" id="headingThree">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Collapsible Group Item #3
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3  m-b-30">
                                    <h4 class="m-b-20">CONTACT US</h4>
                                    <!-- Contact -->
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name"> </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Enter email"> </div>
                                        <div class="form-group">
                                            <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-info">Submit</button>
                                    </form>
                                </div>
                                <div class="col-lg-3 col-xlg-4 m-b-30">
                                    <h4 class="m-b-20">List style</h4>
                                    <!-- List style -->
                                    <ul class="list-style-none">
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> You can give link</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Give link</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another Give link</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Forth link</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another fifth link</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End mega menu -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- create new -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="d-none d-md-block">Create New <i class="fa fa-angle-down"></i></span>
                            <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
                    <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                        <form class="app-search position-absolute">
                            <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                        </form>
                    </li>
                </ul>
                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-right">
                    <!-- ============================================================== -->
                    <!-- create new -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    <?php $lang_status = Session::get('language');

                    $staff_name=Session::get('staff_name');
                    $staff_email=Session::get('staff_email');
                    if($lang_status!="en"){
                    ?>
                        <i class="flag-icon flag-icon-vn"></i>
                    <?php
                    }else {
                    ?>
                        <i class="flag-icon flag-icon-us"></i>
                    <?php
                    }
                    ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right  animated bounceInDown" aria-labelledby="navbarDropdown2">
                            <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i></a>
                            <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-vn"></i> </a>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- Comment -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell font-24"></i>

                        </a>
                        <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                            <span class="with-arrow"><span class="bg-primary"></span></span>
                            <ul class="list-style-none">
                                <li>
                                    <div class="drop-title bg-primary text-white">
                                        <h4 class="m-b-0 m-t-5">4 New</h4>
                                        <span class="font-light">Notifications</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="message-center notifications">
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item">
                                            <span class="btn btn-danger btn-circle"><i class="fa fa-link"></i></span>
                                            <div class="mail-contnet">
                                                <h5 class="message-title">Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item">
                                            <span class="btn btn-success btn-circle"><i class="ti-calendar"></i></span>
                                            <div class="mail-contnet">
                                                <h5 class="message-title">Event today</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item">
                                            <span class="btn btn-info btn-circle"><i class="ti-settings"></i></span>
                                            <div class="mail-contnet">
                                                <h5 class="message-title">Settings</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item">
                                            <span class="btn btn-primary btn-circle"><i class="ti-user"></i></span>
                                            <div class="mail-contnet">
                                                <h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link text-center m-b-5 text-dark" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Comment -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Messages -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="font-24 mdi mdi-comment-processing"></i>

                        </a>
                        <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                            <span class="with-arrow"><span class="bg-danger"></span></span>
                            <ul class="list-style-none">
                                <li>
                                    <div class="drop-title text-white bg-danger">
                                        <h4 class="m-b-0 m-t-5">5 New</h4>
                                        <span class="font-light">Messages</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="message-center message-body">
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item">
                                            <span class="user-img"> <img src="{{asset('Admins/img/users/1.jpg')}}" alt="user" class="rounded-circle"> <span class="profile-status online pull-right"></span> </span>
                                            <div class="mail-contnet">
                                                <h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item">
                                            <span class="user-img"> <img src="{{asset('Admins/img/users/2.jpg')}}" alt="user" class="rounded-circle"> <span class="profile-status busy pull-right"></span> </span>
                                            <div class="mail-contnet">
                                                <h5 class="message-title">Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item">
                                            <span class="user-img"> <img src="{{asset('Admins/img/users/3.jpg')}}" alt="user" class="rounded-circle"> <span class="profile-status away pull-right"></span> </span>
                                            <div class="mail-contnet">
                                                <h5 class="message-title">Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item">
                                            <span class="user-img"> <img src="{{asset('Admins/img/users/4.jpg')}}" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                            <div class="mail-contnet">
                                                <h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link text-center link text-dark" href="javascript:void(0);"> <b>See all e-Mails</b> <i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Messages -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="Admins/img/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                        <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                            <span class="with-arrow"><span class="bg-primary"></span></span>
                            <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                                <div class=""><img src="{{asset('Admins/img/users/1.jpg')}}" alt="user" class="img-circle" width="60"></div>
                                <div class="m-l-10">
                                    <h4 class="m-b-0">Steave Jobs</h4>
                                    <p class=" m-b-0">varun@gmail.com</p>
                                </div>
                            </div>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                            <div class="dropdown-divider"></div>
                            <div class="p-l-30 p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a></div>
                        </div>
                    </li> -->
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <!-- User Profile-->
                    <li>
                        <!-- User Profile-->
                        <div class="user-profile d-flex no-block dropdown mt-3">
                            <div class="user-pic"><img src="{{asset('Admins/img/users/1.jpg')}}" alt="users" class="rounded-circle" width="40" /></div>
                            <div class="user-content hide-menu ml-2">
                                <a href="javascript:void(0)" class="" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <h5 class="mb-0 user-name font-medium">{{$staff_name}} <i class="fa fa-angle-down"></i></h5>
                                    <span class="op-5 user-email">{{$staff_email}}</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Userdd">
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user mr-1 ml-1"></i> My Profile</a>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet mr-1 ml-1"></i> My Balance</a>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email mr-1 ml-1"></i> Inbox</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings mr-1 ml-1"></i> Account Setting</a>
                                    <div class="dropdown-divider"></div>
                                    <a  class="dropdown-item" href="{{URL::to('logout')}} "><i class="fa fa-power-off mr-1 ml-1"></i> Logout</a>
                                </div>
                            </div>
                        </div>
                        <!-- End User Profile-->
                    </li>
                    <?php
                    if(Session::get('position_id')==1){


?>
                    <li class="p-15 mt-2"><a href="{{URL::to('dashboard')}}" class="btn btn-block create-btn text-white no-block d-flex align-items-center"><i class="fa fa-chart-area"></i> <span class="hide-menu ml-1">{{__('DASHBOARD')}}</span> </a></li>
                    <?php
                    }elseif(Session::get('position_id')==3){
                        ?>
                        <li class="p-15 mt-2"><a href="{{URL::to('dashboardkd')}}" class="btn btn-block create-btn text-white no-block d-flex align-items-center"><i class="fa fa-chart-area"></i> <span class="hide-menu ml-1">{{__('DASHBOARD')}}</span> </a></li>
                        <?php
                    }elseif(Session::get('position_id')==4){
                        ?>
                        <li class="p-15 mt-2"><a href="{{URL::to('dashboardhd')}}" class="btn btn-block create-btn text-white no-block d-flex align-items-center"><i class="fa fa-chart-area"></i> <span class="hide-menu ml-1">{{__('DASHBOARD')}}</span> </a></li>
                    <?php
                    }
                    ?>
                    <!-- User Profile-->
                    {{-----------------------------------------------------------------------------------------}}
                    {{--Start tour manager--}}
                    <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">{{__('TOUR MANAGEMENT')}}</span></li>
                    <li  class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-map-marker-radius"></i><span class="hide-menu">{{__('DESTINATIONS')}} </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item">
                                <a href="{{URL::to('/add-destination')}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> {{__('Add Destination')}} </span></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{URL::to('/list-destination')}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> {{__('List Destinations')}} </span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-firefox"></i><span class="hide-menu" >{{__('TYPE OF TOUR')}} </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item">
                                <a href="{{URL::to('/add-type-tour')}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> {{__('Add Travel type')}} </span></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{URL::to('/list-type-tour')}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> {{__('List Travel type')}} </span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-map"></i><span class="hide-menu">{{__('TOURS')}} </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item">
                                <a href="{{URL::to('/add-tour')}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> {{__('Add Tour')}} </span></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{URL::to('/list-tour')}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> {{__('List Tours')}} </span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-firefox"></i><span class="hide-menu" >{{__('POST')}} </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item">
                                <a href="{{URL::to('/add-post')}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> {{__('Add Post')}} </span></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{URL::to('/list-post')}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> {{__('List Post')}} </span></a>
                            </li>
                        </ul>
                    </li>
                    {{--End tour manager--}}
                    {{-----------------------------------------------------------------------------------------}}
                    {{--Start booking manager--}}
                    <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">{{__('BOOKING MANAGEMENT')}}</span></li>
                    <li  class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-content-save-all"></i><span class="hide-menu">{{__('CONTRACTS')}} </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item">
                                <a href="{{URL::to('/new-contract')}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> {{__('New contract')}} </span></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{URL::to('/list-contract/1')}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> {{__('Wait for confirmation')}} </span></a>
                            </li>
                            <li class="sidebar-item">
                            <a href="{{URL::to('/list-contract/2')}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> {{__('Completing contracts')}} </span></a>
                                
                            </li>
                            <li class="sidebar-item">
                            <a href="{{URL::to('/list-contract/3')}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> {{__('Completed contracts')}} </span></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{URL::to('/list-contract/0')}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> {{__('Cancel contracts')}} </span></a>
                            </li>
                        </ul>
                    </li>
                    <li  class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-file-document"></i><span class="hide-menu">{{__('BOOKING')}} </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item">
                                <a href="{{URL::to('/list-booking/0')}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> {{__('Unconfirmed')}} </span></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{URL::to('/list-booking/1')}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> {{__('Confirmed')}} </span></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{URL::to('/list-booking/2')}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> {{__('Canceled')}} </span></a>
                            </li>
                        </ul>
                    </li>
                    {{--End booking manager--}}
                    {{-----------------------------------------------------------------------------------------}}
                    {{--Start custom manager--}}
                    <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">{{__('CUSTOM TOUR MANAGEMENT')}}</span></li>
                    <li  class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-content-save-all"></i><span class="hide-menu">{{__('CONTRACTS')}} </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item">
                                <a href="{{URL::to('/new-custom-contract')}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> {{__('New contract')}} </span></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{URL::to('/list-custom-contract/1')}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> {{__('Wait for confirmation')}} </span></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{URL::to('/list-custom-contract/3')}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> {{__('Completed contracts')}} </span></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{URL::to('/list-custom-contract/2')}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> {{__('Completing contracts')}} </span></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{URL::to('/list-custom-contract/0')}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> {{__('Cancel contracts')}} </span></a>
                            </li>
                        </ul>
                    </li>
                    <li  class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-file-document"></i><span class="hide-menu">{{__('CUSTOM TOUR')}} </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item">
                                <a href="{{URL::to('/list-custom/0')}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> {{__('Chưa liên hệ')}} </span></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{URL::to('/list-custom/1')}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> {{__('Đã trao đổi')}} </span></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{URL::to('/list-custom/2')}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> {{__('Canceled')}} </span></a>
                            </li>
                        </ul>
                    </li>
                    {{--End booking manager--}}
                    {{--start staff manager--}}
                    <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">{{__('STAFF MANAGEMENT')}}</span></li>
                    <li  class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-nature-people"></i><span class="hide-menu">{{__('STAFF')}} </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item">
                                <a href="{{URL::to('add-staff')}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> {{__('Add staff')}} </span></a>
                            </li>
                            
                            <li class="sidebar-item">
                                <a href="{{URL::to('list-staff/3')}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> {{__('NV kinh doanh')}} </span></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{URL::to('list-staff/4')}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> {{__('NH hợp đồng')}} </span></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{URL::to('list-staff/2')}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> {{__('NV văn phòng')}} </span></a>
                            </li>
                        </ul>
                    </li>
                    {{--end staff manager--}}

                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
    @yield('content')
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
            <div class="col-xl-12">
                <p class="copy_right text-center">
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  <a href="http://127.0.0.1:8000/" target="_blank">Vietrip </a>
                </p>
            </div>
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>

    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- customizer Panel -->
<!-- ============================================================== -->
<aside class="customizer">
    <a href="javascript:void(0)" class="service-panel-toggle"><i class="fa fa-spin fa-cog"></i></a>
    <div class="customizer-body">
        <ul class="nav customizer-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="mdi mdi-wrench font-20"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#chat" role="tab" aria-controls="chat" aria-selected="false"><i class="mdi mdi-message-reply font-20"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="mdi mdi-star-circle font-20"></i></a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <!-- Tab 1 -->
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="p-15 border-bottom">
                    <!-- Sidebar -->
                    <h5 class="font-medium m-b-10 m-t-10">Layout Settings</h5>
                    <div class="custom-control custom-checkbox m-t-10">
                        <input type="checkbox" class="custom-control-input" name="theme-view" id="theme-view">
                        <label class="custom-control-label" for="theme-view">Dark Theme</label>
                    </div>
                    <div class="custom-control custom-checkbox m-t-10">
                        <input type="checkbox" class="custom-control-input sidebartoggler" name="collapssidebar" id="collapssidebar">
                        <label class="custom-control-label" for="collapssidebar">Collapse Sidebar</label>
                    </div>
                    <div class="custom-control custom-checkbox m-t-10">
                        <input type="checkbox" class="custom-control-input" name="sidebar-position" id="sidebar-position">
                        <label class="custom-control-label" for="sidebar-position">Fixed Sidebar</label>
                    </div>
                    <div class="custom-control custom-checkbox m-t-10">
                        <input type="checkbox" class="custom-control-input" name="header-position" id="header-position">
                        <label class="custom-control-label" for="header-position">Fixed Header</label>
                    </div>
                    <div class="custom-control custom-checkbox m-t-10">
                        <input type="checkbox" class="custom-control-input" name="boxed-layout" id="boxed-layout">
                        <label class="custom-control-label" for="boxed-layout">Boxed Layout</label>
                    </div>
                </div>
                <div class="p-15 border-bottom">
                    <!-- Logo BG -->
                    <h5 class="font-medium m-b-10 m-t-10">Logo Backgrounds</h5>
                    <ul class="theme-color">
                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin1"></a></li>
                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin2"></a></li>
                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin3"></a></li>
                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin4"></a></li>
                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin5"></a></li>
                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin6"></a></li>
                    </ul>
                    <!-- Logo BG -->
                </div>
                <div class="p-15 border-bottom">
                    <!-- Navbar BG -->
                    <h5 class="font-medium m-b-10 m-t-10">Navbar Backgrounds</h5>
                    <ul class="theme-color">
                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin1"></a></li>
                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin2"></a></li>
                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin3"></a></li>
                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin4"></a></li>
                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin5"></a></li>
                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin6"></a></li>
                    </ul>
                    <!-- Navbar BG -->
                </div>
                <div class="p-15 border-bottom">
                    <!-- Logo BG -->
                    <h5 class="font-medium m-b-10 m-t-10">Sidebar Backgrounds</h5>
                    <ul class="theme-color">
                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin1"></a></li>
                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin2"></a></li>
                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin3"></a></li>
                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin4"></a></li>
                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin5"></a></li>
                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin6"></a></li>
                    </ul>
                    <!-- Logo BG -->
                </div>
            </div>
            <!-- End Tab 1 -->
            <!-- Tab 2 -->
            <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="pills-profile-tab">
                <ul class="mailbox list-style-none m-t-20">
                    <li>
                        <div class="message-center chat-scroll">
                            <a href="javascript:void(0)" class="message-item" id='chat_user_1' data-user-id='1'>
                                <span class="user-img"> <img src="{{asset('Admins/img/users/1.jpg')}}" alt="user" class="rounded-circle"> <span class="profile-status online pull-right"></span> </span>
                                <div class="mail-contnet">
                                    <h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                            </a>
                            <!-- Message -->
                            <a href="javascript:void(0)" class="message-item" id='chat_user_2' data-user-id='2'>
                                <span class="user-img"> <img src="{{asset('Admins/img/users/2.jpg')}}" alt="user" class="rounded-circle"> <span class="profile-status busy pull-right"></span> </span>
                                <div class="mail-contnet">
                                    <h5 class="message-title">Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                            </a>
                            <!-- Message -->
                            <a href="javascript:void(0)" class="message-item" id='chat_user_3' data-user-id='3'>
                                <span class="user-img"> <img src="{{asset('Admins/img/users/3.jpg')}}" alt="user" class="rounded-circle"> <span class="profile-status away pull-right"></span> </span>
                                <div class="mail-contnet">
                                    <h5 class="message-title">Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                            </a>
                            <!-- Message -->
                            <a href="javascript:void(0)" class="message-item" id='chat_user_4' data-user-id='4'>
                                <span class="user-img"> <img src="{{asset('Admins/img/users/4.jpg')}}" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                <div class="mail-contnet">
                                    <h5 class="message-title">Nirav Joshi</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                            </a>
                            <!-- Message -->
                            <!-- Message -->
                            <a href="javascript:void(0)" class="message-item" id='chat_user_5' data-user-id='5'>
                                <span class="user-img"> <img src="{{asset('Admins/img/users/5.jpg')}}" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                <div class="mail-contnet">
                                    <h5 class="message-title">Sunil Joshi</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                            </a>
                            <!-- Message -->
                            <!-- Message -->
                            <a href="javascript:void(0)" class="message-item" id='chat_user_6' data-user-id='6'>
                                <span class="user-img"> <img src="{{asset('Admins/img/users/6.jpg')}}" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                <div class="mail-contnet">
                                    <h5 class="message-title">Akshay Kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                            </a>
                            <!-- Message -->
                            <!-- Message -->
                            <a href="javascript:void(0)" class="message-item" id='chat_user_7' data-user-id='7'>
                                <span class="user-img"> <img src="{{asset('Admins/img/users/7.jpg')}}" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                <div class="mail-contnet">
                                    <h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                            </a>
                            <!-- Message -->
                            <!-- Message -->
                            <a href="javascript:void(0)" class="message-item" id='chat_user_8' data-user-id='8'>
                                <span class="user-img"> <img src="{{asset('Admins/img/users/8.jpg')}}" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                <div class="mail-contnet">
                                    <h5 class="message-title">Varun Dhavan</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                            </a>
                            <!-- Message -->
                        </div>
                    </li>
                </ul>
            </div>
            <!-- End Tab 2 -->
            <!-- Tab 3 -->
            <div class="tab-pane fade p-15" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <h6 class="m-t-20 m-b-20">Activity Timeline</h6>
                <div class="steamline">
                    <div class="sl-item">
                        <div class="sl-left bg-success"> <i class="ti-user"></i></div>
                        <div class="sl-right">
                            <div class="font-medium">Meeting today <span class="sl-date"> 5pm</span></div>
                            <div class="desc">you can write anything </div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left bg-info"><i class="fas fa-image"></i></div>
                        <div class="sl-right">
                            <div class="font-medium">Send documents to Clark</div>
                            <div class="desc">Lorem Ipsum is simply </div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left"> <img class="rounded-circle" alt="user" src="{{'Admins/img/users/2.jpg'}}"> </div>
                        <div class="sl-right">
                            <div class="font-medium">Go to the Doctor <span class="sl-date">5 minutes ago</span></div>
                            <div class="desc">Contrary to popular belief</div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left"> <img class="rounded-circle" alt="user" src="{{'Admins/img/users/1.jpg'}}"> </div>
                        <div class="sl-right">
                            <div><a href="javascript:void(0)">Stephen</a> <span class="sl-date">5 minutes ago</span></div>
                            <div class="desc">Approve meeting with tiger</div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left bg-primary"> <i class="ti-user"></i></div>
                        <div class="sl-right">
                            <div class="font-medium">Meeting today <span class="sl-date"> 5pm</span></div>
                            <div class="desc">you can write anything </div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left bg-info"><i class="fas fa-image"></i></div>
                        <div class="sl-right">
                            <div class="font-medium">Send documents to Clark</div>
                            <div class="desc">Lorem Ipsum is simply </div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left"> <img class="rounded-circle" alt="user" src="{{'Admins/img/users/4.jpg'}}"> </div>
                        <div class="sl-right">
                            <div class="font-medium">Go to the Doctor <span class="sl-date">5 minutes ago</span></div>
                            <div class="desc">Contrary to popular belief</div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left"> <img class="rounded-circle" alt="user" src="{{'Admins/img/users/6.jpg'}}"> </div>
                        <div class="sl-right">
                            <div><a href="javascript:void(0)">Stephen</a> <span class="sl-date">5 minutes ago</span></div>
                            <div class="desc">Approve meeting with tiger</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Tab 3 -->
        </div>
    </div>
</aside>
<div class="chat-windows"></div>
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('Admins/libs/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('Admins/libs/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{'Admins/libs/bootstrap/dist/js/bootstrap.min.js'}}"></script>
<!-- apps -->
<script src="{{asset('Admins/js/app.js')}}"></script>
<script src="{{asset('Admins/js/app.init.dark.js')}}"></script>
<script src="{{asset('Admins/js/app-style-switcher.js')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('Admins/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('Admins/extra-libs/sparkline/sparkline.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('Admins/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{asset('Admins/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('Admins/js/custom.js')}}"></script>
<!--This page JavaScript -->
<!--chartis chart-->
<script src="{{asset('Admins/libs/chartist/dist/chartist.min.js')}}"></script>
<script src="{{asset('Admins/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
<!--c3 charts -->
<script src="{{asset('Admins/extra-libs/c3/d3.min.js')}}"></script>
<script src="{{asset('Admins/extra-libs/c3/c3.min.js')}}"></script>
<!--chartjs -->
<script src="{{asset('Admins/libs/chart.js/dist/Chart.min.js')}}"></script>
<script src="{{asset('Admins/js/pages/dashboards/dashboard1.js')}}"></script>
<script src="{{asset('Admins/js/morris.js')}}"></script>
<script src="{{asset('Admins/ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace('ckeditor');
    CKEDITOR.replace('ckeditor1');
    CKEDITOR.replace('ckeditor2');
    CKEDITOR.replace('ckeditor3');
    CKEDITOR.replace('ckeditor4');
    CKEDITOR.replace('ckeditor5');
    CKEDITOR.replace('ckeditor6');
    </script>
{{--<script src="/ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>--}}

</body>

</html>
