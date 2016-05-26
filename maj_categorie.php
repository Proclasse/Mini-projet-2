<?php
session_start();
if (!isset($_SESSION['pseudo'], $_SESSION['mdp'])){
header('Location: adminCM.php');
}

// récupération de l'id pour choisir entre l'ajout ou la suppression
$id_as = (int) $_GET['id_as'];

if ($id_as ==1 ) {
	// ajout d'une catégorie	
	if (isset($_POST['noms'])){
		$noms = htmlspecialchars($_POST['noms']);

		try {
			$bdd = new PDO('mysql:host=localhost;dbname=mini-projet','root','');
			// gestion du niveau d'erreur
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			// requête dans la variable $sql puis injection de la requête dans la base, le tout dans la variable $req
			$sql = "INSERT INTO `categories`(`noms`, `liens`) VALUES ('".$noms."', 'photos/".$noms."/')";
			$req = $bdd -> query($sql);
		}
		catch(PDOException $e) {
			echo "Problème de connexion à la base de données :".$e->getMessage();
			die();
		}
		header('Location: page_ajout_categories.php');
	}
	else {
		header('Location: page_ajout_categories.php');
	}

}
elseif ($id_as == 2) {
	// suppression d'une catégorie	
	if (isset($_POST['id'])){
		$id = (int) $_POST['id'];

		try {
			$bdd = new PDO('mysql:host=localhost;dbname=mini-projet','root','');
			// gestion du niveau d'erreur
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			// requête dans la variable $sql puis injection de la requête dans la base, le tout dans la variable $req
			$sql = "DELETE FROM `categories` WHERE `categories`.`id` = ".$id;
			$req = $bdd -> query($sql);
		}
		catch(PDOException $e) {
			echo "Problème de connexion à la base de données :".$e->getMessage();
			die();
		}
		header('Location: page_suppression_categories.php');
	}
	else {
		header('Location: page_suppression_categories.php');
	}
}
elseif ($id_as == 3) {
	//modification d'une catégorie
	if (isset($_POST['id'], $_POST['noms'])){
		$id = (int) $_POST['id'];
		$noms = htmlspecialchars($_POST['noms']);
		
		try {
			$bdd = new PDO('mysql:host=localhost;dbname=mini-projet','root','');
			// gestion du niveau d'erreur
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			// requête dans la variable $sql puis injection de la requête dans la base, le tout dans la variable $req
			$sql = "UPDATE `categories` SET `noms` = '".$noms."', `liens` = 'photos/".$noms."/' WHERE `categories`.`id` =".$id;
			$req = $bdd -> query($sql);
		}
		catch(PDOException $e) {
			echo "Problème de connexion à la base de données :".$e->getMessage();
			die();
		}
		header('Location: page_modification_categories.php');
	}
	else {
		header('Location: page_modification_categories.php');
	}
}
?>