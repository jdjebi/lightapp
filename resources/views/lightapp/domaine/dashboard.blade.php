@extends('lightapp.page2')

@section('content')

<style media="screen">
  .font-20{
    font-size: 20px
  }
  .action-pad-item{
    width: 200px
  }
</style>

<div class="container-fluid">
  <div class="row">
    @include('lightapp.side_nav')

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">


      <div class="display-4 mt-5 text-center">Que voulez-vous faire ?</div>

      <div id='action-pad' class="d-flex justify-content-around">

        <div class="border action-pad-item p-4">
          <div>
            <div class="text-center">
              <img class="resac-w-100" src="{{ asset('asset/imgs/app/batiment.svg') }}" alt="">
            </div>
          </div>
          <div class="text-center">
            <div class="text-muted">
              <span class="font-20">Batiment</span>
            </div>
          </div>
        </div>

      </div>

    </main>

  </div>
</div>

@endsection
