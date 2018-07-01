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