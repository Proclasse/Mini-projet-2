              
function redirect(){
	//on redirige vers la page d'acceuil 3 sec aprés ouverture du controle php
	//var $action = 'window.location.replace("http://127.0.0.1/index.html");';
	var $action = 'document.location.href = "index.html";';
	setTimeout($action, 10000);			//volontairement à 10 sec pour temps de lecture
}

