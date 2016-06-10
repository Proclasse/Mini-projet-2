<?php
session_start();
session_id();
unset ($_SESSION['pseudo']);
unset ($_SESSION['mdp']);

	$pseudo = htmlspecialchars($_POST['pseudo']);
	$mdp = htmlspecialchars($_POST['mdp']);
	$id =null;
	
switch ($pseudo) {
	case 'Cecile': $id = 1;
		break;
	case 'Philippe': $id = 2;
		break;
	case 'Clementine': $id = 3;
		break;
	case 'Inti': $id = 4;
		break;
	default: $id = 1;
		break;
}

	if (isset($pseudo, $mdp)) {

		// Connexion à la bdd
			try {
			$bdd = new PDO('mysql:host=localhost;dbname=mini-projet','root','My.1.SQL.');
			// gestion du niveau d'erreur
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			// Préparation puis envoie de la requête
			$sqladmin = 'SELECT login, mot_de_passe FROM admin WHERE id='.$id;
			$reqadmin = $bdd -> query($sqladmin);

			$reqadmin -> setFetchMode(PDO::FETCH_ASSOC);
		
				foreach ($reqadmin as $u) {
					$login = $u['login'];
					$mot_de_passe = $u['mot_de_passe'];
						}
				if ($pseudo == $login && $mdp == $mot_de_passe){
					$_SESSION['pseudo'] = $pseudo;
					$_SESSION['mdp'] = $mdp;
					header('Location: modifs.php');
				}
				else {
					session_destroy();
					header('Location: adminCM.php');
				}
			} /* fin du try */
			catch(PDOException $e) {
			echo "Problème de connexion à la base de données :".$e->getMessage();
			die();
			}
	}
	else {
		header('Location: adminCM.php');
	}

?>