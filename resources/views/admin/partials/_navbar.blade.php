<div class="navbar">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="brand" href="#"><span>Online Exam</span></a>
            <div class="nav-no-collapse header-nav">
                <ul class="nav pull-right">
                    <li class="dropdown">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="halflings-icon white user"></i>{{Session::get('admin_name')}}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-menu-title">
                                <span>Account Settings</span>
                            </li>
                            <li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
                            <li><a href="{{url('/logout')}}"><i class="halflings-icon off"></i> Logout</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>