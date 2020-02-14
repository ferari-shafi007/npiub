<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="/home" class="simple-text logo-normal">
        <img src="/images/npi.png" width="100">
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage ?? '' ?? '' == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage ?? '' ?? '' == 'profile' || $activePage ?? '' ?? '' == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#userManagement" aria-expanded="true">
          <i class="fa fa-user-circle"></i>
          <p>User Management
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="userManagement">
          <ul class="nav">
            <li class="nav-item{{ $activePage ?? '' ?? '' == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage ?? '' ?? '' == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>


      <li class="nav-item{{ $activePage ?? '' ?? '' == 'table' ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#studentManagement" aria-expanded="true">
          <i class="material-icons">group</i>
            <p>Students
                <b class="caret"></b>
            </p>
        </a>

        <div class="collapse show" id="studentManagement">
          <ul class="nav">
            <li class="nav-item {{ $activePage ?? '' ?? '' == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('student.index') }}">
          <i class="material-icons">list</i>
                <span class="sidebar-normal">Student list</span>
              </a>
            </li>
            <li class="nav-item{{ $activePage ?? '' ?? '' == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('student.create') }}">
          <i class="material-icons">add</i>
                <span class="sidebar-normal"> Create Student </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

    <li class="nav-item{{ $activePage ?? '' ?? '' == 'table' ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#noticeManagement" aria-expanded="true">
          <i class="material-icons">announcement</i>
            <p>Notice
                <b class="caret"></b>
            </p>
        </a>

        <div class="collapse show" id="noticeManagement">
          <ul class="nav">
            <li class="nav-item {{ $activePage ?? '' ?? '' == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('notice.index') }}">
          <i class="material-icons">list</i>
                <span class="sidebar-normal">Notice list</span>
              </a>
            </li>
            <li class="nav-item{{ $activePage ?? '' ?? '' == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('notice.create') }}">
          <i class="material-icons">add</i>
                <span class="sidebar-normal"> Create Notice </span>
              </a>
            </li>
          </ul>
        </div>
      </li>


      <li class="nav-item{{ $activePage ?? '' ?? '' == 'table' ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#lectureManage" aria-expanded="true">
          <i class="material-icons">record_voice_over</i>
            <p>Lectures
                <b class="caret"></b>
            </p>
        </a>

        <div class="collapse show" id="lectureManage">
          <ul class="nav">
            <li class="nav-item {{ $activePage ?? '' ?? '' == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('lecture.index') }}">
          <i class="material-icons">list</i>
                <span class="sidebar-normal">lecture list</span>
              </a>
            </li>
            <li class="nav-item{{ $activePage ?? '' ?? '' == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('lecture.create') }}">
          <i class="material-icons">add</i>
                <span class="sidebar-normal"> Create lecture </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item{{ $activePage ?? '' ?? '' == 'table' ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#subjectManage" aria-expanded="true">
          <i class="material-icons">library_books</i>
            <p>Subject
                <b class="caret"></b>
            </p>
        </a>

        <div class="collapse show" id="subjectManage">
          <ul class="nav">
            <li class="nav-item {{ $activePage ?? '' ?? '' == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('subject.index') }}">
          <i class="material-icons">list</i>
                <span class="sidebar-normal">subject list</span>
              </a>
            </li>
            <li class="nav-item{{ $activePage ?? '' ?? '' == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('subject.create') }}">
          <i class="material-icons">add</i>
                <span class="sidebar-normal"> Create subject </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item{{ $activePage ?? '' ?? '' == 'table' ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#semManage" aria-expanded="true">
          <i class="material-icons">library_books</i>
            <p>Semester
                <b class="caret"></b>
            </p>
        </a>

        <div class="collapse show" id="semManage">
          <ul class="nav">
            <li class="nav-item {{ $activePage ?? '' ?? '' == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('semester.index') }}">
          <i class="material-icons">list</i>
                <span class="sidebar-normal">semester list</span>
              </a>
            </li>
            <li class="nav-item{{ $activePage ?? '' ?? '' == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('semester.create') }}">
          <i class="material-icons">add</i>
                <span class="sidebar-normal"> Create semester </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item{{ $activePage ?? '' ?? '' == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('bach.index') }}">
          <i class="material-icons">device_hub</i>
            <p>bach</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage ?? '' ?? '' == 'icons' ? ' active' : '' }}">
      <a class="nav-link" href="/front/1/edit">
          <i class="material-icons">settings</i>
          <p>General Seting</p>
        </a>
      </li>


    </ul>
  </div>
</div>
