<style media="screen">
  .nav-extras-items{
    visibility: visible;
    display: block;
  }

  .notif-badge{
    font-size: 11px;
    padding: 1px 3px 1px 3px;
    border-radius: 2px;
    background-color: #2196f3;
    color: #fff
  }
  @media (min-width: 992px){
    .nav-extras-items{
      visibility: hidden;
      display: none;
    }
  }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand resac-logo-font" href="{{ route("home") }}">
    <span class="align-middle">LightApp</span>
  </a>
  <div class="d-flex align-items-center">
    <div class="nav-extras-items">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route("dev_news") }}">
            <i class="far fa-lightbulb" style="color: #2196f3; font-size: 21px"></i>
          </a>
        </li>
      </ul>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="border-color: transparent;">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>

  <div class="collapse navbar-collapse" id="navbarNav">

    <ul class="navbar-nav mr-auto">


      <li class="nav-item d-none d-md-block d-lg-block">
        <a class="nav-link" href="{{ route("actu") }}"><i class="far fa-newspaper"></i> Actualités</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route("app.post") }}"><i class="far fa-edit"></i> Publications</a>
      </li>

      <li class="nav-item d-none d-md-block d-lg-block">
        <a class="nav-link" href="{{ route("dev_news") }}"> <i class="far fa-lightbulb" style="color: #2196f3"></i> Nouveautés</a>
      </li>

    </ul>

    <ul  class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href=""><i class="fa fa-sign-in-alt"></i> Connexion</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=""><i class="fas fa-user"></i> Créer un compte</a>
      </li>
    </ul>

  </div>
</nav>
