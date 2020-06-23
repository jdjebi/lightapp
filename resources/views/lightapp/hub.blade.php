@extends('lightapp.page')


@section('extras_style')
<style media="screen">
body{
  padding-top: 10px
}

.hub-title{
  font-weight: 100
}

.domaine-btn{
  text-align: center;
  background-color: #eee;
  width: 230px;
  padding: 30px;
  border-radius: 5px;
  margin: 10px;
}

.domaine-btn:hover{
  border: solid 1px #cfd8dc
}

.domaine-btn .desc{
  margin-top: 20px;
}

.domaine-btn-link{
  color: inherit;
}

.domaine-btn-link:hover{
  text-decoration: none;
  color: inherit;
}
</style>

@endsection

@section('content')
<div class="">
  <div class="d-flex justify-content-between">
    <div class=""></div>
    <div class="pt-2 pr-4">
      <a href="#"><span class="text-muted">{{ $user->fullname }}</span></a>
      <a class="ml-4" href="{{ route('logout') }}"><span class="text-muted"><i class="fa fa-power-off"></i> Déconnexion</span></a>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="">
        <h1 class="text-center hub-title">LightApp - HUB</h1>
      </div>
      <div class="text-center text-muted">
        <p>Sélectionnez un domaine pour commencer</p>
      </div>
    </div>
    <div class="col-md-12 mt-5 d-flex justify-content-center">

      <a class='domaine-btn-link' href="#" data-toggle="modal" data-target="#exampleModal">
        <div class="domaine-btn">
          <div class="ico text-center">
            <i class="fa fa-plus-circle fa-4x"></i>
          </div>
          <div class="desc">
            Nouveau domaine
          </div>
        </div>
      </a>


      <div class="domaine-btn">
        <div class="ico text-center">
          <i class="fa fa-home fa-4x"></i>
        </div>
        <div class="desc">
          ESATIC
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="exampleModalLabel">Nouveau domaine</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="" action="index.html" method="post">
          @csrf
          <div class="text-center">
            <div class="">
              <img class="text-center" src="{{ asset('asset/imgs/undraw/new-domaine.svg') }}" alt="" width="100px">
            </div>
            <div class="pt-3">
              <p class="text-muted">Pour une meilleur gestion de vos ressources</p>
            </div>
            <div class="">
              <div class="form-group mb-4 mt-2">
                <input class="form-control" type="text" name="label" id="label" placeholder="Nom du domaine">
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-primary">Créer</button>
      </div>
    </div>
  </div>
</div>
@endsection
