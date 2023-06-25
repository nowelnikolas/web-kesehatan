<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
              <span data-feather="file-text"></span>
              My post
            </a>
          </li>  -->
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/posts') ? 'active' : '' }}" href="/dashboard/posts">
              <span data-feather="file-text"></span>
              Edit profile
            </a>
        </ul>

        @can('admin')
        <h6 class="sidebar-heading d-flex justify-conten-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Administrator</span>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
              <span data-feather="file-text"></span>
              Article Management
            </a>
          </li>
          <li class="nav-item">
          <a class="nav-link {{ Request::is('/dashboard/doctors/create*') ? 'active' : '' }}" href="/dashboard/doctors/create">
              <span data-feather="file-text"></span>
              Add Psychiatrist
            </a>
          </li>
        </ul>
        @endcan

      </div>
    </nav>