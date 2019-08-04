<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel -->
        {{-- <div class="user-panel">
            <div class="pull-left image">
                <img src="/{{Auth::user()->profile->profileImage()}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->first_name}}</p>
                <a href="/profile/{{Auth::user()->id}}"><i class="fa fa-circle text-success"></i>online</a>
            </div>
        </div> --}}


        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li>
                <a href="{{route('home')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{route('user.index')}}">
                    <i class="fa fa-user"></i> <span>Manage Users</span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-lock"></i> <span>Roles and permissions</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{route('permission.index')}}">
                            <i class=""></i> <span>Permissions</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('role.index')}}">
                            <i class=""></i> <span>Roles</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

    </section>
    <!-- /.sidebar -->
</aside>
