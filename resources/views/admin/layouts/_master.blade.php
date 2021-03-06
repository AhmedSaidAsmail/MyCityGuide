<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin C-Panel | @yield('title')</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('admin_resources/dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin_resources/dist/css/skins/_all-skins.min.css')}}">
    @yield('Extra_Css')
</head>
<body class="hold-transition skin-black-light sidebar-mini">
<div class="wrapper">
    <header class="main-header">
        <a href="" class="logo">
            <span class="logo-mini"><b>A</b>LT</span> <span class="logo-lg"><b>Admin</b>C-Panel</span>
        </a>
        <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span>
                <span class="icon-bar"></span> <span class="icon-bar"></span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{asset('images/admin/administrator.png')}}" class="user-image" alt="User Image">
                            <span class="hidden-xs">{{Auth::user()->email}} </span> </a>
                        <ul class="dropdown-menu">
                            <li class="user-header">
                                <img src="{{asset('images/admin/administrator.png')}}" class="img-circle"
                                     alt="User Image">
                                <p> {{Auth::user()->email}}
                                    <small>Member since {{Auth::user()->created_at}}</small>
                                </p>
                            </li>
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{route('admin.logout')}}" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('images/admin/administrator.png')}}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>{{Auth::user()->name}}</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a></div>
            </div>
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>
            <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>
                <li class="treeview"><a href="{{route('admin.dashboard')}}"> <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span> </a>

                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Customers</span>
                        <span class="pull-right-container">
                <span class="label label-primary pull-right">{{App\Models\Customer::all()->count()}}</span>
                </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="{{route('customer.index')}}">
                                <i class="fa fa-circle-o"></i> Customers List
                            </a>
                        </li>
                        <li>
                            <a href="{{route('customer.create')}}">
                                <i class="fa fa-circle-o"></i> Add New Customer
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Companies</span>
                        <span class="pull-right-container">
                <span class="label label-primary pull-right">{{App\Models\Company::all()->count()}}</span>
                </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="{{route('company.index')}}">
                                <i class="fa fa-circle-o"></i> Companies List
                            </a>
                        </li>
                        <li>
                            <a href="{{route('company.create')}}">
                                <i class="fa fa-circle-o"></i> Add New Company
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </section>
    </aside>
    <div class="content-wrapper">
        @if(Session::has('success'))
            <div class="alert alert-success alert-dismissable">
                {{Session::get('success')}}
            </div>
        @endif
        @if(Session::has('failure'))
            <div class="alert alert-danger alert-dismissable">
                {{Session::get('failure')}}
            </div>
        @endif
        @yield('content')
    </div>

    <footer class="main-footer">
        <div class="pull-right hidden-xs"><b>Version</b> 2.3.7</div>
        <strong>Copyright &copy; 2016 <a href="mialto:info.matrixcode@gmail.com"> Matrix Code Micro
                Systems</a>.</strong> All rights
        reserved.
    </footer>
    <div class="control-sidebar-bg"></div>
</div>
<script src="{{asset('js/jquery-2.2.3.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin_resources/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('admin_resources/plugins/fastclick/fastclick.js')}}"></script>
<script src="{{asset('admin_resources/dist/js/app.min.js')}}"></script>
@yield('Extra_Js')
</body>
</html>
