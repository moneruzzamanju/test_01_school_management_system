<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('back.index') }}" class="brand-link">
      <img src="{{ asset('backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">School Management System</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('backend/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info w-100">
          <div class="row">
            <div class="col-8">
              <a href="{{ route('back.index') }}" class="d-block">Moneruzzaman</a>
            </div>
            <div class="col-4">
              {!! Form::open(['method'=>'post', 'route'=>'logout']) !!}
              {!! Form::button('<i class="fas fa-power-off"></i>', ['type'=>'submit', 'onclick'=>'return confirm("Are you sure !")','class'=>'btn btn-danger btn-sm']) !!}}
              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>

         <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Teacher
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('teacher.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Teacher</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('teacher.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Teachers</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Student
                        <i class="fas fa-angle-left right"></i>
                        <span class="badge badge-info right">6</span>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('student.create') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Student</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('student.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>All Students</p>
                        </a>
                    </li>
                </ul>
            </li>
          <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Subject
                        <i class="fas fa-angle-left right"></i>
                        <span class="badge badge-info right">6</span>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('subject.create') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Subject</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('subject.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>All Subjects</p>
                        </a>
                    </li>
                </ul>
            </li>
          <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Guardian
                        <i class="fas fa-angle-left right"></i>
                        <span class="badge badge-info right">6</span>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('guardian.create') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Guardian</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('guardian.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>All Guardians</p>
                        </a>
                    </li>
                </ul>
            </li>
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
