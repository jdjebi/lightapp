<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">

  <div class="">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" href="#">
          <span data-feather="home"></span>
          {{ $domaine->nom }}
        </a>
      </li>
    </ul>
  </div>

  <div class="sidebar-sticky pt-3">

    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" href="#">
          <span data-feather="home"></span>
          Tableau de bord
        </a>
      </li>
    </ul>

    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <span>Patrimoine</span>
      <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
        <i class="fa fa-plus"></i>
      </a>
    </h6>
    <ul class="nav flex-column mb-2">
      <li class="nav-item">
        <a class="nav-link" href="">
          <span data-feather="file-text"></span>
          Batiments
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">
          <span data-feather="file-text"></span>
          Salles
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">
          <span data-feather="file-text"></span>
          Appareils
        </a>
      </li>
    </ul>
  </div>
</nav>
