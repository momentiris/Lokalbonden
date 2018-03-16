function initMap() {
  var uluru = {lat: 57.718502, lng: 11.7668983};
  var map = new google.maps.Map(document.querySelector('.third_section'), {
    zoom: 11,
    center: uluru
  });
  var marker = new google.maps.Marker({
    position: uluru,
    map: map
  });
};

document.querySelector(".third_section").addEventListener("click", initMap);
