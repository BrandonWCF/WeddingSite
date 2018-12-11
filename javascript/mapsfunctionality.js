/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//var maps = null;
var everwood = {lat: -26.018252, lng: 27.8848256};
var maps = null;
function initMap() {
  //Create a map object and center it on everwood
  maps = new google.maps.Map(document.getElementById('map'), {zoom: 12, center: everwood});
  // The marker, positioned at everwood
  //console.log(maps);
  var marker = new google.maps.Marker({position: everwood, map: maps});
}

function focusEverwood() {
    //console.log("Focusing Everwood");
    var position = new google.maps.LatLng(everwood);
    maps.setCenter(position);
}

initMap();