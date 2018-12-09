/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function initMap() {
  // The location of everwood
  // -26.018252,27.8848256
  var everwood = {lat: -26.018252, lng: 27.8848256};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 12, center: everwood});
  // The marker, positioned at everwood
  var marker = new google.maps.Marker({position: everwood, map: map});
}

initMap();