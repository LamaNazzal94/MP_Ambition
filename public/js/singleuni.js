function initMap() {
    const map = new google.maps.Map(document.getElementById("map"), {
      center: { lat: YOUR_LATITUDE, lng: YOUR_LONGITUDE },
      zoom: 10,
    });
    
    const marker = new google.maps.Marker({
      position: { lat: YOUR_MARKER_LAT, lng: YOUR_MARKER_LNG },
      map: map,
      title: "Marker Title",
    });
  }