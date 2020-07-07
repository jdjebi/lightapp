<style media="screen">
body{
  padding-top: 10px
}

</style>
<div class="">
  <div class="d-flex justify-content-between">
    <div class=""></div>
    <div class="pt-2 pr-4">
      <a href="#"><span class="text-muted">{{ $user->fullname }}</span></a>
      <a class="ml-4" href="{{ route('logout') }}"><span class="text-muted"><i class="fa fa-power-off"></i> Déconnexion</span></a>
    </div>
  </div>
</div>
