<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="@route('admin.dashboard')">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      @isset(auth()->user()->role->permission['permission']['gig']['list'])
      <li class="nav-item">
        <a class="nav-link collapsed" href="@route('gig.list')">
          <i class="bi bi-file-earmark"></i>
          <span>Gig</span>
        </a>
      </li><!-- End gig show Page Nav -->
      @endisset

      @isset(auth()->user()->role->permission['permission']['driver']['list'])
      <li class="nav-item">
        <a class="nav-link collapsed" href="@route('driver')">
          <i class="bi bi-file-earmark"></i>
          <span>Driver</span>
        </a>
      </li><!-- End gig show Page Nav -->
      @endisset

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('work/status') }}">
          <i class="bi bi-file-earmark"></i>
          <span>Request Work</span>
        </a>
      </li><!-- End gig show Page Nav -->
  


      <li class="nav-heading">Setting</li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#acl-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Permission</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="acl-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="@route('admin.permission.index')">
              <i class="bi bi-circle"></i><span>Permission List</span>
            </a>
          </li>
          <li>
            <a href="@route('admin.permission.create')">
              <i class="bi bi-circle"></i><span>Permission Create</span>
            </a>
          </li>
          <li>
            <a href="@route('admin.role.index')">
              <i class="bi bi-circle"></i><span>List Of Role</span>
            </a>
          </li>
        </ul>
      </li><!-- End permission Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      @isset(auth()->user()->role->permission['permission']['gig']['list'])
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#git-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Gig</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="git-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          @isset(auth()->user()->role->permission['permission']['gig']['add'])
          <li>
            <a href="@route('gig.create')">
              <i class="bi bi-circle"></i><span>Gig Create</span>
            </a>
          </li>
          @endisset
          @isset(auth()->user()->role->permission['permission']['gig']['list'])
          <li>
            <a href="@route('gig.index')">
              <i class="bi bi-circle"></i><span>List Of Gig</span>
            </a>
          </li>
          @endisset
        </ul>
      </li><!-- End git Nav -->
      @endisset
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="@route('logout')">
          <i class="bi bi-file-earmark"></i>
          <span>Logout</span>
        </a>
      </li><!-- End logout Page Nav -->

    </ul>

  </aside>