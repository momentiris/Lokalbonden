if (window.location.pathname == "/om-oss/") {
function initMap() {
  var uluru = {lat: 56.9848312, lng: 12.5361347};
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
};
