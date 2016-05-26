function defCaptcha(){

	//affectation de 2 nbr et du signe de l'ex par randomisation (floor -> tronque la partie décimale)
	var $nb1 = Math.floor((Math.random()*100)+10);
	var $nb2 = Math.floor((Math.random()*10)+1);
	var $op = (Math.random()*1);
	if ($op < 0.5){
		$op = " plus ";
		$signe ="+";
	}
	else{
		$op = " moins ";
		$signe ="-";
	}
	
	//On affiche le captcha
	$calc.innerHTML = $nb1 + $op + $nb2;			//conversion implicite : $op est une String aprés le test

	//les nbrs générés sont passés à l'attribut value des champs
	$t1.setAttribute("value", $nb1);
	$t2.setAttribute("value", $nb2);
	$valop.setAttribute("value", $signe);
}


/*------−Validation du captcha mathématique-----------*/

function verifCaptcha(){

	if(document.myForm.repMath.value == eval($t1.value + $signe + $t2.value)){
		//alert("calcul ok");
		return true;
	}
	else{
		alert("Vérifier votre calcul...");
		document.myForm.repMath.focus();
		return false;
	}
}


//definition des variable - DOM
var $t1 = document.getElementById("t1");
var $t2 = document.getElementById("t2");
var $valop = document.myForm.operator.value;
var $calc = document.getElementById("calcul");