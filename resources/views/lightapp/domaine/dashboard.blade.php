@extends('lightapp.page2')

@section('content')
<style media="screen">
  .font-20{
    font-size: 20px
  }
  .font-40{
    font-size: 40px
  }
  .action-pad-item{
    width: 250px
  }
  .action-pad-item-link:hover{
    text-decoration: none;
    color: inherit;
  }
</style>

<div class="container-fluid">
  <div class="row">
    @include('lightapp.side_nav')

    <main role="main" class="mt-4 col-md-9 ml-sm-auto col-lg-10 px-md-4">

      <div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Tableau de bord</li>
          </ol>
        </nav>
      </div>

      <div class="display-4 mt-5 text-center font-40 mb-4">Que voulez-vous créer ?</div>

      <div class="d-flex justify-content-around flex-wrap">

        <div id='action-pad'>
          <a class="action-pad-item-link" href="#">
            <div>
              <div class="border action-pad-item p-4">
                <div>
                  <div class="text-center">
                    <img class="resac-w-100" src="{{ asset('asset/imgs/app/batiment.svg') }}" alt="">
                  </div>
                </div>
                <div class="text-center pt-3">
                  <div class="text-muted">
                    <span class="font-20">Batiment</span>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>

        <div id='action-pad'>
          <a class="action-pad-item-link" href="#">
            <div>
              <div class="border action-pad-item p-4">
                <div>
                  <div class="text-center">
                    <img class="resac-w-100" src="{{ asset('asset/imgs/app/room.svg') }}" alt="">
                  </div>
                </div>
                <div class="text-center pt-3">
                  <div class="text-muted">
                    <span class="font-20">Salle</span>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>

        <div id='action-pad'>
          <a class="action-pad-item-link" href="#">
            <div>
              <div class="border action-pad-item p-4">
                <div>
                  <div class="text-center">
                    <img class="resac-w-100" src="{{ asset('asset/imgs/app/device.svg') }}" alt="">
                  </div>
                </div>
                <div class="text-center pt-3">
                  <div class="text-muted">
                    <span class="font-20">Dispositifs</span>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>

      </div>



      </div>

    </main>

  </div>
</div>

@endsection
