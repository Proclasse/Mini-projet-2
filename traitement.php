<?php
	// -------------- partie formulaire -----------------

	//  variable définie et non nulle
	if (isset($_POST['nom']) && isset($_POST['mail'])) {
		$nom = $_POST['nom'];
		$mail = $_POST['mail'];
	}
	else {
		echo "Erreur sur le nom ou l'adresse mail";
	}
?>