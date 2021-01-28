$( document ).ready(function() {
      var formulario = "#form-contacto";
      var notificacion = "";
      $(formulario).validate({
      submitHandler: function(form){
        $(form).ajaxSubmit({
          beforeSend: function() {
            //Desactiva formulario
            $(notificacion).html('');
            $(formulario).find('input, textarea, button, select').attr('disabled',true);
          },
          success: function(respuesta){
            $(formulario).find('input, textarea, button, select').attr('disabled',false);
            $("form"+formulario+" :input").each(function(){
              if($(this).attr('type') != "submit")
                $(this).val("");
            });
            $("#content-alerta").html(respuesta);
            $("#alerta").removeClass("hidden");
          },
          error: function(xhr, ajaxOptions, thrownError){
            $(formulario).find('input, textarea, button, select').attr('disabled',false);
            alert("Ocurrio un error");
          }
        })
      }
    })
});


function initMap() {
  var uluru = {lat: 20.6607399, lng: -103.3382118};
  var map = new google.maps.Map(document.getElementById('mapa'), {
    zoom: 15,
    center: uluru
  });
  var marker = new google.maps.Marker({
    position: uluru,
    map: map,
    title: 'Taller de Torno Ayala'
  });
}

function onSubmit(token) {
  $("#token").val(token);
  if ($("#form-contacto").valid()) {
    $("#form-contacto").submit();
  }
}