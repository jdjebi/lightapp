
<!DOCTYPE html>
<html>
<head>
<style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white;
  color: black;
  border: 2px solid #4CAF50;
  border-radius: 12px;
  width: 350px;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 15px 0 rgba(0,0,0,0.19);
}



.button3 {
  background-color: white;
  color: black;
  border: 2px solid #f44336;
  border-radius: 12px;
  width: 350px;
}

.button3:hover {
  background-color: #f44336;
  color: white;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 10px 15px 0 rgba(0,0,0,0.19);
}

.container {
  display: flex;
  flex-direction: column;

}
.block {
  margin-top: 50px;
  margin-left: auto;
  margin-right: auto;
}


</style>
</head>
<body>










<div class="container">

  <div class="block">

    <img id="myImage2" src="{{ asset("asset/imgs/tests/btn/Image2.png") }}" style="width: 300px; display:none">
    <img id="myImage" src="{{ asset("asset/imgs/tests/btn/Image1.png") }}" style="width: 250px">

  </div>

  <div class="block">

    <button class="button button1" src='btn/Image1.png'>ALLUMER</button>
    <button class="button button3" src='btn/Image2.png'>ETEINDRE</button>

  </div>


</div>

<script src="{{ asset('asset/js/jquery-3.4.1.min.js') }}" type="text/javascript"></script>

<script>

var lightRemote_ip_address = 'http://192.168.1.103/' // Adresse IP de l'esp

var allumer_led_url = lightRemote_ip_address + "allumer/led1";
var eteindre_led_url = lightRemote_ip_address + "eteindre/led1";

function allumer_led(){
  $.get({

    url: allumer_led_url,
    dataType: 'plain',
    success: function(){
      console.log("Allumage ok");
    },
    error: function(){
      console.log("Eteindre ok");
    }

  });
}

function eteindre_led(){
  $.get({

    url: eteindre_led_url,
    dataType: 'html',
    success: function(){
      console.log("Allumage ok");
    },
    error: function(){
      console.log("Eteindre ok");
    }

  });
}



$(document).ready(function(){

  $('.button1').click(function(){
    $('#myImage').hide();
    $('#myImage2').show();
    allumer_led();
  });

  $('.button3').click(function(){
    $('#myImage').show();
    $('#myImage2').hide();
    eteindre_led();
  });


});
</script>


</body>


</html>
