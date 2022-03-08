<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- <input class="form-control form-control-dark w-100" disabled type="text" placeholder="" aria-label="Search"> -->
  <div class="form-control-dark mt-5"></div>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="route('logout')">{{ __('Log Out') }}</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="">
            <!-- <i class="fas fa-briefcase"></i> -->
            <!-- <i class="fa-solid fa-gauge"></i> -->
              Panel
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="/panel/users">
            <!-- <i class="fab fa-blogger"></i> -->
              users
            </a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="/panel/role">
            <!-- <i class="fa-solid fa-camera-retro"></i> -->
              Role
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dashboard/portfolio">
            <!-- <i class="fas fa-briefcase"></i> -->
            <!-- <i class="fa-solid fa-gauge"></i> -->
              Portfolio
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dashboard/blog">
              <!-- <i class="fab fa-blogger"></i> -->
              Blog
            </a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="/dashboard/contact">
            <!-- <i class="fas fa-file-signature"></i> -->
              Inquaries
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Integrations
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
          </li>
        </ul>
      </div>
    </nav>

  