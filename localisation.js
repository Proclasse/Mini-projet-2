
/**=========+Récupération des coords**********===*/
function successCallback (position) {
	//navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
	//alert("Latitude : " + position.coords.latitude + ", longitude : " + position.coords.longitude);
	//recupère la balise dans laquelle on affiche les positions
	var $mon_id = document.getElementById("ma_position");
	$mon_id.innerHTML = "Latitude : " + position.coords.latitude + ", longitude : " + position.coords.longitude;

	$map.panTo(new google.maps.LatLng(position.coords.latitude, position.coords.longitude));

  	var $marker1 = new google.maps.Marker({
    position: new google.maps.LatLng(position.coords.latitude, position.coords.longitude), 
    map: map$
  }); 
}


function stopWatch(){

	navigator.geolocation.clearWatch(watchId);
}


function errorCallback(error){
	//informations utilisateur en cas d'erreurs levées lors de getCurrentPosition() ou watchPosition()
  switch(error.code){
    case error.PERMISSION_DENIED:
      alert("L'utilisateur n'a pas autorisé l'accès à sa position");
      break;      
    case error.POSITION_UNAVAILABLE:
      alert("L'emplacement de l'utilisateur n'a pas pu être déterminé");
      break;
    case error.TIMEOUT:
      alert("Le service n'a pas répondu à temps");
      break;
    }
}


/*=====Mise en place de la carte========*/
function initialize() {
  var $map = new google.maps.Map(document.getElementById("mymap"), 
  	{
        zoom: 18,
        //on centre la carte sur Tours centre ...
        center: new google.maps.LatLng(47.390061, 0.688925),
        //style de carte (plan , satellite...)
        mapTypeId: google.maps.MapTypeId.ROADMAP
      }); 
  
 	var $marker0 = new google.maps.Marker(
   	{
    	position: new google.maps.LatLng(47.390061, 0.688925), 
    	map: $map
    }); 
} 



if (navigator.geolocation){
  	//alert("Bravo ! Votre navigateur prend en compte la géolocalisation HTML5");
  	//.getCurrentPosition prend en 1) parametre la fonction successCallback, et en second le errorCallback
	//navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
	
	// plus d'attributs...
	//navigator.geolocation.getCurrentPosition(successCallback, errorCallback, {enableHighAccuracy : true, timeout:10000, maximumAge:600000});

	//si on veut suivre les déplacemnts de utilisateur
	var $suiviUser = navigator.geolocation.watchPosition(successCallback, errorCallback);

}
else{
  alert("Dommage... Votre navigateur ne prend pas en compte la géolocalisation HTML5");
}
