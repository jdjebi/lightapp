@extends('lightapp.page2')


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

      @foreach ($domaines as $domaine)
        <a class='domaine-btn-link' href="{{ route('lightapp.domaine',$domaine->nom) }}">
          <div class="domaine-btn">
            <div class="ico text-center">
              <i class="fa fa-home fa-4x"></i>
            </div>
            <div class="desc">
               {{ $domaine->nom }}
            </div>
          </div>
        </a>
      @endforeach

    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog">
    <form id='v-form' v-on:submit.prevent="onSubmit">
      @csrf
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-dark" id="exampleModalLabel">Nouveau domaine</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="text-center">
            <div class="">
              <img class="text-center" src="{{ asset('asset/imgs/undraw/new-domaine.svg') }}" alt="" width="100px">
            </div>
            <div class="pt-3">
              <p class="text-muted">Pour une meilleur gestion de vos ressources</p>
            </div>
            <div class="">
              <div class="form-group mb-4 mt-2">
                <input class="form-control" type="text" v-bind:value="nom" name="nom" id="label" placeholder="Nom du domaine" required>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" v-bind:disabled="submit_btn">Annuler</button>
          <button id='submit-btn' type="submit" class="btn btn-primary" v-bind:disabled="submit_btn">
            <span>Créer</span>
            <div v-if="submit_btn" class="loader spinner-border text-white spinner-border-sm d-none" role="status" >
              <span class="sr-only">Loading...</span>
            </div>
          </button>
        </div>
    </div>
  </form>
  </div>
</div>
@endsection

@section('scripts')

<script src="asset/js/vue.js" type="text/javascript"></script>
<script type="text/javascript">

var vf_data = {
  url: '{{ route('api.domaine.create') }}',
  submit_btn: false,
  nom: ''
};

var vf = new Vue({
  el: "#v-form",

  data:vf_data,

  beforeCreate: function(){
    $('#submit-btn .loader').removeClass("d-none");
  },

  methods:{
    onSubmit: function(event){
      var form_data = $(event.target).serializeArray();

      this.submit_btn = true;

      $.post({
        url: this.url,
        data: form_data,
        dataType: 'json',
        success: this.onSuccess,
        error: this.onError
      });

    },
    onSuccess: function(data,status){
      console.log(data);
      this.nom = '';
      this.submit_btn = false;
      window.location = '';
    },
    onError: function (data,status,error){
      console.log(error);
      this.nom = '';
      this.submit_btn = false;
    },
  }

});
</script>

@endsection
