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

        <div class="border action-pad-item">
          <div class="">

          </div>
          <div class="bg-white">
            <div class="text-center">
              <strong class="font-20">Batiment</strong>
            </div>
            <div class="p-2 text-center">
              <button type="button" class="btn btn-primary btn-sm">Créer</button>
            </div>
          </div>
        </div>

      </div>

    </main>

  </div>
</div>

@endsection
