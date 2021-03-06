<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{ config('app.name')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="javascript:;" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">user</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        @if(Auth::guard('admin')->user() && Auth::guard('admin')->user()->admin_type == config('examapp.user_role.admin'))
        <li class="nav-item">
            <a href="{{ route('admin.student.index')}}" class="nav-link">
                <i class="nav-icon far fa-circle text-danger"></i>
                <p class="text">Student</p>
            </a>
        </li>
        @endif
        @if(Auth::guard('admin')->user() && Auth::guard('admin')->user()->admin_type == config('examapp.user_role.admin'))
        <li class="nav-item">
            <a href="{{ route('admin.teacher.index')}}" class="nav-link">
                <i class="nav-icon far fa-circle text-danger"></i>
                <p class="text">Teacher</p>
            </a>
        </li>
        @endif
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon far fa-circle text-danger"></i>
                <p class="text">Exam</p>
            </a>
        </li>
        <li class="nav-item">
                <a class="nav-link" href="{{ route('logout')}}" onclick="javascript:return confirm('Are you sure you want to log out?');">
                    <i class="nav-icon far fa-circle text-danger"></i><p class="text">Sign Out</p></a>
        </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>