<header class="main-header">
    <a href="{{url('/')}}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>E</b>xam</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Online</b>Exam</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{url('')}}/uploads/avatars/{{Auth::user()->avatar}}"  class="user-image" alt="User Image">
                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{url('')}}/uploads/avatars/{{Auth::user()->avatar}}"  class="img-circle" alt="User Image">
                            <p>
                                {{ Auth::user()->name }} -{{ Auth::user()->user_type }}
                                <small>Member since &nbsp; {{ Auth::user()->created_at }}</small>
                            </p>

                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="row">
                                <div class="col-xs-4 text-center">
                                    <a href="#">Followers</a>


                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Sales</a>

                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="{{url('/profile')}}">Profile</a>
                                </div>
                            </div>
                            <!-- /.row -->
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a class="btn btn-default btn-flat" href="{{route('password.change')}}">
                                    <i class="halflings-icon lock"></i>
                                    Password Change
                                </a>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="halflings-icon off"></i>
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->

            </ul>

        </div>
    </nav>
</header>