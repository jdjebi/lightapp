@extends('app.page')

@section('extras_style')
<link rel="stylesheet" href="{{ asset('asset/mobile/css/main.css') }}">
@endsection

@section('content')

<footer id="mobile-nav" class="footer">
   <div id="buttonGroup" class="btn-group selectors" role="group" aria-label="Basic example">
      <button id="home" type="button" class="btn btn-secondary button-active">
         <div class="selector-holder">
            <i class="far fa-newspaper"></i>
            <span>Actualités</span>
         </div>
      </button>
      <button id="feed" type="button" class="btn btn-secondary button-inactive">
         <div class="selector-holder">
            <i class="fa fa-address-book"></i>
            <span>Annuaire</span>
         </div>
      </button>
      <button id="create" type="button" class="btn btn-secondary button-inactive">
         <div class="selector-holder">
            <i class="fa fa-user-circle"></i>
            <span>Mon Profil</span>
         </div>
      </button>
      @if(!Auth::is_admin_logged())
        <button id="account" type="button" class="btn btn-secondary button-inactive">
           <div class="selector-holder">
              <i class="fa fa-tachometer-alt"></i>
              <span>Administration</span>
           </div>
        </button>
      @endif
   </div>
</footer>

@endsection

@section('scripts')
<script src="{{ asset('asset/mobile/js/main.js') }}"></script>
@endsection
