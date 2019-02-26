<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{url('')}}/uploads/avatars/{{Auth::user()->avatar}}"  class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
            </div>
        </div>
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Main Navigation</li>
            <li><a href="{{url('/home')}}"><i class="fa fa-dashboard text-success"></i> <span>Dashboard</span></a></li>
            @can('isStudent')
                <li><a href="{{url('/search-exam')}}"><i class="fa fa-fw fa-file-text-o text-aqua"></i> <span> My Exam</span></a></li>
            @endcan
            @can('isTeacher')
                <li><a href="{{route('teacherexam.index')}}"><i class="fa fa-fw fa-file-text text-blue"></i> <span>Create Exam</span></a></li>
            @endcan
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gears text-warning"></i>
                    <span>Settings</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('password.change')}}"><i class="fa fa-fw fa-unlock text-purple"></i>Changed Password</a></li>
                    <li><a href="{{url('/profile')}}"><i class="fa fa-fw fa-user text-primary"></i>Profile Picture</a></li>

                </ul>
            </li>

            <li class="">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="fa fa-power-off text-red"></i>
                    <span>Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
                </form>
            </li>

        </ul>
    </section>
</aside>